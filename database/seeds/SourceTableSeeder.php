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
                'name' => 'Users',
                'group' => 'Profile',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'name' => 'ActivityLogs',
                'group' => 'Profile',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'name' => 'DatabaseLogs',
                'group' => 'Auth',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'name' => 'Log Actions',
                'group' => 'Auth',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'name' => 'Sources',
                'group' => 'Auth',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'name' => 'Logs',
                'group' => 'Work Log',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'name' => 'LogsEntries',
                'group' => 'Work Log',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'name' => 'EntryItems',
                'group' => 'Work Log',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'name' => 'Years',
                'group' => 'Work Log',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'name' => 'Companies',
                'group' => 'Work Log',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'name' => 'Projects',
                'group' => 'Work Log',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ], [
                'name' => 'DayTypes',
                'group' => 'Work Log',
                'created_at' => $now->format('Y-m-d H:i:s'),
                'updated_at' => $now->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
