<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'shoe',
                'slug' => 'aaa',
                'parent_id' => 0
            ],
            [
                'name' => 'clothes',
                'slug' => 'ccc',
                'parent_id' => 0
            ],
            [
                'name' => 'jewelry',
                'slug' => 'jjj',
                'parent_id' => 0
            ]
        ];
        DB::table('categories')->insert($categories);
    }
}
