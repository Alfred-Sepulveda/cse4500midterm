<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentCatagory extends Model
{
 protected $fillable = ['HardwareSpecs','Price','PurchaseDate'];
    use HasFactory;
}


