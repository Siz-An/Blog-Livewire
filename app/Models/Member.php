<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
   protected $fillable=[
    'name',
    'designation',
    'fb_url',
    'in_url',
    'x_url',
    'image',
    'status',
    'linkdin',
    'github',
   ];
}
