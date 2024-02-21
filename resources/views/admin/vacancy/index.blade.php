@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Vacancy Table</h1>
                <div class="card">
                    <div class="card-body">
                        @can('vacancy_create')
                            <x-create-button route="{{ route('admin.vacancy.create') }}" name="Vakansiya" />
                        @endcan
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
                                    Image
                                </th>
                                <th>
                                    Actions
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
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
                                        <td style="width: 250px;">
                                            <img src="{{ $data->getFirstMediaUrl() ?? '' }}" style="width: 100%;"
                                                alt="">
                                        </td>
                                        <td>
                                            <x-action-buttons canDelete="vacancy_delete" canEdit="vacancy_edit"
                                            routeDelete="{{ route('admin.vacancy.destroy', $data->id) }}"
                                            routeEdit="{{ route('admin.vacancy.edit', $data->id) }}" />
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
