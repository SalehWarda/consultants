<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Model
{
    use HasApiTokens, HasFactory, Notifiable;



    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',


    ];



    protected $hidden = [
        'password',
        'remember_token',
    ];





}
