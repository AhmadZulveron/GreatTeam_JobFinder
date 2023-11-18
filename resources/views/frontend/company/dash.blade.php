@extends('frontend.company.layouts.main')

@section('container')
<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text">Today Expenses </div>
                    <div class="stat-digit"> <i class="fa fa-usd"></i>8500</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text">Income Detail</div>
                    <div class="stat-digit"> <i class="fa fa-usd"></i>7800</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text">Task Completed</div>
                    <div class="stat-digit"> <i class="fa fa-usd"></i> 500</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Lowongan Dibuka</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table student-data-table m-t-20">
                        <thead>
                            <tr>
                                <th>job title</th>
                                <th>description</th>
                                <th>location</th>
                                <th>salary</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @foreach ($lowongan as $items)
                            <tr>
                                <td>{{$items->title}}</td>
                                <td>{{$items->description}}</td>
                                <td>{{$items->location}}</td>
                                <td>{{$items->salary}}</td>
                                <td>{{$items->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection