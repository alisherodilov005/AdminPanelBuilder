@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
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
                                <h3>Create {{ __('backend.blog') }}</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Image</label>
                                        <input type="file" multiple class="form-control" name="mainPhoto[]">
                                        @error('mainPhoto')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
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
                                    <textarea name="description" class="form-control" id="description" cols="30" rows="30"></textarea>
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
                                    <textarea name="description_ru" class="form-control" id="description1" cols="30" rows="10"></textarea>
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
                                    <textarea name="description_en" id="description2" class="form-control ckeditor" id="" cols="30"
                                        rows="30"></textarea>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .then(editor => {
                editor.plugins.get('FileRepository').createUploadAdapter = loader => {
                    return new MyUploadAdapter(loader);
                };
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#description1'))
            .then(editor => {
                editor.plugins.get('FileRepository').createUploadAdapter = loader => {
                    return new MyUploadAdapter(loader);
                };
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#description2'))
            .then(editor => {
                editor.plugins.get('FileRepository').createUploadAdapter = loader => {
                    return new MyUploadAdapter(loader);
                };
            })
            .catch(error => {
                console.error(error);
            });

        //upload image scr
        class MyUploadAdapter {
            constructor(loader) {
                this.loader = loader;
            }

            upload() {
                return this.loader.file
                    .then(file => new Promise((resolve, reject) => {
                        this._initRequest();
                        this._initListeners(resolve, reject, file);
                        this._sendRequest(file);
                    }))
                    .catch(error => {
                        console.error(error);
                    });
            }

            _initRequest() {
                this.xhr = new XMLHttpRequest();
                this.xhr.open('POST', '{{ route('global.image.upload') }}', true);
                this.xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            }

            _initListeners(resolve, reject, file) {
                this.xhr.onload = () => {
                    if (this.xhr.status >= 200 && this.xhr.status < 300) {
                        const response = JSON.parse(this.xhr.responseText);
                        if (response && response.url) {
                            resolve({
                                default: response.url
                            });
                            console.log(response.url);
                        } else {
                            reject('Invalid server response');
                        }
                    } else {
                        reject(`Upload failed with status: ${this.xhr.status}`);
                    }
                };

                this.xhr.onerror = () => {
                    reject(`Network error during the upload`);
                };
            }

            _sendRequest(file) {
                const data = new FormData();
                data.append('upload', file);
                this.xhr.send(data);
            }
            remove() {
                // Get the current selection and range from the editor
                const selection = this.editor.model.document.selection;
                const range = selection.getFirstRange();

                // Check if the range contains an image
                if (range.hasAttribute('src')) {
                    // Remove the image by clearing the source attribute
                    range.removeAttribute('src');
                }
            }
        }
    </script>
@endsection
