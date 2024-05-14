<?php
use Carbon\Carbon;
$now = Carbon::now(2)->toTimeString();
?>

@extends('layouts.app')

@section('content')
    <div class="container my-container mt-5 bg-dark p-3">

        <div class="row bg-dark">

            <div class="col bg-dark">
                <div class="card my_card bg-dark">


                    <div class="title-box d-flex justify-content-between align-items-center px-5 py-3 ">
                        <div class="card-title fs-1 d-inline fw-bold">
                            {{ $train->brand_company }}
                        </div>
                        <div class="card-title fs-4 d-inline fw-bold">
                            {{ $train->date }}
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
                </div>

            </div>
        </div>
        <div class="row bg-dark">
            <div class="col bg-dark">
                <div class="card bg-dark ">

                    <div class="train_info justify-content-between py-3 border-bottom border-warning mt-3 fs-2">

                        <h2 class="text-warning pb-3">Some information about your train:</h2>

                        <ol class="list-group text-warning fs-4">
                            <li class="list-group-item bg-dark border-warning text-warning">
                                Distance: {{ rand(560, 820) }}km
                            </li>
                            <li class="list-group-item bg-dark border-warning text-warning">
                                Average speed: {{ rand(160, 220) }}km/h
                            </li>
                            <li class="list-group-item bg-dark border-warning text-warning">
                                Average passengers: {{ $train->wagon_count * 30 }}
                            </li>
                            <li class="list-group-item bg-dark border-warning text-warning">
                                Wagon count: {{ $train->wagon_count }}

                            <li class="list-group-item ps-5 bg-dark border-warning text-warning">
                                Premium: {{ ceil(($train->wagon_count / 100) * 30) }}
                            </li>
                            <li class="list-group-item ps-5 bg-dark border-warning text-warning">
                                Economy: {{ floor(($train->wagon_count / 100) * 70) }}
                            </li>
                            </li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>
        <div>
        </div>
    </div>
    <div class="back d-flex justify-content-evenly mt-5">
        <a class="btn btn-dark border-warning rounded-3 fw-light btn-sm fs-3 mt-5 px-5 py-3" href="/" role="button">
            Homepage
        </a>
        <a class="btn btn-warning border-dark rounded-3 fw-light btn-sm fs-5 mt-5 p-3" href="{{ route('guests.trains.today') }}"
            role="button">
            Go back to the trains schedule
        </a>
    </div>
@endsection
