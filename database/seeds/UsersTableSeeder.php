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
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Admin',
            'userName' => 10001,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);   
        
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Auther',
            'userName' => 20001,
            'email' => 'auther@gmail.com',
            'password' => bcrypt('auther'),
        ]);  
    }
}
