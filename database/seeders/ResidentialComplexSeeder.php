<?php

namespace Database\Seeders;

use App\Models\Region;
use App\Models\Building;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Models\ResidentialComplex;
use Illuminate\Support\Facades\App;

class ResidentialComplexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 4;
        App::setLocale('en');
        $complex->name      = '';
        $complex->address   = '1/10 Sasna Tsrer street';
        $complex->developer = 'RENSHIN';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = '';
        $complex->address   = 'Սասնա ծռերի փողոց, 1/10';
        $complex->developer = 'ՌենՇին';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '1';
        App::setLocale('en');
        $building->title = '1';
        $building->save();

        //2
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 8;
        App::setLocale('en');
        $complex->name      = '';
        $complex->address   = '3/3 Sebastia street';
        $complex->developer = 'GEVMIK';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = '';
        $complex->address   = 'Սեբաստիայի փողոց, 3/3';
        $complex->developer = 'ԳեՄիկ';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = 'Ա1';
        App::setLocale('en');
        $building->title = 'A1';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = 'Բ1';
        App::setLocale('en');
        $building->title = 'B1';
        $building->save();

        //3
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 1;
        App::setLocale('en');
        $complex->name      = 'Luyser residential complex';
        $complex->address   = '23/7 Leningradyan steet';
        $complex->developer = 'LUYSER';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = 'Լույսեր բնակելի համալիր';
        $complex->address   = 'Լենինգրադյան փողոց, 23/7';
        $complex->developer = 'Լույսեր';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = 'Ա1';
        App::setLocale('en');
        $building->title = 'A1';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = 'Բ1';
        App::setLocale('en');
        $building->title = 'B1';
        $building->save();

        //4
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 1;
        App::setLocale('en');
        $complex->name      = 'Luyser residential complex';
        $complex->address   = '23/7 Leningradyan steet';
        $complex->developer = 'LUYSER';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = 'Լույսեր բնակելի համալիր';
        $complex->address   = 'Լենինգրադյան փողոց, 23/7';
        $complex->developer = 'Լույսեր';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'C+';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = 'Գ1';
        App::setLocale('en');
        $building->title = 'G1';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = 'Դ1';
        App::setLocale('en');
        $building->title = 'D1';
        $building->save();

        //5
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 9;
        App::setLocale('en');
        $complex->name      = 'Garunavan 3 residential complex';
        $complex->address   = '51 Bagrevand block';
        $complex->developer = 'ADVANCED DEVELOPMENT';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = 'Գարունավան 3 բնակելի համալիր';
        $complex->address   = 'Բագրևանդ թաղամաս 51';
        $complex->developer = 'Ըդվանսդ Դիվելըփմենթ';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'C+';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '1';
        App::setLocale('en');
        $building->title = '1';
        $building->save();

        //6
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 2;
        App::setLocale('en');
        $complex->name      = '';
        $complex->address   = '59 Komitas street';
        $complex->developer = 'YEREVAN LUSATEKHNIK (CAPITAL BUILD)';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = '';
        $complex->address   = 'Կոմիտաս 59';
        $complex->developer = 'Երևանի Լուսատեխնիկ (Կապիտալ Բիլդ)';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B+';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = 'Ա1';
        App::setLocale('en');
        $building->title = 'A1';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B+';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = 'Բ1';
        App::setLocale('en');
        $building->title = 'B1';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B+';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = 'Գ1';
        App::setLocale('en');
        $building->title = 'G1';
        $building->save();

        //7
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 2;
        App::setLocale('en');
        $complex->name      = '';
        $complex->address   = '17 Griboyedov street';
        $complex->developer = 'ARCADA';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = '';
        $complex->address   = 'Գրիբոյեդով 17';
        $complex->developer = 'Արկադա';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '1';
        App::setLocale('en');
        $building->title = '1';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '2';
        App::setLocale('en');
        $building->title = '2';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '3';
        App::setLocale('en');
        $building->title = '3';
        $building->save();

        //8
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 2;
        App::setLocale('en');
        $complex->name      = '';
        $complex->address   = '17 Griboyedov street';
        $complex->developer = 'ARCADA';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = '';
        $complex->address   = 'Գրիբոյեդով 17';
        $complex->developer = 'Արկադա';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'C+';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        $building->title                  = '2';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'C+';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '1';
        App::setLocale('en');
        $building->title = '1';
        $building->save();

        //9
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 1;
        App::setLocale('en');
        $complex->name      = 'Shushi palace residential complex';
        $complex->address   = '44/13 Nazarbekyan Street';
        $complex->developer = 'Lorida Group';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = 'Շուշի Փելըս համալիր';
        $complex->address   = 'Նազարբեկյան 44/13';
        $complex->developer = 'Լորիդա Գրուպ';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B+';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '1';
        App::setLocale('en');
        $building->title = '1';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B+';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '2';
        App::setLocale('en');
        $building->title = '2';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B+';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '4';
        App::setLocale('en');
        $building->title = '4';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B+';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '5';
        App::setLocale('en');
        $building->title = '5';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B+';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '7';
        App::setLocale('en');
        $building->title = '7';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B+';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '8';
        App::setLocale('en');
        $building->title = '8';
        $building->save();

        //10
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 1;
        App::setLocale('en');
        $complex->name      = 'Shushi palace residential complex';
        $complex->address   = '44/13 Nazarbekyan Street';
        $complex->developer = 'Lorida Group';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = 'Շուշի Փելըս համալիր';
        $complex->address   = 'Նազարբեկյան 44/13';
        $complex->developer = 'Լորիդա Գրուպ';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        $building->title                  = '3';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '1';
        App::setLocale('en');
        $building->title = '1';
        $building->save();

        //11
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 6;
        App::setLocale('en');
        $complex->name      = '';
        $complex->address   = '11/12 Davit Anhaght Street';
        $complex->developer = 'Aygedzor';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = '';
        $complex->address   = 'Դավիթ Անհաղթ 11/12';
        $complex->developer = 'Այգեձոր';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'A';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '1';
        App::setLocale('en');
        $building->title = '1';
        $building->save();

        //12
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 2;
        App::setLocale('en');
        $complex->name      = 'Antar residential complex';
        $complex->address   = '44-48 Aghpyur Serob Street';
        $complex->developer = 'ArtCompany';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = 'Անտառ բնակելի համալիր';
        $complex->address   = 'Աղբյուր Սերոբ 44-48';
        $complex->developer = 'Արտքոմփանի';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        $building->title                  = '1';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '1';
        App::setLocale('en');
        $building->title = '1';
        $building->save();

        //13
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 2;
        App::setLocale('en');
        $complex->name      = 'Antar residential complex';
        $complex->address   = '44-48 Aghpyur Serob Street';
        $complex->developer = 'ArtCompany';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = 'Անտառ բնակելի համալիր';
        $complex->address   = 'Աղբյուր Սերոբ 44-48';
        $complex->developer = 'Արտքոմփանի';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'A';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '1';
        App::setLocale('en');
        $building->title = '1';
        $building->save();

        //14
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 449;
        App::setLocale('en');
        $complex->name      = '';
        $complex->address   = '21st land, 6th street';
        $complex->developer = 'Mangolia Comfort';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = '';
        $complex->address   = '6-րդ փողոց, 21-րդ հող';
        $complex->developer = 'Մանգոլիա Կոմֆորտ ';
        $complex->save();
        foreach (range(1, 13) as $i) {
            $building                         = new Building();
            $building->complex_id             = $complex->id;
            $building->ee_class               = 'A';
            $building->hdd                    = 2646;
            $building->floors                 = 11;
            $building->surface_area           = 6807;
            $building->heated_volume          = 22793;
            $building->heating_ventilation_pf = 0.211;
            App::setLocale('hy');
            $building->title = $i;
            App::setLocale('en');
            $building->title = $i;
            $building->save();
        }

        //13
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 4;
        App::setLocale('en');
        $complex->name      = '';
        $complex->address   = '15/5 10th street';
        $complex->developer = 'HAEK-I Construction';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = '';
        $complex->address   = '10-րդ փողոց 15/5';
        $complex->developer = 'ՀԱԷԿ-I Շինարարություն';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'A+';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '1';
        App::setLocale('en');
        $building->title = '1';
        $building->save();

        //14
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 433;
        App::setLocale('en');
        $complex->name      = '';
        $complex->address   = '2nd drive, 20th street, P.Sevak neighbourhood';
        $complex->developer = 'Domum LLC';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = '';
        $complex->address   = 'Պ․ Սևակ թաղ․, փ․ 20, 2-րդ փակուղի, 20 հող';
        $complex->developer = 'Դոմում ՍՊԸ';
        $complex->save();
        foreach (range(1, 4) as $i) {
            $building                         = new Building();
            $building->complex_id             = $complex->id;
            $building->ee_class               = 'B+';
            $building->hdd                    = 2646;
            $building->floors                 = 11;
            $building->surface_area           = 6807;
            $building->heated_volume          = 22793;
            $building->heating_ventilation_pf = 0.211;
            $building->title                  = $i;
            $building->save();
        }

        //15
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 8;
        App::setLocale('en');
        $complex->name      = '';
        $complex->address   = '29/9 Leningradyan street';
        $complex->developer = 'SAF Capital LLC';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = '';
        $complex->address   = '29/9 Լենինգրադյան փողոց';
        $complex->developer = 'Սաֆ Կապիտալ ՍՊԸ';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B+';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '1';
        App::setLocale('en');
        $building->title = '1';
        $building->save();

        //16
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 8;
        App::setLocale('en');
        $complex->name      = '';
        $complex->address   = '29/14 Leningradyan street';
        $complex->developer = 'GEVMIK LLC';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = '';
        $complex->address   = '29/14 Լենինգրադյան փողոց';
        $complex->developer = 'ԳԵՎՄԻԿ ՍՊԸ';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '1';
        App::setLocale('en');
        $building->title = '1';
        $building->save();

        //17
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 10;
        App::setLocale('en');
        $complex->name      = '';
        $complex->address   = '19/5 Nork street';
        $complex->developer = 'Vahgarsh & Sons LLC';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = '';
        $complex->address   = '19/5 Նորքի փողոց ';
        $complex->developer = 'Վաղարշ և որդիներ կոնցեռն ՍՊԸ';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = 'Բ1';
        App::setLocale('en');
        $building->title = 'B1';
        $building->save();

        //18
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 449;
        App::setLocale('en');
        $complex->name      = '';
        $complex->address   = '19 building, 2nd lane, 30th street';
        $complex->developer = 'Mitstart LLC';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = '';
        $complex->address   = '30-րդ փողոց, 2-րդ նրբանցք, 19 շենք';
        $complex->developer = 'Միթսթարթ ՍՊԸ';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B+';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = '1';
        App::setLocale('en');
        $building->title = '1';
        $building->save();

        //18
        $complex               = new ResidentialComplex();
        $complex->region_id    = 1;
        $complex->community_id = 9;
        App::setLocale('en');
        $complex->name      = '';
        $complex->address   = '11/5 Gyurjyan street';
        $complex->developer = 'Magas LLC';
        $complex->save();
        App::setLocale('hy');
        $complex->name      = '';
        $complex->address   = 'Գյուրջյան Փողոց, հ․11/5';
        $complex->developer = 'Մագաս ՍՊԸ';
        $complex->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = 'Ա1';
        App::setLocale('en');
        $building->title = 'A1';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = 'Բ1';
        App::setLocale('en');
        $building->title = 'B1';
        $building->save();
        $building                         = new Building();
        $building->complex_id             = $complex->id;
        $building->ee_class               = 'B';
        $building->hdd                    = 2646;
        $building->floors                 = 11;
        $building->surface_area           = 6807;
        $building->heated_volume          = 22793;
        $building->heating_ventilation_pf = 0.211;
        App::setLocale('hy');
        $building->title = 'Գ1';
        App::setLocale('en');
        $building->title = 'G1';
        $building->save();
    }
}
