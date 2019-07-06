<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now('Asia/Singapore')->format('Y-m-d H:i:s');
        DB::table('projects')->insert([
            [
                'title_project' => 'Others',
                'code_project' => 'OTHER',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_project' => 'Klick',
                'code_project' => 'KLICK',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_project' => 'Singapore Symphony Orchestra',
                'code_project' => 'SSO',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_project' => 'Personal Projects',
                'code_project' => 'PROJ',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_project' => 'Prototype or Proof-of-concept',
                'code_project' => 'POC',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_project' => 'Learning (tutorials, playground, etc)',
                'code_project' => 'LEARN',
                'created_at' => $now,
                'updated_at' => $now
            ]
        ]);
    }
}
