<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:news_index')->only('index');
        $this->middleware('permission:news_create')->only('create');
        $this->middleware('permission:news_edit')->only('edit');
        $this->middleware('permission:news_delete')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
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
            'mainPhoto' => 'required',
        ]);
        $partner = Blog::create($request->all());
        $partner->addMediaFromRequest('mainPhoto')->usingName($partner->id)->toMediaCollection();

        return redirect()->route('admin.blogs.index');
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
        $data = Blog::find($id);

        return view('admin.blogs.edit', compact('data'));
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
        ]);
        $blog = Blog::find($id);
        $blog->update($request->all());
        if ($request->hasFile('mainPhoto')) {
            $blog->clearMediaCollection();
            $blog->addMediaFromRequest('mainPhoto')->usingName($blog->id)->toMediaCollection();
        }

        return redirect()->route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return back();
    }
}
