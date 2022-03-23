<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

cl}ass Event extends Model
{
    protected $fillable = ['title','start_at','end_at'];

    use HasFactory;
