<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\VacancyResource;
use App\Models\Vacancy;

class VacancyController extends Controller
{
    public function index()
    {
        return VacancyResource::collection(Vacancy::all());
    }
}
