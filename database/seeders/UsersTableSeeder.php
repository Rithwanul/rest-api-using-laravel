<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        // clear user table first
        User::truncate();

        $faker = \Faker\Factory::create();


        /**
         * Make A password for all the user
         * Hash the password
         */

         $password = Hash::make("Dico");

         User::create([
             'name'     => 'Administrator',
             'email'    => 'rithwanul@gmail.com',
             'password' => $password,
         ]);

        /**
         * Create a dozens of users
         */

         for($i = 0; $i < 10; $i++){
             User::create([
                 'name'     => $faker->name,
                 'email'    => $faker->email,
                 'password' => $password,
             ]);
         }
    }
}
