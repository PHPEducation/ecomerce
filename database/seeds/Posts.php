<?php

use Illuminate\Database\Seeder;

class Posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 10; $i++) 
        { 
            $title = $faker->realText(100, 1);
            $slug = str_slug($title . '-' . microtime(), '-');
            $posts = [
                'title' => $title,
                'content' => $faker->realText(100, 1),
                'author' => $faker->name(),
                'date' => $faker->date(),
                'slug' => $slug,
            ];

            DB::table('posts')->insert($posts);
        }
    }
}
