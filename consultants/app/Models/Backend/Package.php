<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Package extends Model
{
    use HasFactory,HasTranslations;

    protected $guarded=[];

    public $translatable = ['title','features'];


    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class,'order_package');
    }
}
