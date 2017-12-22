<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 12/17/17
 * Time: 9:44 AM
 */

?>
@extends('layouts.app')

@section('head')
    @include('head')
@endsection

@section('sidebar')
    @include('sidebar')
    @endsection
@section('dashboard')
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Superuser </li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            <button class="btn pull-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</button>
            <div class="dropdown pull-right m-r-10 hidden-sm-down">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    January 2018
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">February 2018</a>
                    <a class="dropdown-item" href="#">March 2018</a>
                    <a class="dropdown-item" href="#">April 2017</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-2 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Hall A</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-success"></i> 120</h2>
                        <span class="text-muted">Seat Left</span>
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
        <div class="col-lg-2 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Hall B</h4>
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
        <div class="col-lg-2 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Hall C</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-purple"></i> 300</h2>
                        <span class="text-muted">Seat Left</span>
                    </div>
                    <span class="text-purple">60%</span>
                    <div class="progress">
                        <div class="progress-bar bg-purple" role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-2 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Hall D</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-down text-danger"></i> 300</h2>
                        <span class="text-muted">Seat Left</span>
                    </div>
                    <span class="text-danger">80%</span>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Hall E</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-purple"></i> 370</h2>
                        <span class="text-muted">Seat Left</span>
                    </div>
                    <span class="text-purple">70%</span>
                    <div class="progress">
                        <div class="progress-bar bg-purple" role="progressbar" style="width: 70%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->

        <div class="col-lg-2 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Hall F</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-info"></i> 200</h2>
                        <span class="text-muted">Seat Left</span>
                    </div>
                    <span class="text-info">40%</span>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
