<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'nome' =>  'admin',
            'email' => 'admin@admin',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'remember_token' => Str::random(),
        ]);

        User::create([

            'nome' =>  'Sara',
            'email' => 'sara@sara.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'remember_token' => Str::random(),
        ]);
    }
}
