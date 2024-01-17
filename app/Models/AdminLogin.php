<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class AdminLogin extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $table = 'admins';
    protected $fillable = [
        'email',
        'password',
    ];
}
