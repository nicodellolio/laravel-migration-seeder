<?php 
use Carbon\Carbon;
$now = Carbon::now(2)->toTimeString()
?>

@extends('layouts.app')

@section('content')
    <div class="container my-container mt-5 bg-dark p-3">

        <div class="upper_container d-flex justify-content-between">
            <div class="mb-5 p-2 fs-1">Trains departing next</div>
            <div class="mb-5 p-3 fs-2 text-end time_box">Current time:<br>{{($now)}}</div>
        </div>


        <div class="row bg-dark">

            @foreach ($trains as $train)
                <div class="col bg-dark">
                    <div class="card my_card bg-dark">

                        <a class="text-decoration-none" href="{{ route('guests.show', $train) }}">

                            <div class="title-box d-flex justify-content-between align-items-center px-5 py-3 ">
                                <div class="card-title fs-1 d-inline fw-bold">
                                    {{ $train->brand_company }}
                                </div>
                                <div class="card-subtitle fs-4 d-inline text-end">
                                    {{ $train->train_code }}
                                </div>
                            </div>

                            <div class="card-body my_card_body fs-3 d-flex justify-content-evenly text-center">

                                <div class="station-box">
                                    <div class="departure-station">
                                        {{ $train->departure_station }}
                                    </div>
                                    <div class="departure-station">
                                        {{ $train->departure_time }}
                                    </div>
                                </div>

                                <div class="time-box">
                                    <div class="arrive-station">
                                        {{ $train->arrive_station }}
                                    </div>
                                    <div class="arrive-time">
                                        {{ $train->arriving_time }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
            @endforeach


        </div>
    </div>
@endsection
