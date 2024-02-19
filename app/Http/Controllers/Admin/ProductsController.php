<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::paginate(20);
        return view("admin.products.index", compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.products.create");
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
            'link' => 'required',
            'products' => 'required|file|mimes:jpg,jpeg,png,pdf',
        ]);
        $product = Products::create($request->all());
       
        try {
            //code...
            $product->addMediaFromRequest('products')->usingName($product->id)->toMediaCollection();
        } catch (\Throwable $th) {
            return back()->withErrors($th);
        }

        return redirect()->route('admin.products.index');
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
        $data = Products::find($id);
        return view('admin.products.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'description' => 'required',
            'description_ru' => 'required',
            'description_en' => 'required',
            'link' => 'required',

        ]);
        $product = Products::find($id);
        $product->update($request->all());
        if ($request->hasFile('products')) {
            $product->clearMediaCollection();
            $product->addMediaFromRequest('products')->usingName($product->id)->toMediaCollection();
        }
        return redirect()->route('admin.products.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $p = Products::find($id);
        $p->delete();
        return back();
    }
}
