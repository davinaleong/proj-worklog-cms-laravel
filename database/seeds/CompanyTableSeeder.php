<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now('Asia/Singapore')->format('Y-m-d, H:i:s');
        DB::table('companies')->insert([
            [
                'title_company' => 'The Shipyard Private Limited',
                'code_company' => 'TSY',
                'period_started_on' => '2015-11-01 08:00:00',
                'period_ended_on' => '2018-04-25 06:30:00',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_company' => 'The Pixel Age',
                'code_company' => 'TPA',
                'period_started_on' => '2018-05-10 09:30:00',
                'period_ended_on' => null,
                'created_at' => $now,
                'updated_at' => $now
            ]
        ]);
    }
}
