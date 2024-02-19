<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'number',
        'status'
    ];
    public const CONTACT_STATUS =  [
        '0'=>'Yangi',
        '1'=>'Javob berildi',
    ];
}
