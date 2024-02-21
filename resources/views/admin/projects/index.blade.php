@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ __('backend.projects') }}</h2>

                <div class="card mt-2">
                    <div class="card-body">
                        @can('projects_create')
                            <x-create-button route="{{ route('admin.projects.create') }}" name="Projectlar" />
                        @endcan
                        <table class="table mt-3mas">
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
                                                <x-action-buttons
                                                    routeDelete="{{ route('admin.projects.destroy', $project->id) }}"
                                                    routeEdit="{{ route('admin.projects.edit', $project->id) }}"
                                                    canDelete="projects_delete" canEdit="projects_edit" />
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
