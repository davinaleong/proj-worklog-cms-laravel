<?php

use Illuminate\Database\Seeder;
use App\LogAction;

class LogActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now('Asia/Singapore')->format('Y-m-d H:i:s');
        DB::table('log_actions')->insert([
            [
                'title_action' => 'Others',
                'code_action' => 'O',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_action' => 'Create',
                'code_action' => 'C',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_action' => 'Retrieve',
                'code_action' => 'R',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_action' => 'Update',
                'code_action' => 'U',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_action' => 'Delete',
                'code_action' => 'D',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_action' => 'Auth',
                'code_action' => 'A',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_action' => 'Transaction',
                'code_action' => 'T',
                'created_at' => $now,
                'updated_at' => $now
            ]
         ]);
    }
}
