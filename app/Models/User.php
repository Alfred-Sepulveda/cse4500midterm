<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['LastName','FirstName','Email','ContactNumber','HistoryServices'];
    use HasFactory;

    protected $table = 'users';

    public function users()
    {
        return $this->belongsTo(Users::class);
    }
}
    
