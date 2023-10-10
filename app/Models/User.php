<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenteicatable;

class User extends Authenteicatable
{
    use HasFactory;

    protected $fillable = [
        'NIM',
        'role',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected $table = 'users';
    public $timestamps = false;
    protected $primaryKey = 'NIM';
}
