@extends('layouts.app')

@section('content')

    <body class="body-both">

        <h1 class="h1-fuels">
            Estimated Petrol Price
        </h1>

        {{-- Image of petrol PB95 and petrol price --}}
        <span>
            <img src="/images/pb_95.jpg" class="image-result">
            @foreach ($petrols as $petrol)
                <p class="formula-price">{{ $petrol->petrolPrice() }} </p>
            @endforeach
        </span>

        {{-- Button to delete records in table and return to Main Site --}}
        @foreach ($petrols as $petrol)
            <form action="/petrol/ {{ $petrol->id }}" class="button-delete" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-lg">
                    Click HERE to finish and return to Main Site
                </button>
            </form>
        @endforeach

        {{-- A description explaining why there may be differences between the actual price and the one calculated by the application --}}
        <p class="result-description">
            The presented price may differ from the actual one. This is due to the fuel margin, which is different for
            individual gas stations, the costs of transport and gas station placement. The actual price will usually be
            higher by a few groszy.
        </p>

        {{-- Name and surname of the person who devised the formula for the price of petrol for the purposes of this application --}}
        <p class="formula-developer">
            For the purposes of this application, the mathematical formula for the price of petrol was developed by Łukasz
            Ługowski, MA, University of Economics in Katowice
        </p>

    </body>
@endsection
