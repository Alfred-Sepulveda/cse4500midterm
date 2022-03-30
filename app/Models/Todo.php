<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['name','email','phonenumber',
        'support','progress'];
    use HasFactory;
}
