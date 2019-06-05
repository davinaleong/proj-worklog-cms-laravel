<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\DatabaseLog;

class DatabaseLogTest extends TestCase
{
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
        $sourcesOutput = "Log/1,LogEntries/1-15,EntryItems/1-15,";
        $this->assertEquals($sourcesOutput, $databaseLog->humanSources());
    }

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
            'sources' => \json_encode($sources),
            'action' => 'C'
        ]);
    }
}
