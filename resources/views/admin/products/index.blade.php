@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ __('backend.products') }} </h1>
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.products.create') }}" class="btn btn-success">Create Product</a>
                        <table class="table">
                            <thead>
                                <th>
                                    id
                                </th>
                                <th>
                                    title
                                </th>
                                <th>
                                    title_ru
                                </th>
                                <th>
                                    title_en
                                </th>
                                <th>
                                    Link
                                </th>
                                <th>
                                    Image
                                </th>
                                <th>
                                    Actions
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($products as $data)
                                    <tr>
                                        <td>
                                            {{ $data->id }}
                                        </td>
                                        <td>
                                            {{ $data->title }}
                                        </td>
                                        <td>
                                            {{ $data->title_ru }}
                                        </td>
                                        <td>
                                            {{ $data->title_en }}
                                        </td>
                                        <td>
                                            {{ $data->link }}
                                        </td>
                                        <td>
                                            <img src="{{ $data->getFirstMediaUrl() ?? '' }}" alt=""
                                                style="width: 150px;border-radius:5px;">
                                        </td>
                                        <td>
                                            <x-action-buttons routeDelete="{{ route('admin.products.destroy', $data->id) }}" routeEdit="{{route('admin.products.edit' , $data->id)}}"/>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div >
                            {!! $products->links() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
