<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Filliar;
use Illuminate\Http\Request;

class FiliallarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Filliar::all();
        return view('admin.filillar.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.filillar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'name_ru' => 'required',
                'name_en' => 'required',
                'subtext' => 'required',
                'subtext_en' => 'required',
                'subtext_ru' => 'required',
                'number' => 'required',
                'region_id' => 'required'
            ]
        );
        Filliar::create($request->all());
        return redirect()->route('admin.filillar.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fill = Filliar::find($id);
        return view('admin.filillar.edit', compact('fill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'name_ru' => 'required',
                'name_en' => 'required',
                'subtext' => 'required',
                'subtext_en' => 'required',
                'subtext_ru' => 'required',
                'number' => 'required',
                'region_id' => 'required'
            ]
        );
        $fill = Filliar::find($id);
        $fill->update($request->all());
        return redirect()->route('admin.filillar.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Filliar::find($id);
        $data->delete();
        return back();
    }
}
