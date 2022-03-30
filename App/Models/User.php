<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name','email','phonenumber','services'];
    use HasFactory;

    protected $table = 'users';

    public function historyservices()
    {
        return $this->belongsTo(Users::class);
    }
}
    
