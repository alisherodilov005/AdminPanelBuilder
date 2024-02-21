<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:partners_index')->only('index');
        $this->middleware('permission:projects_create')->only('create');
        $this->middleware('permission:projects_edit')->only('edit');
        $this->middleware('permission:projects_delete')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Projects::all();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
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
            'photo' => 'required',
        ]);
        $projects = Projects::create($request->all());

        // file upload
        $projects->addMediaFromRequest('photo')->usingName($projects->id)->toMediaCollection();

        return redirect('admin/projects');
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
        $data = Projects::find($id);

        return view('admin.projects.edit', compact('data'));
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
        $project = Projects::find($id);
        $project->update($request->all());
        if ($request->hasFile('photo')) {
            $project->clearMediaCollection();
            $project->addMediaFromRequest('photo')->usingName($project->id)->toMediaCollection();
        }

        return redirect()->route('admin.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Projects::find($id);
        $project->delete();

        return back();
    }
}
