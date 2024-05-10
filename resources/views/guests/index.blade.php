@extends('layouts.app')

@section('content')
    <div class="container my-container mt-5">

        <h1 class="mb-5">Trains departing today:</h1>

        <div class="row">

            @foreach ($trains as $train)
                <div class="col">
                    <div class="card">

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
                    </div>
            @endforeach


        </div>
    </div>
@endsection
