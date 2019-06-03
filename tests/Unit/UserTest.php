<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
        $this->markTestIncomplete();
        // Create a user

        // Assert human format of datetime fields
    }

    /**
     * Creates a user for the purpose of testing.
     *
     * @return App\Models\User
     */
    private function newUser()
    {
        return factory(User::class)->create([
            'name'      => 'Jane Doe',
            'email'     => 'Jane.doe@example.com',
            'password'  => Hash::make('test1234'),
            'photo'     => 'https://lorempixel.com/640/480/?65533'
        ]);
    }
}
