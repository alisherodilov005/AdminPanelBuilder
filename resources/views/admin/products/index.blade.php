@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ __('backend.products') }} </h1>
                <div class="card">
                    <div class="card-body">
                        @can('products_create')
                            <x-create-button route="{{ route('admin.products.create') }}" name="{{__('backend.products')}}" />
                        @endcan
                        <table class="table">
                            <thead>
                                <th>
                                    id
                                </th>
                                <th>
                                    Title
                                </th>
                                <th>
                                    Title_ru
                                </th>
                                <th>
                                    Title_en
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
                                            <a href="{{ $data->link }}">{{ $data->link }}</a>
                                        </td>
                                        <td>
                                            <img src="{{ $data->getFirstMediaUrl() ?? '' }}" alt=""
                                                style="width: 150px;border-radius:5px;">
                                        </td>
                                        <td>
                                            <x-action-buttons routeDelete="{{ route('admin.products.destroy', $data->id) }}"
                                                routeEdit="{{ route('admin.products.edit', $data->id) }}"
                                                canDelete="products_delete" canEdit="products_edit" />
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            {!! $products->links() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
