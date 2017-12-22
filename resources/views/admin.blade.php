<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 12/17/17
 * Time: 9:35 AM
 */
?>
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
        <div class="col-lg-3 col-md-3"></div>
        <div class="col-md-offset-4 col-lg-offset-4 col-lg-6 col-md-6">
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
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3"></div>
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-block card-actions">
                    <div class="pull-right">
                        <button class="btn btn-success">Check In</button>
                    </div>

                    <div class="pull-left">
                        <button class="btn btn-primary">Check Out</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
