@extends('layouts.app')

@section('content')
    <div class="mx-auto pt-5 home-background">

        <h1 class="text-info text-center">Select a date you would like to travel with Us!</h1>
        <div class="button d-flex justify-content-center mt-5">

            
            <button class="btn btn-dark border-warning bg-secondary px-3 py-1">
                <a class="text-decoration-none text-warning fs-2" href="{{route('guests.index')}}">Trains for today</a>
            </button>

        </div>

        

    </div>
@endsection