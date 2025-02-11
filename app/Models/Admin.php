<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'birth_date', 'gender', 'password'];
    protected $hidden = ['password'];
}
