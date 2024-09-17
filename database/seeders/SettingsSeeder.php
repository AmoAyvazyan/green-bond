<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            'info_email'                                                       => 'info@nmc.am',
            'info_phone'                                                       => '+374 43 412101',
            'linked_in_url'                                                    => 'https://www.linkedin.com/company/national-mortgage-company-rco-cjsc/',
            'fb_url'                                                           => 'https://www.facebook.com/national.mortgage.company',
            'natural_gas_price'                                                => '14.91',
            'natural_gas_tariff'                                               => '143.7',
            'ncv'                                                              => '9.64',
            'electricity_price'                                                => '50.15',
            'energy_price'                                                     => '23.36',
            'biomass_cost'                                                     => '15.5844',
            'household_ec_structure_natural_gas_ratio'                         => '0.76',
            'household_ec_structure_natural_gas_heating_system'                => '0.85',
            'household_ec_structure_natural_gas_co2_emission'                  => '0.2047',
            'household_ec_structure_electricity_ratio'                         => '0.24',
            'household_ec_structure_electricity_heating_system'                => '1',
            'household_ec_structure_electricity_co2_emission'                  => '0.39',
            'household_ec_structure_average_co2_emission'                      => '0.249172',
            'windows_u_value_old'                                              => '2.778',
            'windows_u_value_new'                                              => '2.083',
            'doors_u_value_old'                                                => '3.57',
            'doors_u_value_new'                                                => '2.22',
            'base_household_ec_structure_natural_gas_ratio'                    => '0.68',
            'base_household_ec_structure_natural_gas_hs_efficiency'            => '0.85',
            'base_household_ec_structure_natural_gas_co2_emission_factor'      => '0.2047',
            'base_household_ec_structure_electricity_ratio'                    => '0.21',
            'base_household_ec_structure_electricity_hs_efficiency'            => '1',
            'base_household_ec_structure_electricity_co2_emission_factor'      => '0.39',
            'base_household_ec_structure_biomass_ratio'                        => '0.11',
            'base_household_ec_structure_biomass_hs_efficiency'                => '0.6',
            'base_household_ec_structure_biomass_co2_emission_factor'          => '0',
            'ph_gas_hs_household_ec_structure_natural_gas_ratio'               => '1',
            'ph_gas_hs_household_ec_structure_natural_gas_hs_efficiency'       => '0.85',
            'ph_gas_hs_household_ec_structure_natural_gas_co2_emission_factor' => '0.2047',
            'natural_gas_consumption_ratio'                                    => '0.68',
            'natural_gas_consumption_efficiency'                               => '0.92',
            'natural_gas_consumption_co2_emission'                             => '0.2047',
            'electricity_consumption_ratio'                                    => '0.21',
            'electricity_consumption_efficiency'                               => '1',
            'electricity_consumption_co2_emission'                             => '0.39',
            'biomass_consumption_ratio'                                        => '0.11',
            'biomass_consumption_efficiency'                                   => '0.7',
            'biomass_consumption_co2_emission'                                 => '0',
            'two_layer_stone_r_value'                                          => '1.116',
            'concrete_with_bitumen_cover_r_value'                              => '1.449',
            'concrete_with_bitumen_cover_r_value_apartment'                    => '1.109',
            'weighted_average_30_rc_70_stone_r_value'                          => '0.89',
            'internal_gains_occupancy_and_comfort_level_factor'                => '0.75',
            'internal_gains_occupancy_and_comfort_level_factor_renovation'     => '0.7',
            'useful_energy_for_space_heating_before'                           => '32218.57',
            'useful_energy_for_space_heating_after'                            => '21864.17',
            'solar_yield_specific'                                             => '950',
        ];
        Setting::insert(array_map(static fn($key, $value) => [
            'key'        => $key,
            'value'      => $value,
            'is_system'  => true,
            'created_at' => now(),
            'updated_at' => now(),
        ], array_keys($settings), $settings));
    }
}
