<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Partners extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    public $fillable = [
        'name',
        'description',
        'link',
        'name_ru',
        'description_ru',
        'name_en',
        'description_en',
    ];

}
