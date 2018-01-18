<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 12/17/17
 * Time: 5:46 PM
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
    <div class="row ">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Add Hall Admin</h4>
                    <form class="m-t-40" novalidate method="post" action="{{route('admin.store')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="controls {{ $errors->has('first_name')? 'has-danger' : 'has-success' }}">
                                <label>Hall Admin first name
                                    <span class="text-danger">*
                                    @if($errors->has('first_name'))
                                        {{$errors->first('first_name')}}
                                        @endif
                                    </span>
                                </label>
                                <input type="text" name="first_name" class="form-control" required data-validation-required-message="The first name is required">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="controls {{ $errors->has('last_name')? 'has-danger' : 'has-success' }} ">
                                <label >Hall Admin last name <span class="text-danger">*@if($errors->has('last_name'))
                                            {{$errors->first('last_name')}}
                                        @endif</span></label>
                                <input type="text" name="last_name" class="form-control" required data-validation-required-message="This last name is required">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="controls {{ $errors->has('username')? 'has-danger' : 'has-success' }}">
                                <label>Hall Admin username<span class="text-danger">*
                                        @if($errors->has('username'))
                                            {{$errors->first('username')}}
                                        @endif
                                    </span> </label>
                                <input type="text" name="username" class="form-control" required data-validation-required-message="The username is required">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="controls {{ $errors->has('password')? 'has-danger' : 'has-success' }}">
                                <label>Hall Admin password<span class="text-danger">*
                                        @if($errors->has('password'))
                                            {{$errors->first('password')}}
                                        @endif
                                </span> </label>
                                <input type="text" name="password" class="form-control" required data-validation-required-message="The password is required">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="controls {{ ($errors->has('hall'))? 'has-danger' : 'has-success' }}">
                                <label>Sign Hall to Admin<span class="text-danger">*
                                        @if($errors->has('hall'))
                                            {{$errors->first('hall')}}
                                        @endif
                                </span> </label>
                                <select name="hall" class="form-control" required>
                                    <option value="">Assign Hall</option>
                                    <option value="1">Hall A</option>
                                    <option value="2"> Hall B</option>
                                    <option value="3">Hall C </option>
                                    <option value="4">Hall D</option>
                                    <option value="5">Hall E</option>
                                    <option value="6">Hall F</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-xs-right">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <button type="reset" class="btn btn-inverse">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection