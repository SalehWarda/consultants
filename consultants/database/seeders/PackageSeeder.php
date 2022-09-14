<?php

namespace Database\Seeders;

use App\Models\Backend\Package;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();



        for ($i = 1; $i <= 10; $i++) {
            Package::create([

                'title'                  =>  $faker->sentence(2, true) ,
                'price'                 => $faker->numberBetween(5, 200),
                'time_period'                => 'yearly',
                'features'           => $faker->paragraph,
                'created_at'            => now(),
                'updated_at'            => now(),
            ]);


        }

    }
}
