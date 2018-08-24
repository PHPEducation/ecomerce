<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'ThuyDung',
            'email' => 'thuydungcnptit@gmai.com',
            'password' => Hash::make('123456'),
            'phone' => '0902107411',
            'address' => 'Hung Yen',
            'note' => 'd',
            'role' => '1'
        ]);
    }
}
