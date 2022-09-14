<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Backend\Contact;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(AdminSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(MailSeeder::class);
        $this->call(CouponSeeder::class);
        $this->call(PackageSeeder::class);
        $this->call(OrderSeeder::class);

    }
}
