<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Burhannurhasan',
            'email' =>  'skyhanss0@gmail.com',
            'password' =>  Hash::make('12345678'),
            'created_at' => now(),
        ]);
    }
};