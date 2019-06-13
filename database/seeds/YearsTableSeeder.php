<?php

use Illuminate\Database\Seeder;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now('Asia/Singapore')->format('Y-m-d, H:i:s');
        DB::table('years')->insert([
            [
                'title_year' => '2015',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_year' => '2016',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_year' => '2017',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_year' => '2018',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_year' => '2019',
                'created_at' => $now,
                'updated_at' => $now
            ]
        ]);
    }
}
