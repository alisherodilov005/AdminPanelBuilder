@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>Create Role Permission</h2>
                <form action="{{ route('admin.permissions.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <!-- Buttons with Label -->
                            <button type="button" class="btn btn-primary btn-label waves-effect waves-light"
                                data-bs-toggle="modal" data-bs-target="#myModal"><i
                                    class="ri-user-line label-icon align-middle fs-16 me-2"></i> Role Qoshish</button>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <select name="role_id" class="form-control">
                                        @foreach ($roles as $role => $id)
                                            <option value="{{ $id }}">{{ $role }}</option>
                                        @endforeach
                                    </select>
                                    @error('role_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="input-group">
                                <select name="permissions[]" class="form-control" id="choices-multiple-remove-button" data-choices
                                data-choices-removeItem multiple>
                                    @foreach ($permissions as $id => $permission)
                                        <option value="{{ $permission }}">{{ $permission }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('permissions')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="d-flex">
                                <button type="submit" class="btn btn-success btn-label waves-effect waves-light mt-3"><i
                                        class=" ri-save-line label-icon align-middle fs-16 me-2"></i> Success</button>
                            </div>
                        </div>                  
                    </div>
                </form>
            </div>
        </div>
        <!-- Default Modals -->
        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true"
            style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Modal Heading</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <form action="{{ route('admin.roles.store') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">@lang('backend.close')</button>
                            <button type="submit" class="btn btn-primary ">@lang('backend.save')</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
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
