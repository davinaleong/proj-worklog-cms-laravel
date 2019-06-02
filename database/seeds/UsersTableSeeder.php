<?php

use Illuminate\Database\Seeder;
use App\Models\User;

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

	    foreach (range(1,3) as $i) {
	        User::create([
	            'name' => $faker->name,
	            'email' => $faker->email,
                'photo' => $faker->imageUrl($width = 640, $height = 480),
                'password' => $faker->password,
                'api_token' => Str::random(60)
	        ]);
	    }
    }
}
