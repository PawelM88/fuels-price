@extends('layouts.app')

@section('content')
    {{-- Page Title --}}

    <body id="body-petrol-index">
        <h1 class="h1-fuels">
            Cost Details
        </h1>

        {{-- Petrol costs type titles --}}
        <span>
            <h3 id="constant-costs-title">
                Constant Costs
            </h3>
            <h3 id="user-costs-title">
                Variables entered by the User
            </h3>
        </span>

        {{-- List o constant petrol costs --}}
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
                        {{ config('constants.constant_costs.excise_tax_description') }}
                    </td>
                </tr>
                <tr>
                    <td class="constant-costs-value">
                        Value: {{ config('constants.constant_costs.excise_tax_value') }} zł
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
                        {{ config('constants.constant_costs.fuel_surcharge_description') }}
                    </td>
                </tr>
                <tr>
                    <td class="constant-costs-value">
                        Value: {{ config('constants.constant_costs.fuel_surcharge_value') }} zł
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
                        {{ config('constants.constant_costs.emission_fee_description') }}
                    </td>
                </tr>
                <tr>
                    <td class="constant-costs-value">
                        Value: {{ config('constants.constant_costs.emission_fee_value') }} zł
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
                        {{ config('constants.constant_costs.transport_cost_description') }}
                    </td>
                </tr>
                <tr>
                    <td class="constant-costs-value">
                        Value: {{ config('constants.constant_costs.transport_cost_value') }} zł
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
                        {{ config('constants.constant_costs.refinery_margin_description') }}
                    </td>
                </tr>
                <tr>
                    <td class="constant-costs-value">
                        Value: {{ config('constants.constant_costs.refinery_margin_value') }} zł
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
                        {{ config('constants.constant_costs.station_margin_description') }}
                    </td>
                </tr>
                <tr>
                    <td class="constant-costs-value">
                        Value: {{ config('constants.constant_costs.station_margin_value') }} zł
                    </td>
                </tr>
            </tbody>
        </table>

        {{-- Image of canister of petrol with the text: Taxes --}}
        <div>
            <img src="/storage/canister.jpg" id="canister">
        </div>

        {{-- List o variable petrol costs - Users data --}}
        <table id="petrol-table-costs">
            @foreach ($petrols as $petrol)
                <tbody>
                    <tr id="petrol-oil-variables">
                        <td>
                            Price per barrel of oil: {{ $petrol->oil_value }} $
                        </td>
                    </tr>
                    <tr id="petrol-pln-variables">
                        <td>
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

        {{-- button for a link to the page with the result of the petrol price --}}
        <a href="/petrol/show" class="button-calculate" role="button">
            Click here to Calculate
        </a>

        <h3 id="edit-costs-question">
            Did you make a mistake while entering the variable costs of the petrol price?
        </h3>

        {{-- button for a link to the page where user can edit his data --}}
        @foreach ($petrols as $petrol)
            <div id="button-edit-petrol-display">
                <a href="/petrol/{{ $petrol->id }}/edit" id="button-edit-petrol">
                    Click here to edit Your Data
                </a>
            </div>
        @endforeach

    </body>
@endsection
