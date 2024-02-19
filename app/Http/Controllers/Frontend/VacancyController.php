<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function index(){
        $datas = Vacancy::all();
        return view('frontend.vacancy.index' , compact('datas'));
    }
    public function show($id){
        $vacancy = Vacancy::find($id);
        return view('frontend.vacancy.show' , compact('vacancy'));
    }
}
