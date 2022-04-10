@extends('layouts.app')

@section('layouts.header')
    @include('layouts.header')
@endsection

@section('content')

    <body id="body-main">
        {{-- Short description of the reason and purpose of creation application --}}
        <p id="description-main">
            To meet today's troubled times, when the price of petrol is influenced by many, rapidly changing factors, this
            simple application calculate the price of petrol that will appear at gas stations.
        </p>

        {{-- Two buttons redirecting to pages with the calculation of prices of petrol, oil and LPG --}}
        <div id="fuel-links">
            <a class="link-1" href="/petrol/create" role="button"><span class="text">Petrol</span></a>
            <a class="link-1" href="/diesel/create" role="button"><span class="text">Diesel</span></a>
        </div>
    </body>
@endsection
