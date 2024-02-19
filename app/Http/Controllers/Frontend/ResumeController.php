<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function store(Request $request ,$id){
   
        Resume::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'description'=>$request->description,
            'number'=>$request->number,
            'vacancy_id'=>$id
        ]);
        return back()->with(['msg'=>'Malumot yuborildi']);
    }
}
