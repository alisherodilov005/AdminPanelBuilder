@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ __('backend.blog') }}</h2>
                @can('news_create')
                    <x-create-button route="{{ route('admin.blogs.create') }}" name="Yangilik" />
                @endcan
                <div class="card mt-2">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>
                                    id
                                </th>
                                <th>
                                    image
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
                                    Actions
                                </th>
                            </tr>
                            <tbody>
                                @foreach ($blogs as $item)
                                    <tr>
                                        <td>
                                            {{ $item->id }}
                                        </td>
                                        <td>
                                            @foreach ($item->getMedia() as $image)
                                                <img src="{{ $image->getUrl() }}"
                                                    style="width: 150px; border-radius:10px;padding:10px;" alt="">
                                            @endforeach
                                        </td>
                                        <td>
                                            {{ $item->title }}
                                        </td>
                                        <td>
                                            {{ $item->title_ru }}
                                        </td>
                                        <td>
                                            {{ $item->title_en }}
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <x-action-buttons canDelete="news_delete" canEdit="news_edit"
                                                    routeDelete="{{ route('admin.blogs.destroy', $item->id) }}"
                                                    routeEdit="{{ route('admin.blogs.edit', $item->id) }}" />
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
