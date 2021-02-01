<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // User::truncate();
        $faker = \Faker\Factory::create();
        
        $password = Hash::make('pass');

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => $password,
        ]);

        for($i = 0; $i < 12; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ]);
        }
    }
}
