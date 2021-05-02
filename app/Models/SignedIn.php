<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignedIn extends Model
{
    use HasFactory;

    protected $fillable = [
        'student',
        'timestamp'
    ];
}
