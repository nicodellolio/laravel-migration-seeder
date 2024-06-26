<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $now = Carbon::now(2)->toTimeString();
        $today = Carbon::now(2)->toDateString();

        $trains = Train::where('date', '=', $today)->where('departure_time', '>', $now)->orderBy('departure_time')->get();

        return view('guests.trains.today', compact('trains'));
    }

    public function tomorrow()
    {
        $tomorrow = Carbon::now(2)->addDay()->toDateString();

        $trains = Train::where('date', '=', $tomorrow)->orderBy('departure_time')->get();

        return view('guests.trains.tomorrow', compact('trains'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Train $train)
    {
        // $trains = Train::where('departure_time', '>', $now)->orderBy('departure_time')->get();
        return view('guests.trains.show', compact('train'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Train $train)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Train $train)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Train $train)
    {
        //
    }
}
