<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $region                = new Region();
        $region->hh_30_year    = 2549.2;
        $region->hdd_average_apartment = 710.8;
        $region->hdd_average_sfh   = 403.5;
        $region->hdd_average_normative       = 2660;
        App::setLocale('hy');
        $region->name = 'Երևան';
        $region->save();
        App::setLocale('en');
        $region->name = 'Yerevan';
        $region->save();

        $region                = new Region();
        $region->hh_30_year    = 2707.1;
        $region->hdd_average_apartment = 132.2;
        $region->hdd_average_sfh   = 131.7;
        $region->hdd_average_normative       = 2848.6;
        App::setLocale('hy');
        $region->name = 'Սյունիք';
        $region->save();
        App::setLocale('en');
        $region->name = 'Syunik';
        $region->save();

        $region                = new Region();
        $region->hh_30_year    = 2684.4;
        $region->hdd_average_apartment = 80.9;
        $region->hdd_average_sfh   = 63.9;
        $region->hdd_average_normative       = 2803;
        App::setLocale('hy');
        $region->name = 'Վայոց ձոր';
        $region->save();
        App::setLocale('en');
        $region->name = 'Vayots Dzor';
        $region->save();

        $region                = new Region();
        $region->hh_30_year    = 4341.3;
        $region->hdd_average_apartment = 115;
        $region->hdd_average_sfh   = 440;
        $region->hdd_average_normative       = 4473.7;
        App::setLocale('hy');
        $region->name = 'Գեղարքունիք';
        $region->save();
        App::setLocale('en');
        $region->name = 'Gegharkunik';
        $region->save();

        $region                = new Region();
        $region->hh_30_year    = 2549.7;
        $region->hdd_average_apartment = 140;
        $region->hdd_average_sfh   = 314.4;
        $region->hdd_average_normative       = 2662.9;
        App::setLocale('hy');
        $region->name = 'Արարատ';
        $region->save();
        App::setLocale('en');
        $region->name = 'Ararat';
        $region->save();

        $region                = new Region();
        $region->hh_30_year    = 2714.7;
        $region->hdd_average_apartment = 377.1;
        $region->hdd_average_sfh   = 302.7;
        $region->hdd_average_normative       = 2822.4;
        App::setLocale('hy');
        $region->name = 'Արմավիր';
        $region->save();
        App::setLocale('en');
        $region->name = 'Armavir';
        $region->save();

        $region                = new Region();
        $region->hh_30_year    = 3717.1;
        $region->hdd_average_apartment = 403.4;
        $region->hdd_average_sfh   = 401.7;
        $region->hdd_average_normative       = 382.2;
        App::setLocale('hy');
        $region->name = 'Կոտայք';
        $region->save();
        App::setLocale('en');
        $region->name = 'Kotayk';
        $region->save();

        $region                = new Region();
        $region->hh_30_year    = 3444.8;
        $region->hdd_average_apartment = 192.5;
        $region->hdd_average_sfh   = 272.1;
        $region->hdd_average_normative       = 3549.5;
        App::setLocale('hy');
        $region->name = 'Արագածոտն';
        $region->save();
        App::setLocale('en');
        $region->name = 'Aragatsotn';
        $region->save();

        $region                = new Region();
        $region->hh_30_year    = 2664.3;
        $region->hdd_average_apartment = 123.4;
        $region->hdd_average_sfh   = 201.2;
        $region->hdd_average_normative       = 2787.9;
        App::setLocale('hy');
        $region->name = 'Տավուշ';
        $region->save();
        App::setLocale('en');
        $region->name = 'Tavush';
        $region->save();

        $region                = new Region();
        $region->hh_30_year    = 3473;
        $region->hdd_average_apartment = 408.5;
        $region->hdd_average_sfh   = 387.1;
        $region->hdd_average_normative       = 3625.1;
        App::setLocale('hy');
        $region->name = 'Լոռի';
        $region->save();
        App::setLocale('en');
        $region->name = 'Lori';
        $region->save();

        $region                = new Region();
        $region->hh_30_year    = 3985.7;
        $region->hdd_average_apartment = 542;
        $region->hdd_average_sfh   = 390.1;
        $region->hdd_average_normative       = 4145.7;
        App::setLocale('hy');
        $region->name = 'Շիրակ';
        $region->save();
        App::setLocale('en');
        $region->name = 'Shirak';
        $region->save();
    }
}
