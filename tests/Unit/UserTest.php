<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * Check that the hash is store in DB instead of the raw password value.
     *
     * @return void
     */
    public function check_password_is_encrypted()
    {
        // Create a user
        $user = $this->newUser();

        // Assert created user's password is not stored raw
        $this->assertNotEquals('test1234', $user->password);

        // Assert create user's password is encrypted correctly
        $this->assertContains('$2y$04', $user->password);
    }

    /**
     * @test
     * Checks for the output of datetime fields.
     *
     * @return void
     */
    public function check_human_datetime_output()
    {
        // Create a user
        $user = $this->newUser();

        // Assert human format of datetime fields
        $this->assertEquals('01 Jun 2019, 16:45:00', $user->humanCreatedAt());
        $this->assertEquals('01 Jun 2019, 16:45:00', $user->humanUpdatedAt());
        $this->assertEquals('01 Jun 2019, 16:45:00', $user->humanLoggedInAt());
    }

    /**
     * @test
     * Check that isVerified is false when email_verified_at is empty.
     *
     * @return void
     */
    public function user_not_verified_when_email_verified_at_not_filled()
    {
        // Create a user with email_verified_at empty
        $user = $this->newUser(null);

        // Assert user is not verified
        $this->assertFalse($user->isVerified());
    }

    /**
     * @test
     * Check that user is marked 'verified' when the email_verified_at
     * field is filled.
     *
     * @return void
     */
    public function user_verified_when_email_verified_at_filled()
    {
        // Create a user with email_verified_at filled
        $user = $this->newUser('2019-06-01 16:45:00');

        // Assert user is verified
        $this->assertTrue($user->isVerified());
    }

    /**
     * @test
     * Check isDeleted returns false when deleted_at is empty.
     *
     * @return void
     */
    public function user_not_deleted_when_deleted_at_empty()
    {
        // Create a user with deleted_at is null
        $user = $this->newUser(null, null);

        // Assert that isDeleted is false
        $this->assertFalse($user->isDeleted());
    }

    /**
     * @test
     * Check that user is deleted when deleted_at is filled.
     *
     * @return void
     */
    public function user_deleted_when_deleted_at_filled()
    {
        // Create a user with deleted_at filled
        $user = $this->newUser(null, '2019-06-01 16:45:00');

        // Assert that isDeleted is true
        $this->assertTrue($user->isDeleted());
    }

    /**
     * Create a user for the purpose of testing.
     *
     * @return App\User
     */
    private function newUser($emailVerifiedAt=null, $deletedAt=null)
    {
        return factory(User::class)->create([
            'name'      => 'Jane Doe',
            'email'     => 'Jane.doe@example.com',
            'email_verified_at' => $emailVerifiedAt,
            'password'  => Hash::make('test1234'),
            'photo'     => 'https://lorempixel.com/640/480/?65533',
            'created_at'    => '2019-06-01 16:45:00',
            'updated_at'    => '2019-06-01 16:45:00',
            'deleted_at'    => $deletedAt,
            'logged_in_at'    => '2019-06-01 16:45:00',
        ]);
    }
}
