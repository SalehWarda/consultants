<?php

namespace Database\Seeders;

use App\Models\Backend\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title_one' => 'العنوان الاول',
            'body_one' => 'المحتوى الأول',
            'title_tow' => 'العنوان الثاني',
            'body_tow' => 'المحتوى الثاني',
            'title_three' => 'العنوان الثالث',
            'body_three' => 'المحتوى الثالث',
            'title_four' => 'العنوان الرابع',
            'body_four' => 'المحتوى الرابع',
        ]);
    }
}
