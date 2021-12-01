<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usercompany extends Model
{
    use HasFactory;
       protected $table = 'usercompanies';

    protected $fillable = [
        'fullname',
        'role_id',
        'isactivated',
        'email',
        'password',
        'dailytarget',
        'image',
    ];
}
