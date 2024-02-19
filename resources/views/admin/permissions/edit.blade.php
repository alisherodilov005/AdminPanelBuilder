@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Role Permission</h2>
                <form action="{{ route('admin.permissions.update' , $role->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-body">
                            <h1>{{ $role->name }}</h1>
                            <div class="input-group">
                                <select name="permissions[]" class="form-control" id="choices-multiple-remove-button"
                                    data-choices data-choices-removeItem multiple>
                                    @foreach ($permissions as $id => $permission)
                                        <option value="{{ $permission }}" {{ in_array($id, old('permissions', [])) || $role->permissions->contains($id) ? 'selected' : '' }}>
                                            {{ $permission }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('permissions')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="d-flex">
                                <button type="submit" class="btn btn-success btn-label waves-effect waves-light mt-3"><i
                                        class=" ri-save-line label-icon align-middle fs-16 me-2"></i>Ma'lumotlarni tahrirlash</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
@section('script')
    <!--jquery cdn-->

    <script src="https://themesbrand.com/velzon/html/default/assets/libs/choices.js/public/assets/scripts/choices.min.js">
    </script>
    <!--select2 cdn-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ URL::asset('build/js/pages/select2.init.js') }}"></script>
    <!--jquery cdn-->
    <script src="{{ URL::asset('build/libs/prismjs/prism.js') }}"></script>
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/listjs.init.js') }}"></script>

    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
