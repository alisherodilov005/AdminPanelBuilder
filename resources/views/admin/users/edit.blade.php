@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <form action="{{ route('admin.users.update' , $user->id) }}" method="POST">
            <h2>User Edit</h2>
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Ism">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mt-3">
                                    <input type="password" name="password"  placeholder="parol" class="form-control"
                                        id="exampleInputPassword1">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">@lang('backend.save')</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            @foreach ($roles as $role)
                                <div class="d-flex align-items-center">
                                    <input type="checkbox" value="{{ $role->name }}"  name="roles[]">
                                    <div style="width: 10px;"></div>
                                    {{ $role->name }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
