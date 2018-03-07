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
                    <div id="countdowntimer"><span id="future_date"></span></div>
                </div>

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3"></div>
        <div class="col-md-offset-4 col-lg-offset-4 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">{{$room->name}}</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-success"></i> {{$space->occupied}}</h2>
                        <span class="text-muted">Seat Occupied</span>
                    </div>
                    <span class="text-success">{{($space->occupied / $room->number_of_seats) * 100}}%</span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: {{($space->occupied / $room->number_of_seats) * 100}}%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="{{$room->number_of_seats}}"></div>
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
                        <button id="checkIn" class="btn btn-success">Check In</button>
                    </div>

                    <div class="pull-left">
                        <button id="checkOut" class="btn btn-primary">Check Out</button>
                    </div>
                </div>
                <a href="{{route('logout')}}" onclick="id =document.getElementById('logout'); id.preventDefault().submit()" class="btn btn-info">Logout</a>
                <form id="logout" action="{{route('logout')}}" style="display: none;" method="post">
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>
    @endsection
@section('script')
    <script>
        $(document).ready(function () {

            var  spaceId = "{{$space->id}}";
            $("#checkIn").click(function () {
                console.log('checking In');
                $.ajax({
                    type: "POST",
                    url: "{{route('checkin.checkin')}}",
                    data: {id : spaceId, _token: "{{csrf_field()}}"},
                    success: function (response) {
                        console.log(response.data)
                    },
                    error: function (error) {
                        console.log(error.data)
                    }
                })
            });

            $("#checkOut").click(function () {
                console.log('checking out')
                $.ajax({
                    type: "POST",
                    url: "{{route('checkin.checkout')}}",
                    data: {id: spaceId, _token: "{{csrf_field()}}"},
                    success: function (response) {
                        console.log(response.data)
                    },
                    error: function (error) {
                        console.log(error.data)
                    }
                })
            })
        });
    </script>
@endsection
