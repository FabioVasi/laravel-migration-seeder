@extends('layouts.app')



@section('title', 'Daily Trains')



@section('content')

    <section class="bg-secondary">
        <div class="container text-center">
            <h1 class="text-white py-4">Welcome</h1>
            <div class="row g-3">
                @forelse ($daily_trains as $train)
                    <div class="col-3">
                        <div class="card h-100 shadow border-0">
                            <div class="card-body text-start">
                                <h3>Company: {{$train->company}}</h3>
                                <h4>Departures Station: {{$train->departure_station}}</h4>
                                <h4>Arrivals Station: {{$train->arrival_station}}</h4>
                                <h4>Departure: {{$train->departure_time}}</h4>
                                <h4>Arrival: {{$train->arrival_time}}</h4>
                                <h5 class="">In Time: <?= $train->in_time ? 'yes' : 'no' ?></h5>
                                <h5 class="">Deleted: <?= $train->deleted ? 'yes' : 'no' ?></h5>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No Train's run today</p>
                @endforelse        
            </div>
            
        </div>
    </section>

@endsection