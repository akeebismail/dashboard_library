@extends('layouts.app')
@section('stylesheet')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('count/src/js/jQuery.countdownTimer.js')}}"></script>

    @endsection
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
        <?php $x =1?>;
        @foreach($space as $item)
            <!-- Column -->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">{{$item->room->name}}</h4>
                        <div class="text-right">
                            <h2 class="font-light m-b-0"><i class="ti-arrow-up text-success"></i> {{ 500 -$item->occupied}}</h2>
                            <span class="text-muted">Seat Left</span>
                        </div>
                        <span class="text-success">{{($item->occupied / $item->room->number_of_seats)/ 100 }}%</span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: {{($item->occupied / $item->room->number_of_seats)/ 100 }}%; height: 6px;" aria-valuenow="{{$item->occupied}}" aria-valuemin="0" aria-valuemax="{{$item->room->number_of_seats}}"></div>
                        </div>
                    </div>
                </div>
            </div>
            @if($x % 4 == 0 )
                <!-- end row and start a new column -->
            </div>
            <div class="row">
            @endif
        <!-- Column -->
            <?php $x++; ?>
        @endforeach
        <!-- Column -->
        <!-- Column -->
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(function(){

            $("#future_date").countdowntimer({
                dateAndTime : "{{$time}}",
                size : "lg",
                expiryUrl : "{{route('lib-close')}}"
            });
        });
    </script>
@endsection