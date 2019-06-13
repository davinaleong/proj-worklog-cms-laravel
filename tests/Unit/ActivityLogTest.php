<?php

namespace Tests\Unit;

use App\ActivityLog;
use App\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ActivityLogTest extends TestCase
{
    /**
     * @test
     * Check that an activity log can have an associate user.
     *
     * @return void
     */
    public function check_can_have_associated_user()
    {
        // Create records
        $this->newUser();
        $activityLog = $this->newActivityLog();

        // Assert user exists
        $this->assertNotNull($activityLog->user());
    }

    /**
     * Creates and returns a new user.
     *
     * @return App\User
     */
    private function newUser()
    {
        return factory(User::class)->create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'email_verified_at' => '2019-06-01 16:45:00',
            'password'  => Hash::make('test1234'),
            'photo'     => 'https://lorempixel.com/640/480/?65533',
            'created_at'    => '2019-06-01 16:45:00',
            'updated_at'    => '2019-06-01 16:45:00',
            'deleted_at'    => '2019-06-01 16:45:00',
            'logged_in_at'    => '2019-06-01 16:45:00',
        ]);
    }

    /**
     * Creates and returns a new activity log.
     *
     * @return App\ActivityLog
     */
    private function newActivityLog()
    {
        return factory(ActivityLog::class)->create([
            'user_id' => 1,
            'log_activity' => 'Log created from testing suite.'
        ]);
    }
}
