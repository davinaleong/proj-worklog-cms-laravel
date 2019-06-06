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
        $now = new \DateTime('now', new \DateTimeZone('Asia/Singapore'));
        DB::table('sources')->insert([
            [
                'title_source' => 'Users',
                'group' => 'Profile',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'title_source' => 'ActivityLogs',
                'group' => 'Profile',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'title_source' => 'DatabaseLogs',
                'group' => 'Auth',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'title_source' => 'Log Actions',
                'group' => 'Auth',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'title_source' => 'Sources',
                'group' => 'Auth',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'title_source' => 'Logs',
                'group' => 'Work Log',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'title_source' => 'LogsEntries',
                'group' => 'Work Log',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'title_source' => 'EntryItems',
                'group' => 'Work Log',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'title_source' => 'Years',
                'group' => 'Work Log',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'title_source' => 'Companies',
                'group' => 'Work Log',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'title_source' => 'Projects',
                'group' => 'Work Log',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'title_source' => 'DayTypes',
                'group' => 'Work Log',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
