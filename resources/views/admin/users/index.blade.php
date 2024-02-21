@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        @can('users_create')
                            <x-create-button route="{{ route('admin.users.create') }}" name="User" />
                        @endcan
                        <table class="table table-nowrap table-bordered mt-2">
                            <thead>
                                <th>
                                    id
                                </th>
                                <th>
                                    name
                                </th>
                                <th>
                                    email
                                </th>
                                <th>
                                    Role
                                </th>
                                <th>
                                    Actions
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            {{ $user->id }}
                                        </td>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            @foreach ($user->roles as $role)
                                                <span class="badge bg-primary">{{ $role->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <x-action-buttons canDelete="users_delete" canEdit="users_edit"
                                                    routeDelete="{{ route('admin.users.destroy', $user->id) }}"
                                                    routeEdit="{{ route('admin.users.edit', $user->id) }}" />
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
