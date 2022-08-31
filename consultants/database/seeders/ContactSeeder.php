<?php

namespace Database\Seeders;

use App\Models\Backend\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = Contact::create([

            'email' => 'admin@gmail.com',
            'mobile' => '059123123123',
            'address' => 'السعودية - الرياض',

        ]);
    }
}
