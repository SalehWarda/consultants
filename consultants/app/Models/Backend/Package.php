<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Package extends Model
{
    use HasFactory;

    protected $guarded=[];



    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class,'order_package');
    }
}
