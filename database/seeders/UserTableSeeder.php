<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = \Faker\Factory::create();
        $password = bcrypt('123456');

        User::create([
            'name' => 'Anderson',
            'email' => 'anderson@g.c',
            'password' => $password
        ]);

        for ($i=0; $i < 30; $i++) { 
            User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => $password
            ]);
        }
    }
}
