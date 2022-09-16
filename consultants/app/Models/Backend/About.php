<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasFactory,HasTranslations;

    protected $guarded = [];

    public $translatable = ['title_one','title_tow','title_three','title_four','body_one','body_tow','body_three','body_four'];
}
