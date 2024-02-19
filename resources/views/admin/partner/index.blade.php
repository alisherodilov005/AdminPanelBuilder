@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>{{__('backend.partners')}}</h2>
                <a href="{{ route('admin.partner.create') }}" class="btn btn-success">Create Partner</a>
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
                               @foreach($partners as $partner)
                               <tr>
                                <td>{{$partner->id}}</td>
                                <td>
                                    <img src="{{$partner->getFirstMediaUrl()}}" alt="" class="rounded" style="width: 100px">
                                </td>
                                <td>{{$partner->name}}</td>
                                <td>{{$partner->description}}</td>
                                <td>
                                    <div class="d-flex">
                                        <form action="{{ route('admin.partner.destroy', $partner->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                        <a href="{{route('admin.partner.edit' , $partner->id)}}" class="btn btn-primary">Edit</a>
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
