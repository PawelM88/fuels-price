@extends('layouts.app')

@section('content')

    <body id="body-petrol-result">

        <h1 class="h1-fuels">
            Estimated petrol price
        </h1>

        {{-- Image of petrol PB95 and petrol price --}}
        <span>
            <img src="/storage/benzyna_bezolowiowa_pb_95.jpg" id="image-result">
            @foreach ($petrols as $petrol)
                <p id="petrol-price">{{ $petrol->petrolPrice() }} </p>
            @endforeach
        </span>

        {{-- button to delete records in table and return to Main Site --}}
        @foreach ($petrols as $petrol)
            <form action="/ {{ $petrol->id }}" class="button-delete" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-lg">
                    Click HERE to finish and return to Main Site
                </button>
            </form>
        @endforeach

        {{-- A description explaining why there may be differences between the actual price and the one calculated by the application --}}
        <p id="result-description">
            The presented price may differ from the actual one. This is due to the fuel margin, which is different for
            individual gas stations, the costs of transport and gas station placement. The actual price will usually be
            higher by a few groszy.
        </p>

        {{-- Name and surname of the person who devised the formula for the price of petrol for the purposes of this application --}}
        <p id="formula-developer">
            For the purposes of this application, the mathematical formula for the price of petrol was developed by Łukasz
            Ługowski, MA, University of Economics in Katowice
        </p>

    </body>
@endsection
