<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $material            = new Material();
        $material->image     = asset('images/materials/EPS.webp');
        $material->slug      = 'eps';
        $material->is_active = true;
        App::setLocale('hy');
        $material->name = 'Փրփրապոլիստերոլ';
        $material->save();
        App::setLocale('en');
        $material->name = 'EPS';
        $material->save();

        $material            = new Material();
        $material->image     = asset('images/materials/mineral-wool.webp');
        $material->slug      = 'mineral-wool';
        $material->is_active = true;
        App::setLocale('hy');
        $material->name = 'Հանքային բամբակ';
        $material->save();
        App::setLocale('en');
        $material->name = 'Mineral wool';
        $material->save();

        $material            = new Material();
        $material->image     = asset('images/materials/perlite.webp');
        $material->slug      = 'perlite';
        $material->is_active = true;
        App::setLocale('hy');
        $material->name = 'Փրփրապերլիտ';
        $material->save();
        App::setLocale('en');
        $material->name = 'Perlite';
        $material->save();

        $material            = new Material();
        $material->image     = asset('images/materials/polyurethane.webp');
        $material->slug      = 'pu-foam';
        $material->is_active = true;
        App::setLocale('hy');
        $material->name = 'Փրփրապոլիուրետան';
        $material->save();
        App::setLocale('en');
        $material->name = 'PU foam';
        $material->save();

        $material            = new Material();
        $material->image     = asset('images/materials/xps.jpg');
        $material->slug      = 'xps';
        $material->is_active = true;
        App::setLocale('hy');
        $material->name = 'Էքստրուդացված պոլիստերոլ';
        $material->save();
        App::setLocale('en');
        $material->name = 'XPS';
        $material->save();
    }
}
