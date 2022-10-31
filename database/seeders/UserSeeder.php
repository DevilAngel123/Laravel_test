<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([ 
        [
            'user_name'=>'user_1',
            'user_email'=>'user@gmail.com',
            'user_password'=>Hash::make('password'),
            'role'=>'admin'
        ]  ,  
        [
            'user_name'=>'user_2',
            'user_email'=>'user2@gmail.com',
            'user_password'=>Hash::make('password'),
            'role'=>'customer'
        ]       
           
       ]      
        ) ;
    }
}
