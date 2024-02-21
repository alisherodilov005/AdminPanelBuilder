@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @can('permissions_create')
                            <x-create-button route="{{ route('admin.permissions.create') }}" name="Permissions" />
                        @endcan
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
                                            <div class="row">
                                                @foreach ($role->permissions as $permission)
                                                    <div class="col-md-2">
                                                        <span
                                                            class="badge bg-success-subtle text-success m-1">{{ $permission->name }}</span>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <x-action-buttons
                                                    routeDelete="{{ route('admin.permissions.destroy', $role->id) }}"
                                                    canDelete="permissions_delete" canEdit="permissions_edit"
                                                    routeEdit="{{ route('admin.permissions.edit', $role->id) }}" />
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
