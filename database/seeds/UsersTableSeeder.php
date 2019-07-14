<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        User::create([
            'name' => 'Davina Leong',
            'email' => 'leong.shi.yun@gmail.com',
            'photo' => $faker->imageUrl($width = 640, $height = 480),
            'password' => '$2y$12$vVd3Ab93ZNs6q0CcOObO8.PtmKki3Vi2IpQFFGJe5MPXxLG.2qnOW'
        ]);
    }
}
