<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $customer = User::create([

            'name' => 'saleh Abuwarda',
            'email' => 'saleh@gmail.com',
            'age' => '25',
            'job' => 'Developer',
            'email_verified_at' => now(),
            'mobile' => '05900000002',
            'password' => bcrypt('123123123'),
            'remember_token' => Str::random(10)]);

    }
}
