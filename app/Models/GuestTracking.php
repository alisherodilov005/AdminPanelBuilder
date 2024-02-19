<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestTracking extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
        'token',
        'description',
    ];
}
