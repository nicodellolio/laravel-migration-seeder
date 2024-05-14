@extends('layouts.app')

@section('content')
    <div class="mx-auto pt-5 home-background">

        <h1 class="text-info text-center">Select a date you would like to travel with Us!</h1>
        <div class="button d-flex justify-content-center mt-5">

            <button class="btn btn-dark border-warning bg-secondary px-3 py-1">

                <a class="text-decoration-none text-warning fs-1" href="{{ route('guests.trains.today') }}">
                    Trains for today
                </a>

            </button>

        </div>
        <div class="button d-flex justify-content-center mt-5">

            <button class="btn btn-info border-info bg-secondary px-3 py-1">

                <a class="text-decoration-none text-light fs-3"
                    href="{{ route('guests.trains.tomorrow') }}">
                    Trains for tomorrow
                </a>

            </button>

        </div>

    </div>
@endsection
