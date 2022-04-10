@extends('layouts.app')

@section('content')

    {{-- Page Title --}}

    <body class="body-create">
        <h1 class="h1-fuels">
            Diesel Costs
        </h1>

        {{-- A brief introduction to what influences the price of diesel --}}
        <p class="create-description">
            The price of diesel is made up of many factors. They include:
        </p>

        {{-- Factors influencing the price of petrol --}}
        <ul class="create-factors-left">
            <li>
                Crude Oil Price
            </li>
            <li>
                Zloty Exchange Rate
            </li>
            <li>
                Transport Cost
            </li>
            <li>
                Refinery Margin
            </li>
            <li>
                Station Margin
            </li>
        </ul>

        <ul class="create-factors-right">
            <li>
                VAT Tax
            </li>
            <li>
                Excise Tax
            </li>
            <li>
                Fuel Surcharge
            </li>
            <li>
                Emission Fee
            </li>
        </ul>

        {{-- Continuation of introduction to what influences the price of diesel and ask to fill in the form --}}
        <p class="create-description">
            Some of these factors are constant, such as taxes, but some are variable (mainly the price per barrel of oil
            and
            the exchange rate of the Polish zloty). Please fill in the three factors in the form below.
        </p>

        {{-- The form in which user should enter three changing factors affecting the price of diesel --}}
        <form action="/diesel" method="POST" class="form-create">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text">Crude Oil Price</span>
                <input type="number" step=".01" name="oil" placeholder="Price per barrel of oil" min="0" max="1000"
                    class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">PLN rate</span>
                <input type="number" step=".0001" name="pln"
                    placeholder="Exchange rate of the Polish zloty against the US dollar" min="0" max="100"
                    class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Value of VAT</span>
                <input type="number" step=".1" name="vat" placeholder="Amount of VAT Tax" min="0" max="100"
                    class="form-control">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </form>

        {{-- Show Errors if inputs in forms aren't filled --}}
        @if ($errors->any())
            <div class="valid-error">
                @foreach ($errors->all() as $error)
                    <li class="valid-error-list">
                        {{ $error }}
                    </li>
                @endforeach
            </div>
        @endif


        <p class="create-question">
            You don't know where to get the data you need?
        </p>

        {{-- Links to pages with required information to be entered --}}
        <ul class="create-links-ul">
            <li>
                <a href="https://www.bankier.pl/inwestowanie/profile/quote.html?symbol=ROPA" target="blank"
                    class="create-links-li">
                    Crude Oil Price
                </a>
            </li>
            <li>
                <a href="https://www.bankier.pl/waluty/kursy-walut/forex/USDPLN" target="blank" class="create-links-li">
                    PLN rate
                </a>
            </li>
            <li>
                <a href="https://www.gov.pl/web/finanse/tarcza-antyinflacyjna-20-zlagodzi-skutki-inflacji-i-zmniejszy-jej-koszty-dla-polakow"
                    target="blank" class="create-links-li">
                    Value of VAT
                </a>
            </li>
        </ul>
    </body>
@endsection
