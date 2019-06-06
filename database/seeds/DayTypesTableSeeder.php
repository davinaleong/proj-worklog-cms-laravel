<?php

use Illuminate\Database\Seeder;

class DayTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now('Asia/Singapore')->format('Y-m-d H:i:s');
        DB::table('day_types')->insert([
            [
                'title_type' => 'Others',
                'code_type' => 'O',
                'icon_fa' => 'fas fa-fw fa-question',
                'color_hex' => '#9e9e9e',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_type' => 'Work Day',
                'code_type' => 'W',
                'icon_fa' => 'fas fa-fw fa-laptop-code',
                'color_hex' => '#607d8b',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_type' => 'Annual Leave',
                'code_type' => 'A',
                'icon_fa' => 'fas fa-fw fa-umbrella-beach',
                'color_hex' => '#ff9800',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_type' => 'Public Holiday',
                'code_type' => 'P',
                'icon_fa' => 'fas fa-fw fa-calendar',
                'color_hex' => '#009688',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_type' => 'Medical Leave',
                'code_type' => 'M',
                'icon_fa' => 'fas fa-fw fa-stethoscope',
                'color_hex' => '#e91e63',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_type' => 'Hospital Leave',
                'code_type' => 'H',
                'icon_fa' => 'fas fa-fw fa-ambulance',
                'color_hex' => '#e91e63',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_type' => 'Compassionate Leave',
                'code_type' => 'C',
                'icon_fa' => 'fas fa-fw fa-hand-holding-heart',
                'color_hex' => '#8e24aa',
                'created_at' => $now,
                'updated_at' => $now
            ], [
                'title_type' => 'Company Event',
                'code_type' => 'B',
                'icon_fa' => 'fas fa-fw fa-building',
                'color_hex' => '#3f51b5',
                'created_at' => $now,
                'updated_at' => $now
            ]
        ]);
    }
}
