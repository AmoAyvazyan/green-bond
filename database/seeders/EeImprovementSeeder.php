<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\EeImprovement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class EeImprovementSeeder extends Seeder
{
//    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $improvement = new EeImprovement();
        App::setLocale('hy');
        $improvement->name         = 'Ջեռուցման համակարգ';
        $improvement->description  = 'Բնական գազի կաթսայով համակարգ';
        $improvement->slug         = EeImprovement::SLUG_HEATING_SYSTEM;
        $improvement->is_active    = true;
        $improvement->icon         = asset('images/improvements/heating_system.svg');
        $improvement->has_quantity = false;
        $improvement->has_power    = false;
        $improvement->has_price    = true;
        $improvement->sort_order   = 1;
        $improvement->save();
        App::setLocale('en');
        $improvement->name        = 'Heating System';
        $improvement->description = 'Natural Gas Boiler System';
        $improvement->save();

        $improvement = new EeImprovement();
        App::setLocale('hy');
        $improvement->name        = 'Ջերմամեկուսացում';
        $improvement->description = 'Ջերմամեկուսացում';
        $improvement->slug        = EeImprovement::SLUG_THERMAL_INSULATION;
        $improvement->is_active   = true;
        $improvement->icon        = asset('images/improvements/thermal_insulation.svg');
        $improvement->sort_order  = 2;
        $improvement->save();
        App::setLocale('en');
        $improvement->name        = 'Thermal Insulation';
        $improvement->description = 'Thermal Insulation';
        $improvement->save();
        $child = $improvement->children()->create([
            'slug'          => EeImprovement::SLUG_THERMAL_INSULATION_WALLS,
            'is_active'     => true,
            'has_price'     => true,
            'has_area'      => true,
            'has_thickness' => true,
            'hy'            => ['name' => 'Արտաքին պատեր'],
            'en'            => ['name' => 'External Walls'],
        ]);
        $child->materials()->attach(Material::whereIn('slug', ['eps', 'mineral-wool', 'pu-foam', 'xps'])->get()
                                            ->pluck('id'));
        $child = $improvement->children()->create([
            'hy'            => ['name' => 'Տանիք'],
            'en'            => ['name' => 'Roof'],
            'slug'          => EeImprovement::SLUG_THERMAL_INSULATION_ROOF,
            'is_active'     => true,
            'has_price'     => true,
            'has_area'      => true,
            'has_thickness' => true,
        ]);
        $child->materials()->attach(Material::whereIn('slug', ['eps', 'mineral-wool', 'perlite', 'pu-foam', 'xps'])
                                            ->get()->pluck('id'));

        $improvement = new EeImprovement();
        App::setLocale('hy');
        $improvement->name        = 'Պատուհաններ և մուտքի դուռ';
        $improvement->description = 'Պատուհանների և մուտքի դռան փոխարինում/տեղադրում';
        $improvement->slug        = EeImprovement::SLUG_DOORS_AND_WINDOWS;
        $improvement->is_active   = true;
        $improvement->icon        = asset('images/improvements/windows_and_entrance_doors.svg');
        $improvement->sort_order  = 3;
        $improvement->save();
        App::setLocale('en');
        $improvement->name        = 'Windows and Entrance Doors';
        $improvement->description = 'Replacement/Installation of Windows and Entrance Doors';
        $improvement->save();
        $improvement->children()->createMany([
            [
                'hy'        => ['name' => 'Պատուհաններ'],
                'en'        => ['name' => 'Windows'],
                'slug'      => EeImprovement::SLUG_WINDOWS,
                'is_active' => true,
                'has_price' => true,
                'has_area'  => true,
            ], [
                'hy'        => ['name' => 'Արտաքին դուռ'],
                'en'        => ['name' => 'Entrance Door'],
                'slug'      => EeImprovement::SLUG_DOOR,
                'is_active' => true,
                'has_price' => true,
                'has_area'  => true,
            ],
        ]);

        $improvement = new EeImprovement();
        App::setLocale('hy');
        $improvement->name         = 'Լուսավորություն';
        $improvement->description  = 'Լուսադիոդային լամպեր և լուսատուներ';
        $improvement->slug         = EeImprovement::SLUG_LIGHTING;
        $improvement->is_active    = true;
        $improvement->icon         = asset('images/improvements/lighting.svg');
        $improvement->has_quantity = true;
        $improvement->has_power    = true;
        $improvement->has_price    = true;
        $improvement->sort_order   = 4;
        $improvement->save();
        App::setLocale('en');
        $improvement->name        = 'Lighting';
        $improvement->description = 'LED Lamps and Lighting Fixtures';
        $improvement->save();

        $improvement = new EeImprovement();
        App::setLocale('hy');
        $improvement->name        = 'Արևային ջրատաքացուցիչ';
        $improvement->description = 'Արևային ջրատաքացուցիչ համակարգ';
        $improvement->slug        = EeImprovement::SLUG_SOLAR_THERMAL;
        $improvement->is_active   = true;
        $improvement->icon        = asset('images/improvements/solar_water_heater.svg');
        $improvement->has_volume  = true;
        $improvement->has_price   = true;
        $improvement->sort_order  = 5;
        $improvement->save();
        App::setLocale('en');
        $improvement->name        = 'Solar Water Heater';
        $improvement->description = 'Solar Water Heater System';
        $improvement->save();

        $improvement = new EeImprovement();
        App::setLocale('hy');
        $improvement->name         = 'Արևային ֆոտովոլտային համակարգ';
        $improvement->description  = 'Արևային ֆոտովոլտային համակարգ';
        $improvement->slug         = EeImprovement::SLUG_SOLAR_PV;
        $improvement->is_active    = true;
        $improvement->icon         = asset('images/improvements/solar_photovoltaic_system.svg');
        $improvement->has_power    = true;
        $improvement->has_price    = true;
        $improvement->has_quantity = false;
        $improvement->sort_order   = 6;
        $improvement->save();
        App::setLocale('en');
        $improvement->name        = 'Solar Photovoltaic System';
        $improvement->description = 'Solar Photovoltaic System';
        $improvement->save();

        $improvement = new EeImprovement();
        App::setLocale('hy');
        $improvement->name        = 'Կենցաղային սարքավորումներ';
        $improvement->description = 'Կենցաղային սարքավորումներ';
        $improvement->slug        = EeImprovement::SLUG_HOUSEHOLD_APPLIANCES;
        $improvement->is_active   = true;
        $improvement->icon        = asset('images/improvements/household_appliances.svg');
        $improvement->sort_order  = 7;
        $improvement->save();
        App::setLocale('en');
        $improvement->name        = 'Household Appliances';
        $improvement->description = 'Household Appliances';
        $improvement->save();
        $improvement->children()->createMany([
            [
                'hy'           => ['name' => 'Սառնարան'],
                'en'           => ['name' => 'Refrigerator'],
                'slug'         => EeImprovement::SLUG_HA_REFRIGERATOR,
                'is_active'    => true,
                'has_quantity' => true,
                'has_price'    => true,
            ], [
                'hy'           => ['name' => 'Լվացքի մեքենա'],
                'en'           => ['name' => 'Washing Machine'],
                'slug'         => EeImprovement::SLUG_HA_WASHING_MACHINE,
                'is_active'    => true,
                'has_quantity' => true,
                'has_price'    => true,
            ],
            [
                'hy'           => ['name' => 'Օդորակիչ'],
                'en'           => ['name' => 'Air Conditioner'],
                'slug'         => EeImprovement::SLUG_HA_AC,
                'is_active'    => true,
                'has_quantity' => true,
                'has_price'    => true,
            ], [
                'hy'           => ['name' => 'Սպասք լվացող մեքենա'],
                'en'           => ['name' => 'Dishwasher'],
                'slug'         => EeImprovement::SLUG_HA_DISHWASHER,
                'is_active'    => true,
                'has_quantity' => true,
                'has_price'    => true,
            ],
        ]);
    }
}
