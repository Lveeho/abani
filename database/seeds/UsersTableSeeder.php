<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'firstname'=>'Lore',
            'lastname'=>'Vanhooren',
            'email'=>'vanhooren.lore@hotmail.com',
            'password'=>bcrypt(123),
         ]);
        DB::table('users')->insert([
            'firstname'=>'Brent',
            'lastname'=>'Vanhooren',
            'email'=>'vanhooren.brent@hotmail.com',
            'password'=>bcrypt(123),
        ]);

    }
}
