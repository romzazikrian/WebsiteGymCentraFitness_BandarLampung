<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminRegister extends Model
{
    use HasFactory;

    protected $table = "admins";
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // Additional model logic can be added here if needed
}
