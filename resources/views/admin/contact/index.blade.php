@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>{!!__('backend.contact')!!}</h1>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>
                                    id
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Tarif
                                </th>
                                <th>
                                    Telefon Raqami
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Actions
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $data)
                                    <tr>
                                        <td>
                                            {{ $data->id }}
                                        </td>
                                        <td>
                                            {{ $data->name }}
                                        </td>
                                        <td>
                                            {{ $data->description }}
                                        </td>
                                        <td>
                                            {{ $data->number }}
                                        </td>
                                        <td>
                                            {{ App\Models\Contact::CONTACT_STATUS[$data->status] }}
                                        </td>
                                       
                                        <td>
                                            <div class="d-flex">
                                             
                                                <button class="btn btn-info">Edit</button>
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
