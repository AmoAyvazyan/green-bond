<?php

namespace Database\Seeders;

use App\Models\EeImprovement;
use Illuminate\Database\Seeder;
use App\Models\ElectronicParam;

class ElectronicParamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $electronics = [
            [
                'name' => 'Air conditioner',
                'slug' => EeImprovement::SLUG_HA_AC,
                'electricity_demand_old' => 440,
                'electricity_demand_new' => 278,
                'electricity_demand_a' => 440,
                'electricity_demand_a_plus' => 350,
                'electricity_demand_a_2plus' => 278,
                'electricity_demand_a_3plus' => 138,
            ],
            [
                'name' => 'Washing machine',
                'slug' => EeImprovement::SLUG_HA_WASHING_MACHINE,
                'electricity_demand_old' => 250,
                'electricity_demand_new' => 190,
                'electricity_demand_a' => 250,
                'electricity_demand_a_plus' => 220,
                'electricity_demand_a_2plus' => 190,
                'electricity_demand_a_3plus' => 150,
            ],
            [
                'name' => 'Refrigerator',
                'slug' => EeImprovement::SLUG_HA_REFRIGERATOR,
                'electricity_demand_old' => 270,
                'electricity_demand_new' => 90,
                'electricity_demand_a' => 270,
                'electricity_demand_a_plus' => 120,
                'electricity_demand_a_2plus' => 90,
                'electricity_demand_a_3plus' => 60,
            ],
            [
                'name'=> 'Dishwasher',
                'slug' => EeImprovement::SLUG_HA_DISHWASHER,
                'electricity_demand_old' => 330,
                'electricity_demand_new' => 260,
                'electricity_demand_a' => null,
                'electricity_demand_a_plus' => 330,
                'electricity_demand_a_2plus' => 260,
                'electricity_demand_a_3plus' => 190,
            ]
        ];
        ElectronicParam::insert(array_map(static fn($value) => [
            ...$value,
            'baseline_class' => 'A++',
            'created_at' => now(),
            'updated_at' => now(),
        ], $electronics));
    }
}
