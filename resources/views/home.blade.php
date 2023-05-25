@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Treni in partenza oggi:</h1>
        <h2 class="text-center">{{ $today }}</h2>
        <div class="row row-cols-auto">
            @foreach ($trains as $train)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->company }}</h5>
                            <p class="card-text">Stazione di partenza: {{ $train->departure_station }}</p>
                            <p class="card-text">Stazione di arrivo: {{ $train->arrival_station }}</p>
                            <p class="card-text">Data di partenza: {{ $train->departures_date }}</p>
                            <p class="card-text">Orario di partenza: {{ $train->departure_time }}</p>
                            <p class="card-text">Orario di arrivo: {{ $train->arrival_time }}</p>
                            <p class="card-text">Numero del treno: {{ $train->train_code }}</p>
                            <p class="card-text">Numero di carrozze: {{ $train->carriages_number }}</p>
                            <a href="#" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
