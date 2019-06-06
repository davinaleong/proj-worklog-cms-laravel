<?php

use Illuminate\Database\Seeder;

class SourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now('Asia/Singapore')->format('Y-m-d, H:i:s');
        DB::table('sources')->insert([
            [
                'title_source' => 'Users',
                'group' => 'Profile',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_source' => 'ActivityLogs',
                'group' => 'Profile',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_source' => 'DatabaseLogs',
                'group' => 'Auth',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_source' => 'Log Actions',
                'group' => 'Auth',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_source' => 'Sources',
                'group' => 'Auth',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_source' => 'Logs',
                'group' => 'Work Log',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_source' => 'LogsEntries',
                'group' => 'Work Log',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_source' => 'EntryItems',
                'group' => 'Work Log',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_source' => 'Years',
                'group' => 'Work Log',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_source' => 'Companies',
                'group' => 'Work Log',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_source' => 'Projects',
                'group' => 'Work Log',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_source' => 'DayTypes',
                'group' => 'Work Log',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
