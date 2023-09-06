<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Mohammed Mostafa',
            'email' => 'mohammed_mostafa@usc.edu.eg',
            'password' => bcrypt('123123123'),
        ]);
        $user->attachRole('super_admin');


        $user = User::create([
            'name' => 'Ali Mohammed',
            'email' => 'ali@usc.edu.eg',
            'password' => bcrypt('123123123'),
        ]);
        $user->attachRole('super_admin');


        $user = User::create([
            'name' => 'Ayman',
            'email' => 'ayman_portal@usc.edu.eg',
            'password' => bcrypt('123123123'),
        ]);
        $user->attachRole('blogger');


        $user = User::create([
            'name' => 'Ahmed',
            'email' => 'ahmed@app.com',
            'password' => bcrypt('123123123'),
        ]);
        $user->attachRole('user');

    } // End of Run

} // End of Seeder
