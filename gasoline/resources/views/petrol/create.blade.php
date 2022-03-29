@extends('layouts.app')

@section('content')
    <p>
        Różnice w cenie benzyny na różnych stacjach mogą wynosić nawet kilkadziesiąt groszy na litrze. Zwykle taniej jest w
        punktach znajdujących się przy marketach niż np. w tych zlokalizowanych przy autostradach. Często duże sklepy
        wielkopowierzchniowe oferują niższe stawki, aby również przyciągnąć kierowców do zrobienia zakupów. Natomiast w
        długiej trasie najczęściej nie mamy wyjścia i musimy skorzystać z usług danej stacji bez względu na cenę paliwa.
    </p>

    <body id="body-petrol">
        <h1 id="h1-petrol">
            Petrol Price
        </h1>

        {{-- A brief introduction to what influences the price of petrol --}}
        <p class="petrol-description">
            The price of petrol is made up of many factors. They include:
        </p>

        {{-- Factors influencing the price of petrol --}}
        <ul id="petrol-factors-left">
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

        <ul id="petrol-factors-right">
            <li>
                VAT Tax
            </li>
            <li>
                Excise Tax
            </li>
            <li>
                Road Tax
            </li>
            <li>
                Emission fee
            </li>
        </ul>

        <p class="petrol-description">
            Some of these factors are constant, such as taxes, but some are variable (mainly the price per barrel of oil
            and
            the exchange rate of the Polish zloty). Please fill in the three factors in the form below.
        </p>

        <form action="/petrol" method="POST" id="petrol-form">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text">Crude Oil Price</span>
                <input type="number" step=".01" name="oil" placeholder="Enter the current price per barrel of oil" min="0"
                    max="500" class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">PLN rate</span>
                <input type="number" step=".01" name="pln" placeholder="Enter the current exchange rate of the Polish zloty against the US dollar"
                    min="1" max="20" class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Value of VAT</span>
                <input type="number" step="1" name="vat" placeholder="Enter the current amount of VAT Tax" min="0" max="50"
                    class="form-control">
            </div>
            <button type="submit">Confirm</button>
        </form>
    </body>
@endsection
