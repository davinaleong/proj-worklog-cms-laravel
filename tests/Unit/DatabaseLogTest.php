<?php

namespace Tests\Unit;

use App\LogAction;
use App\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\DatabaseLog;

class DatabaseLogTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * Verifies that the output of the source column is correct.
     *
     * @return void
     */
    public function check_output_of_sources_column_correct()
    {
        // Create a database log
        $this->newDatabaseLog();

        // Retrieve database log by id
        $databaseLog = DatabaseLog::findOrFail(1);

        // Assert sources output
        $sourcesOutput = "Log/1,LogEntries/1-5,EntryItems/1-15,";
        $this->assertEquals($sourcesOutput, $databaseLog->humanSources());
    }

    /**
     * @test
     * Checks that the output of actionName is 'Create' when action is 'C'.
     *
     * @return void
     */
    public function check_action_c_gives_name_create()
    {
        // Create records
        $this->newLogAction();
        $dbLog = $this->newDatabaseLog();

        // Assert the name of the action of a database log
        $this->assertEquals('Create', $dbLog->nameAction());
    }

    /**
     * @test
     * Check that the DB Log has an actual user attached to it.
     *
     * @return void
     */
    public function check_database_log_has_a_user()
    {
        // Create records
        $this->newUser();
        $dbLog = $this->newDatabaseLog();

        // Assert that the dbLog user exists
        $this->assertNotNull($dbLog->user());
    }

    /**
     * Creates a new database log for testing purposes;
     *
     * @return App\DatabaseLog
     */
    private function newDatabaseLog()
    {
        $sources = [
            [
                'source' => 'Log',
                'ids' => [1]
            ], [
                'source' => 'LogEntries',
                'ids' => [1,2,3,4,5]
            ], [
                'source' => 'EntryItems',
                'ids' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]
            ]
        ];

        return factory(DatabaseLog::class)->create([
            'user_id' => 1,
            'log' => 'User created a new log record.',
            'sources' => json_encode($sources),
            'action' => 'C'
        ]);
    }

    /**
     * Creates a new log action.
     *
     * @return App\LogAction
     */
    private function newLogAction()
    {
        return factory(LogAction::class)->create([
            'name' => 'Create',
            'action_code' => 'C'
        ]);
    }

    /**
     * Createa a user.
     *
     * @return App\User
     */
    private function newUser()
    {
        return factory(User::class)->create([
            'name'      => 'Jane Doe',
            'email'     => 'Jane.doe@example.com',
            'email_verified_at' => '2019-06-01 16:45:00',
            'password'  => bcrypt('test1234'),
            'photo'     => 'https://lorempixel.com/640/480/?65533',
            'created_at'    => '2019-06-01 16:45:00',
            'updated_at'    => '2019-06-01 16:45:00',
            'deleted_at'    => '2019-06-01 16:45:00',
            'logged_in_at'    => '2019-06-01 16:45:00',
        ]);
    }
}
