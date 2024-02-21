@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ __('backend.fill') }}</h2>
                <div class="card mt-2">
                    <div class="card-body">
                        @can('fillials_create')
                            <x-create-button route="{{ route('admin.filillar.create') }}" name="{{ __('backend.fill') }}" />
                        @endcan
                        <table class="table">
                            <tr>
                                <th>
                                    id
                                </th>
                                <th>
                                    name
                                </th>
                                <th>
                                    number
                                </th>
                                <th>
                                    subtext
                                </th>
                                <th>
                                    Viloyat
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                            <tbody>
                                @foreach ($data as $fil)
                                    <tr>
                                        <td>
                                            {{ $fil->id }}
                                        </td>
                                        <td>
                                            {{ $fil->name }}
                                        </td>
                                        <td>
                                            {{ $fil->number }}
                                        </td>
                                        <td>
                                            {{ $fil->subtext }}
                                        </td>
                                        <td>
                                            {{ $fil->region->name }}
                                        </td>
                                        <td>
                                            <x-action-buttons routeDelete="{{ route('admin.filillar.destroy', $fil->id) }}"
                                                routeEdit="{{ route('admin.filillar.edit', $fil->id) }}"
                                                canDelete="fillials_delete" canEdit="fillials_edit" />
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
