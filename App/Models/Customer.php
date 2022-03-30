<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name','email','phonenumber','services'];
    use HasFactory;

    protected $table = 'customers';

    public function historyservices()
    {
        return $this->belongsTo(Invoice::class);
    }
}
