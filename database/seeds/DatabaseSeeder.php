<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(LogActionsTableSeeder::class);
        $this->call(SourceTableSeeder::class);
        $this->call(YearsTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(DayTypesTableSeeder::class);
//        $this->call(WorkLogTablesSeeder::class);
    }
}
