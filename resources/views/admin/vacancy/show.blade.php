@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex">
                    <div class="flex-group">
                        <h3>
                            {{ $vacancy->title }} / {{ $vacancy->title_ru }} / {{ $vacancy->title_en }}
                        </h3>
                        <p>
                            {!! $vacancy->description !!}
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>
                            Name
                        </th>
                        <th>
                            email
                        </th>
                        <th>
                            Number
                        </th>
                        <th>
                            Description

                        </th>
                    </thead>
                    <tbody>
                        @foreach ($vacancy->resumes as $resume)
                            <tr>
                                <td>
                                    {{ $resume->name }}
                                </td>
                                <td>
                                    {{ $resume->email }}
                                </td>
                                <td>
                                    {{ $resume->number }}
                                </td>
                                <td>
                                    {{ $resume->description }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{route('admin.vacancy.index')}}" class="btn btn-light ">Orqaga</a>
            </div>

        </div>
    </div>
@endsection
