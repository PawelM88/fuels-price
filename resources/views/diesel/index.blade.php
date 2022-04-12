@extends('layouts.app')

@section('content')
    {{-- Page Title --}}

    <body class="body-both">
        <h1 class="h1-fuels">
            Cost Details
        </h1>

        {{-- Diesel costs type titles --}}
        <span>
            <h3 class="constant-costs-title">
                Constant Costs
            </h3>
            <h3 class="user-costs-title">
                Variables entered by the User
            </h3>
        </span>

        {{-- List o constant diesel costs --}}
        <table class="table-costs">
            <thead>
                <tr>
                    <th class="constant-costs-name">
                        Excise Tax
                    </th>
                </tr>
            </thead>
            <tbody class="table-border">
                <tr>
                    <td>
                        {{ config('constants.constant_costs.d_excise_tax_description') }}
                    </td>
                </tr>
                <tr>
                    <td class="constant-costs-value">
                        Value: {{ config('constants.constant_costs.d_excise_tax_value') }} zł
                    </td>
                </tr>
                <tr>
                    <th class="constant-costs-name">
                        Fuel Surcharge
                    </th>
                </tr>
                </thead>
            <tbody class="table-border">
                <tr>
                    <td>
                        {{ config('constants.constant_costs.d_fuel_surcharge_description') }}
                    </td>
                </tr>
                <tr>
                    <td class="constant-costs-value">
                        Value: {{ config('constants.constant_costs.d_fuel_surcharge_value') }} zł
                    </td>
                </tr>
                <tr>
                    <th class="constant-costs-name">
                        Emission Fee
                    </th>
                </tr>
                </thead>
            <tbody class="table-border">
                <tr>
                    <td>
                        {{ config('constants.constant_costs.d_emission_fee_description') }}
                    </td>
                </tr>
                <tr>
                    <td class="constant-costs-value">
                        Value: {{ config('constants.constant_costs.d_emission_fee_value') }} zł
                    </td>
                </tr>
                <tr>
                    <th class="constant-costs-name">
                        Transport Cost
                    </th>
                </tr>
                </thead>
            <tbody class="table-border">
                <tr>
                    <td>
                        {{ config('constants.constant_costs.d_transport_cost_description') }}
                    </td>
                </tr>
                <tr>
                    <td class="constant-costs-value">
                        Value: {{ config('constants.constant_costs.d_transport_cost_value') }} zł
                    </td>
                </tr>
                <tr>
                    <th class="constant-costs-name">
                        Refinery Margin
                    </th>
                </tr>
                </thead>
            <tbody class="table-border">
                <tr>
                    <td>
                        {{ config('constants.constant_costs.d_refinery_margin_description') }}
                    </td>
                </tr>
                <tr>
                    <td class="constant-costs-value">
                        Value: {{ config('constants.constant_costs.d_refinery_margin_value') }} zł
                    </td>
                </tr>
                <tr>
                    <th class="constant-costs-name">
                        Station Margin
                    </th>
                </tr>
                </thead>
            <tbody class="table-border">
                <tr>
                    <td>
                        {{ config('constants.constant_costs.d_station_margin_description') }}
                    </td>
                </tr>
                <tr>
                    <td class="constant-costs-value">
                        Value: {{ config('constants.constant_costs.d_station_margin_value') }} zł
                    </td>
                </tr>
            </tbody>
        </table>

        {{-- Image of canister of diesel with the text: Taxes --}}
        <div>
            <img src="/images/canister.jpg" id="canister">
        </div>

        {{-- List o variable diesel costs - Users data --}}
        <table class="index-table-costs">
            @foreach ($diesels as $diesel)
                <tbody>
                    <tr class="index-oil-variables">
                        <td>
                            Price per barrel of oil: {{ $diesel->oil_value }} $
                        </td>
                    </tr>
                    <tr class="index-pln-variables">
                        <td>
                            Exchange rate of the Polish zloty against the US dollar: {{ $diesel->pln_value }} zł
                        </td>
                    </tr>
                    <tr>
                        <th class="index-vat-variables">
                            Amount of VAT Tax: {{ $diesel->vat_value }} %
                        </th>
                    </tr>
                </tbody>
            @endforeach
        </table>

        {{-- button for a link to the page with the result of the diesel price --}}
        <a href="/diesel/show" class="button-calculate" role="button">
            Click here to Calculate
        </a>

        <h3 class="edit-costs-question">
            Did you make a mistake while entering the variable costs of the diesel price?
        </h3>

        {{-- button for a link to the page where user can edit his data --}}
        @foreach ($diesels as $diesel)
            <div class="button-edit-display">
                <a href="/diesel/{{ $diesel->id }}/edit" class="button-edit-index">
                    Click here to edit Your Data
                </a>
            </div>
        @endforeach

    </body>
@endsection
