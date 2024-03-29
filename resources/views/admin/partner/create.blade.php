@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>{{__('backend.partners')}} Create</h2>
                <form action="{{ route('admin.partner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card p-3">
                        <h2>Uz</h2>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="">Rasm</label>
                                <input type="file" name="image" class="form-control" id="">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="">link</label>
                                <input type="text" name="link" class="form-control" id="">
                                @error('link')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 mt-3">
                        <h2>Ru</h2>
                        <div class="card-body ">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name Ru</label>
                                <input type="text" name="name_ru" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                @error('name_ru')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Description Ru</label>
                                <textarea name="description_ru" class="form-control" id="" cols="30" rows="10"></textarea>
                                @error('description_ru')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 mt-3">
                        <h2>En</h2>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name En</label>
                                <input type="text" name="name_en" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                @error('name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Description En</label>
                                <textarea name="description_en" class="form-control" id="" cols="30" rows="10"></textarea>
                                @error('description_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button type="submit" class="btn btn-success mt-2 mb-3">Saqlash</button>
                        <button class="btn"> Ortga qaytish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
