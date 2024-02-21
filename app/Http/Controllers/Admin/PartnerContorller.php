<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partners;
use Illuminate\Http\Request;

class PartnerContorller extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:partners_index')->only('index');
        $this->middleware('permission:partners_create')->only('create');
        $this->middleware('permission:partners_edit')->only('edit');
        $this->middleware('permission:partners_delete')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partners::all();

        return view('admin.partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'name_ru' => 'required',
            'description_ru' => 'required',
            'name_en' => 'required',
            'description_en' => 'required',
            'image' => 'required',
            'link' => 'required',
        ]);
        $partner = Partners::create($request->all());
        $partner->addMediaFromRequest('image')->usingName($partner->id)->toMediaCollection();

        return redirect()->route('admin.partner.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Partners::find($id);

        return view('admin.partner.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
           'name' => 'required',
           'description' => 'required',
           'name_ru' => 'required',
           'description_ru' => 'required',
           'name_en' => 'required',
           'description_en' => 'required',
        ]);
        $partner = Partners::find($id);
        $partner->update($request->all());
        if ($request->hasFile('image')) {
            $partner->clearMediaCollection();
            $partner->addMediaFromRequest('image')->usingName($partner->id)->toMediaCollection();
        }

        return redirect()->route('admin.partner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = Partners::find($id);
        $partner->delete();

        return redirect()->route('admin.partner.index');
    }
}
