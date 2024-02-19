@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ __('backend.projects') }}</h2>
               
                <div class="card mt-2">
                    <div class="card-body">
                        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Create project</a>
                        <table class="table mt-3mas" >
                            <tr>
                                <th>
                                    id
                                </th>
                                <th>
                                    link
                                </th>
                                <th>
                                    title
                                </th>
                                <th>
                                    Image
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <td>{{ $project->id }}</td>
                                        <td><a href="{{ $project->link }}">{{ $project->link }}</a></td>
                                        <td>{{ $project->title }}</td>
                                        <td>
                                            <img src="{{ $project->getFirstMediaUrl() }}" alt=""
                                                style="width: 150px;">
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <x-delete-button route="{{ route('admin.projects.destroy', $project->id) }}"/>
                                                <a href="{{ route('admin.projects.edit', $project->id) }}"
                                                    class="btn btn-warning"><i class="ri-edit-2-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
