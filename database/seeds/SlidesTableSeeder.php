<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $slide = [
            [
                'link' => 'banh',
                'image' => 'banner1.jpg',
            ],
            [
                'link' => 'banh',
                'image' => 'banner3.jpg',
            ],
            [
                'link' => 'banh',
                'image' => 'banner4.jpg',
            ],
            [
                'link' => 'banh',
                'image' => 'banner5.jpg',
            ]
        ];
        DB::table('slides')->insert($slide);
    }
}

