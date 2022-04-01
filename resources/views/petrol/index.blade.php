@extends('layouts.app')

@section('content')

    <body id="body-petrol-index">
        <h1 class="h1-fuels">
            Cost Details
        </h1>

        <span>
            <h3 id="constant-costs-title">
                Constant Costs
            </h3>
            <h3 id="user-costs-title">
                Variables entered by the User
            </h3>
        </span>


        <table class="table-costs">
            @foreach ($constantCosts as $constantCost)
                <thead>
                    <tr>
                        <th id="constant-costs-name">
                            {{ $constantCost->cost_name }}
                        </th>
                    </tr>
                </thead>
                <tbody class="table-border">
                    <tr>
                        <td>
                            {{ $constantCost->cost_description }}
                        </td>
                    </tr>
                    <tr>
                        <td class="constant-costs-value">
                            Value: {{ $constantCost->amount_of_cost }} zł
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>

        <div>
            <img src="/storage/canister.jpg" id="canister">
        </div>

        <table id="petrol-table-costs">
            @foreach ($petrols as $petrol)
                <tbody>
                    <tr id="petrol-oil-variables">
                        <td >
                            Price per barrel of oil: {{ $petrol->oil_value }} $
                        </td>
                    </tr>
                    <tr id="petrol-pln-variables">
                        <td >
                            Exchange rate of the Polish zloty against the US dollar: {{ $petrol->pln_value }} zł
                        </td>
                    </tr>
                    <tr>
                        <th id="petrol-vat-variables">
                            Amount of VAT Tax: {{ $petrol->vat_value }} %
                        </th>
                    </tr>
                </tbody>
            @endforeach
        </table>

        <div>
            zapytanie czy chce zmienić wprowadzone dane wraz z odsyłączem na edit
        </div>

        <div>
            przycisk oblicz z odsyłaczem na show
        </div>

        @foreach ($petrols as $petrol)
            <a href="/petrol/{{ $petrol->id }}/edit" class="">
                Edit Your Data
            </a>
        @endforeach

    </body>
@endsection
