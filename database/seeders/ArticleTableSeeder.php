<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        $faker = \Faker\Factory::create();
        $users = User::all();
        for ($i=0; $i < 30; $i++) { 
            Article::create([
                'title' => $faker->sentence(),
                'body' => $faker->paragraph(),
                'user_id' => 1
            ]);
        }

    }
}
