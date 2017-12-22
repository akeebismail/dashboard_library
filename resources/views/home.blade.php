@extends('layouts.app')
@section('head')
    @include('head')
    @endsection
@section('dashboard')
    <div class="row page-titles">
        <div class="col-md-4 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-4">
            <div class="card">
                <div class="card-block">
                    <h2>17 :45 : 56 Left</h2>
                </div>

            </div>
        </div>

    </div>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Hall A</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-success"></i> 120</h2>
                        <span class="text-muted">Seat Lefte</span>
                    </div>
                    <span class="text-success">80%</span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Hall C</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-info"></i> 400</h2>
                        <span class="text-muted">Seat Left</span>
                    </div>
                    <span class="text-info">30%</span>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->

        <!-- Column -->
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Hall B</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-purple"></i> 500</h2>
                        <span class="text-muted">Seat Left</span>
                    </div>
                    <span class="text-purple">0%</span>
                    <div class="progress">
                        <div class="progress-bar bg-purple" role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Hall D</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-down text-danger"></i>478</h2>
                        <span class="text-muted">Seat Left</span>
                    </div>
                    <span class="text-danger">80%</span>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Hall E</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-down text-danger"></i>478</h2>
                        <span class="text-muted">Seat Left</span>
                    </div>
                    <span class="text-danger">80%</span>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Hall F</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-down text-danger"></i>478</h2>
                        <span class="text-muted">Seat Left</span>
                    </div>
                    <span class="text-danger">80%</span>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-responsive" src="{{asset('images/big/img1.jpg')}}" alt="Notification">
                <div class="card-block">
                    <ul class="list-inline font-14">
                        <li class="p-l-0">01 Jan 2018</li>
                        <li><a href="javascript:void(0)" class="link">3 Comment</a></li>
                    </ul>
                    <h3 class="font-normal">The Library will be shutdown please don't come and read </h3>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-responsive" src="{{asset('images/big/img2.jpg')}}" alt="Notification">
                <div class="card-block">
                    <ul class="list-inline font-14">
                        <li class="p-l-0">20 May 2018</li>
                        <li><a href="javascript:void(0)" class="link">Opening of Library</a></li>
                    </ul>
                    <h3 class="font-normal">This library will be open for just two hours, so read quick and get out</h3>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <img class="card-img-top img-responsive" src="{{asset('assets/images/big/img4.jpg')}}" alt="Notification">
                <div class="card-block">
                    <ul class="list-inline font-14">
                        <li class="p-l-0">20 May 2018</li>
                        <li><a href="javascript:void(0)" class="link">Closing of Library</a></li>
                    </ul>
                    <h3 class="font-normal">This library will close for the year ended 2017. </h3>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
@endsection
