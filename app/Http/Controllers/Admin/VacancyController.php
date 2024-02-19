<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Vacancy::all();
        return view("admin.vacancy.index" , compact("datas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.vacancy.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'description' => 'required',
            'description_ru' => 'required',
            'description_en' => 'required',
            'image'=>'required'
        ]);
        $vacancy = Vacancy::create($request->all());
        $vacancy->addMediaFromRequest('image')->usingName($vacancy->title)->toMediaCollection();
        return redirect()->route("admin.vacancy.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $vacancy =  Vacancy::find($id);
        return view('admin.vacancy.show' , compact('vacancy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vacancy = Vacancy::find($id);
        $vacancy->delete();
        return back();
    }
}
