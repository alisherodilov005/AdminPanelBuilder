@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div id="chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div id="popuplarlinks">
                            <ul class="list-group" style="height: 483px;overflow-x:hidden;">
                                @foreach ($repeatedTitle as $url)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="{{ $url->url }} ">{{ $url->url }} </a><span
                                            class="badge bg-warning">{{ $url->title_count }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        @php
            $guestsPerDay = DB::table('guests')->select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))->groupBy('date')->get();
        @endphp
        options = {
            chart: {
                type: 'bar'
            },
            plotOptions: {
                bar: {
                    horizontal: false
                }
            },
            series: [{
                data: [
                    @foreach ($guestsPerDay as $guest)
                        {
                            x: '{{ $guest->date }}',
                            y: {{ $guest->count }}
                        },
                    @endforeach
                ]
            }]
        }
        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@endsection
