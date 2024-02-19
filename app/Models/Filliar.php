<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filliar extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'number',
        'name_ru',
        'name_en',
        'subtext',
        'subtext_ru',
        'subtext_en',
        'region_id'

    ];
    public function region()
    {
       return $this->belongsTo(Regions::class , 'region_id');
    }
}
