@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary">Create Role Permission</a>
                        <table class="table table-bordered table-nowrap mt-3">
                            <thead>
                                <th>
                                    Role
                                </th>
                                <th>
                                    Permissions
                                </th>
                                <th>
                                    Actions
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>
                                            {{ $role->name }}
                                        </td>
                                        <td>
                                            @foreach ($role->permissions as $permission)
                                                <span class="badge bg-primary">{{ $permission->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <x-action-buttons
                                                    routeDelete="{{ route('admin.permissions.destroy', $role->id) }}"
                                                    routeEdit="{{ route('admin.permissions.edit', $role->id) }}"
                                                    {{-- canDelete="permission-delete" canEdit="permission-edit"  --}}
                                                    />
                                                {{-- <x-delete-button route="{{ route('admin.permissions.destroy', $role->id) }}" />
                                                <x-edit-button route="{{ route('admin.permissions.edit', $role->id) }}" /> --}}
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
