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
            'title_one'   => ['ar' => 'العنوان الاول بالعربية','en' => 'العنوان الاول بالإنجليزية'],
            'body_one'    => ['ar' => 'المحتوى الاول بالعربية','en' => 'المحتوى الاول بالإنجليزية'],
            'title_tow'   => ['ar' => 'العنوان الثاني بالعربية','en' => 'العنوان الثاني بالإنجليزية'],
            'body_tow'    => ['ar' => 'المحتوى الثاني بالعربية','en' => 'المحتوى الثاني بالإنجليزية'],
            'title_three' => ['ar' => 'العنوان الثالث بالعربية','en' => 'العنوان الثالث بالإنجليزية'],
            'body_three'  => ['ar' => 'المحتوى الثالث بالعربية','en' => 'المحتوى الثالث بالإنجليزية'],
            'title_four'  => ['ar' => 'العنوان الرابع بالعربية','en' => 'العنوان الرابع بالإنجليزية'],
            'body_four'   => ['ar' => 'المحتوى الرابع بالعربية','en' => 'المحتوى الرابع بالإنجليزية'],
        ]);
    }
}
