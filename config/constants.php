<?php

return [
    // Constants about constant costs of petrol used in petrol/index.blade.php
    'constant_costs' => [
        'p_excise_tax_description' => 'The Excise Tax varies depending on the type of fuel. In addition, its rate is changed by law, and for LPG it is calculated in kilograms. Excise Tax is included in the VAT base, so the State orders citizens to pay tax on the tax.',
        'p_excise_tax_value' => '1.369',
        'p_fuel_surcharge_description' => 'The fee collected in Poland as a result of introducing motor fuels and LPG( for which the rate is calculated in kilograms) to the domestic market. 80% of the proceeds from the fuel surcharge go to the National Road Fund and 20% to the Railway Fund.',
        'p_fuel_surcharge_value' => '0.15261',
        'p_emission_fee_description' => 'Another tax that the ruling party is trying not to call a tax. 95% of this tax is the income of the National Fund for Environmental Protection and Water Management, and 5% - the Public Utility Bus Transport Development Fund. ',
        'p_emission_fee_value' => '0.08',
        'p_transport_cost_description' => 'The cost of Transport varies for each petrol station, which is understandable. For calculations, its amount was arbitrarily averaged.',
        'p_transport_cost_value' => '0.37',
        'p_refinery_margin_description' => 'For calculations, its amount was arbitrarily averaged. The refineries also benefit from the price difference between Russian Ural and Brent crude oil.',
        'p_refinery_margin_value' => '0.26',
        'p_station_margin_description' => 'It depends on many factors, such as location and affiliation to a concern. For calculations, its amount was arbitrarily averaged.',
        'p_station_margin_value' => '0.1',

        // Constants about constant costs of diesel used in diesel/index.blade.php
        'd_excise_tax_description' => 'The Excise Tax varies depending on the type of fuel. In addition, its rate is changed by law, and for LPG it is calculated in kilograms. Excise Tax is included in the VAT base, so the State orders citizens to pay tax on the tax.',
        'd_excise_tax_value' => '1.065',
        'd_fuel_surcharge_description' => 'The fee collected in Poland as a result of introducing motor fuels and LPG( for which the rate is calculated in kilograms) to the domestic market. 80% of the proceeds from the fuel surcharge go to the National Road Fund and 20% to the Railway Fund.',
        'd_fuel_surcharge_value' => '0.32912',
        'd_emission_fee_description' => 'Another tax that the ruling party is trying not to call a tax. 95% of this tax is the income of the National Fund for Environmental Protection and Water Management, and 5% - the Public Utility Bus Transport Development Fund. ',
        'd_emission_fee_value' => '0.08',
        'd_transport_cost_description' => 'The cost of Transport varies for each petrol station, which is understandable. For calculations, its amount was arbitrarily averaged.',
        'd_transport_cost_value' => '0.37',
        'd_refinery_margin_description' => 'For calculations, its amount was arbitrarily averaged. The refineries also benefit from the price difference between Russian Ural and Brent crude oil.',
        'd_refinery_margin_value' => '0.47',
        'd_station_margin_description' => 'It depends on many factors, such as location and affiliation to a concern. For calculations, its amount was arbitrarily averaged.',
        'd_station_margin_value' => '0.1'
    ]
];
