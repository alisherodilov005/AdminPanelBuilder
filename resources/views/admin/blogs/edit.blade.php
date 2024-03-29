@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('admin.blogs.update' , $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12">
                    @if ($errors->any())
                        @foreach ($errors as $item)
                            <span class="text-danger">{{ $item }}</span>
                        @endforeach
                    @endif
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <div class="row">
                                <h3>Edit {{__('backend.blog')}}</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Image</label>
                                        <input type="file" class="form-control" name="mainPhoto">
                                        <img src="{{ $data->getFirstMediaUrl() ?? '' }}" alt=""
                                            style="width: 150px">
                                        @error('mainPhoto')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2">

                                    <label for="">Titles</label>
                                    <input type="text" class="form-control" value="{{ $data->title }}" name="title"
                                        placeholder="title">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="">Describtion</label>
                                    <textarea name="description" class="form-control" id="description" cols="30" rows="30">{{ $data->description }}</textarea>
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
                                    <input type="text" class="form-control" value="{{ $data->title_ru }}" name="title_ru"
                                        placeholder="title">
                                    @error('title_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="">Describtion</label>
                                    <textarea name="description_ru" class="form-control" id="description1" cols="30" rows="10">{{ $data->description_ru }}</textarea>
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
                                    <input type="text" class="form-control" name="title_en"
                                        value="{{ $data->title_en }}" placeholder="title">
                                    @error('title_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="">Describtion</label>
                                    <textarea name="description_en" id="description2" class="form-control ckeditor" id="" cols="30"
                                        rows="30">
                                    {{ $data->description_en }}</textarea>
                                    @error('description_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Tahrirlash</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#description1'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#description2'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
