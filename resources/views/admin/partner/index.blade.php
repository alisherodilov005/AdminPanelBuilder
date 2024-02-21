@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ __('backend.partners') }}</h2>
                @can('partners_create')
                <a href="{{ route('admin.partner.create') }}" class="btn btn-success">Create Partner</a>
                @endcan
                <div class="card mt-2">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>
                                    id
                                </th>
                                <th>
                                    image
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    description
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                            <tbody>
                                @foreach ($partners as $partner)
                                    <tr>
                                        <td>{{ $partner->id }}</td>
                                        <td>
                                            <img src="{{ $partner->getFirstMediaUrl() }}" alt="" class="rounded"
                                                style="width: 100px">
                                        </td>
                                        <td>{{ $partner->name }}</td>
                                        <td>{{ $partner->description }}</td>
                                        <td>
                                            <x-action-buttons canDelete="partners_delete" canEdit="partners_edit"
                                                routeDelete="{{ route('admin.partner.destroy', $partner->id) }}"
                                                routeEdit="{{ route('admin.partner.edit', $partner->id) }}"/>                                        
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
