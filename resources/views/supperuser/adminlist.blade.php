<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 12/17/17
 * Time: 5:34 PM
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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Super Admin</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8  col-lg-8 col-sm-11">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">All Hall Admins</h4>
                    <h6 class="card-subtitle">Added <code>Super  Admin </code></h6>
                    <div class="table-responsive">
                        <table class="table color-table primary-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($admin as $item)
                            <tr>
                                <td></td>
                                <td>{{$item->first_name}}</td>
                                <td>{{$item->last_name}}</td>
                                <td>{{$item->username}}</td>
                                <td><button class=" btn btn-small btn-info ">Edit</button>
                                    <button class="btn btn-small btn-danger">delete</button>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td>B</td>
                                <td>Deshmukh</td>
                                <td>Prohaska</td>
                                <td>@Genelia</td>
                                <td><button class=" btn btn-small btn-info ">Edit</button>
                                    <button class="btn btn-small btn-danger">delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>C</td>
                                <td>Roshan</td>
                                <td>Rogahn</td>
                                <td>@Hritik</td>
                                <td><button class=" btn btn-small btn-info ">Edit</button>
                                    <button class="btn btn-small btn-danger">delete</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection