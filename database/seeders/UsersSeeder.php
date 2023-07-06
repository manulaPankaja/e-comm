<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line to import the DB facade class to interact with the database directly
use Illuminate\Support\Facades\Hash; // Add this line to import the Hash facade class to hash the password

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Manula Pankaja',
            'email' => 'pankajabad1998@gmail.com',
            'password' => Hash::make('12345')
        ]);
    }
}
