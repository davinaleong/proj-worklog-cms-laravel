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
        DB::table('log_actions')->insert([
            [
                'name' => 'Others',
                'action_code' => 'O',
                'created_at' => 'CURRENT_TIMESTAMP',
                'updated_at' => 'CURRENT_TIMESTAMP'
            ], [
                'name' => 'Create',
                'action_code' => 'C',
                'created_at' => 'CURRENT_TIMESTAMP',
                'updated_at' => 'CURRENT_TIMESTAMP'
            ], [
                'name' => 'Retrieve',
                'action_code' => 'R',
                'created_at' => 'CURRENT_TIMESTAMP',
                'updated_at' => 'CURRENT_TIMESTAMP'
            ], [
                'name' => 'Update',
                'action_code' => 'U',
                'created_at' => 'CURRENT_TIMESTAMP',
                'updated_at' => 'CURRENT_TIMESTAMP'
            ], [
                'name' => 'Delete',
                'action_code' => 'D',
                'created_at' => 'CURRENT_TIMESTAMP',
                'updated_at' => 'CURRENT_TIMESTAMP'
            ], [
                'name' => 'Auth',
                'action_code' => 'A',
                'created_at' => 'CURRENT_TIMESTAMP',
                'updated_at' => 'CURRENT_TIMESTAMP'
            ], [
                'name' => 'Transaction',
                'action_code' => 'T',
                'created_at' => 'CURRENT_TIMESTAMP',
                'updated_at' => 'CURRENT_TIMESTAMP'
            ]
         ]);
    }
}
