<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'full_name'=>'Emart Admin',
                'username'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('123456'),
                'role'=>'admin',
                'status'=>'active',
            ],
            [
                'full_name'=>'Emart Vendor',
                'username'=>'Vendor',
                'email'=>'vendor@gmail.com',
                'password'=>Hash::make('123456'),
                'role'=>'vendor',
                'status'=>'active',
            ],
            [
                'full_name'=>'Emart Customer',
                'username'=>'Customer',
                'email'=>'customer@gmail.com',
                'password'=>Hash::make('123456'),
                'role'=>'customer',
                'status'=>'active',
            ],
        ]);
    }
}
