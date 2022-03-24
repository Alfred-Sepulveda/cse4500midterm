<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManufacturerSales extends Model
{
 protected $fillable = ['Address','PhoneNumber','ContactName','Email'];
    use HasFactory;
}
