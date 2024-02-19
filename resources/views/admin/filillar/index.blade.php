@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>{{__('backend.fill')}}</h2>
                <a href="{{ route('admin.filillar.create') }}" class="btn btn-success">Create Filial</a>
                <div class="card mt-2">
                    <div class="card-body">
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
                                            {{$fil->region->name}}
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <form action="{{ route('admin.filillar.destroy', $fil->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                                <a class="btn btn-info" href="{{route('admin.filillar.edit' , $fil->id)}}">Edit</a>
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
