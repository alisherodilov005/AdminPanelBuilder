@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('admin.projects.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <div class="row">
                                <h3>Create {{__('backend.projects')}}</h3>
                                <div class="col-md-6 mt-2">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" name="photo">
                                    @error('image')
                                        <span class="text-danger">{{ $massage }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="">Link</label>
                                    <input type="text" class="form-control" name="link" placeholder="link">
                                    @error('link')
                                        <span class="text-danger">{{ $massage }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="">Titles</label>
                                    <input type="text" class="form-control" name="title" placeholder="title">
                                    @error('title')
                                        <span class="text-danger">{{ $massage }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="">Describtion</label>
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row mt-2">
                                <h3>RU</h3>
                                <div class="col-md-6 mt-2">
                                    <label for="">Titles</label>
                                    <input type="text" class="form-control" name="title_ru" placeholder="title">
                                    @error('title_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="">Describtion</label>
                                    <textarea name="description_ru" class="form-control" id="" cols="30" rows="10"></textarea>
                                    @error('description_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row mt-2">
                                <h3>EN</h3>
                                <div class="col-md-6 mt-2">
                                    <label for="">Titles</label>
                                    <input type="text" class="form-control" name="title_en" placeholder="title">
                                    @error('title_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="">Describtion</label>
                                    <textarea name="description_en" class="form-control" id="" cols="30" rows="10"></textarea>
                                    @error('description_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Yaratish</button>
                </div>
            </form>
        </div>
    </div>
@endsection
