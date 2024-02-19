@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>{{__('backend.fill')}} Create</h2>
                <form action="{{ route('admin.filillar.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card p-3">
                        <h2>Uz</h2>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <label for="">Viloyat</label>
                                <select name="region_id" id="" class="form-control">
                                    @foreach (App\Models\Regions::all() as $region)
                                        <option value="{{ $region->id }}">{{ $region->name }}</option>
                                    @endforeach

                                </select>
                                @error('region_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="" class="mt-3">Telefon Raqam</label>
                                <input type="text" class="form-control" placeholder="998 XX XXX XX XX" name="number">
                                @error('number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Description</label>
                                <textarea name="subtext" class="form-control" id="" cols="30" rows="10"></textarea>
                                @error('subtext')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 mt-3">
                        <h2>Ru</h2>
                        <div class="card-body">
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
                                <textarea name="subtext_ru" class="form-control" id="" cols="30" rows="10"></textarea>
                                @error('subtext_ru')
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
                                <textarea name="subtext_en" class="form-control" id="" cols="30" rows="10"></textarea>
                                @error('subtext_en')
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
