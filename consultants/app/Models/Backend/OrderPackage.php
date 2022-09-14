<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPackage extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $table = 'order_package';

    public $timestamps = false;
    public $incrementing = false;
}
