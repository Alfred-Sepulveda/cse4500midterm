<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
 protected $fillable = ['CompanyName','Address','PhoneNumber','ContactName','Email'];
    use HasFactory;
}
