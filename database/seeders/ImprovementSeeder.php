<?php

namespace Database\Seeders;

use App\Models\Improvement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImprovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $improvement = new Improvement();
        App::setLocale('hy');
        $improvement->name          = 'Արտաքին աշխատանքներ';
        $improvement->description   = 'Ընդհանուր բնակելի տան արտաքին աշխատանքներ';
        $improvement->slug          = 'outside-works';
        $improvement->is_active     = true;
        $improvement->icon          = asset('images/improvements/exterior_works.svg');
        $improvement->availability  = Improvement::AVAILABILITY_CONSTRUCTION;
        $improvement->is_countable  = false;
        $improvement->include_works = false;
        $improvement->save();
        App::setLocale('en');
        $improvement->name        = 'Outside Works';
        $improvement->description = 'Works to be done outside the building';
        $improvement->save();
        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Հողային և բակային աշխատանքներ'],
            'en'           => ['name' => 'Landscape works'],
            'slug'         => 'landscape-works',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
            'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Հիմքի քանդում, հողի հարթեցում'],
                'en'           => ['name' => 'Foundation, leveling of the land'],
                'slug'         => 'foundation-demolition-land-leveling',
                'is_active'    => true,
                'is_countable' => false,
                'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
            ],
            [
                'hy'           => ['name' => 'Բազալտ, սալիկ այլ նյութեր', 'unit' => 'մ²'],
                'en'           => ['name' => 'Basalt, tiles and other materials', 'unit' => 'm²'],
                'slug'         => 'basalt-tiles-and-other-materials',
                'is_active'    => true,
                'is_countable' => true,
                'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
            ],
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Շինության արտաքին պատերի և միջհարկային ծածկերի կառուցում'],
            'en'           => ['name' => 'Construction of external walls and intermediate floors of the building'],
            'slug'         => 'construction-of-external-walls-and-intermediate-floors',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
            'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Քար կամ բլոկ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Stone or block', 'unit' => 'm²'],
                'slug'         => 'stone-or-block',
                'is_active'    => true,
                'is_countable' => true,
                'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
            ],
            [
                'hy'           => ['name' => 'Ամրան', 'unit' => 'տոննա'],
                'en'           => ['name' => 'Construction armature', 'unit' => 'tons'],
                'slug'         => 'construction-armature',
                'is_active'    => true,
                'is_countable' => true,
                'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
            ],
            [
                'hy'           => ['name' => 'Ցեմենտ, ավազ, շաղախ կամ այլ նյութեր'],
                'en'           => ['name' => 'Cement, sand, mixtures or other materials'],
                'slug'         => 'cement-sand-mixtures-or-other-materials-construction-1',
                'is_active'    => true,
                'is_countable' => false,
                'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
            ],
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Տանիքի կառուցում'],
            'en'           => ['name' => 'Roof construction'],
            'slug'         => 'roof-construction',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
            'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Թիթեղ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Roof tin covering material', 'unit' => 'm²'],
                'slug'         => 'roof-tin-covering-material',
                'is_active'    => true,
                'is_countable' => true,
                'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
            ],
            [
                'hy'           => ['name' => 'Կղմինդր', 'unit' => 'մ²'],
                'en'           => ['name' => 'Roof tiles', 'unit' => 'm²'],
                'slug'         => 'roof-tiles-construction',
                'is_active'    => true,
                'is_countable' => true,
                'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
            ],
            [
                'hy'           => ['name' => 'Հենասյուներ և այլ նյութեր'],
                'en'           => ['name' => 'Columns and other materials'],
                'slug'         => 'columns-and-other-materials-construction',
                'is_active'    => true,
                'is_countable' => false,
                'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
            ],
            [
                'hy'           => ['name' => 'Տոլ, իզոգամ', 'unit' => 'հատ'],
                'en'           => ['name' => 'Waterproof materials', 'unit' => 'pcs'],
                'slug'         => 'waterproof-materials-construction',
                'is_active'    => true,
                'is_countable' => true,
                'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
            ],
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Շինության երեսպատում'],
            'en'           => ['name' => 'External facing of the building'],
            'slug'         => 'external-facing-of-the-building',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
            'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Երեսպատման քար կամ սալիկներ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Facing stone or tiles', 'unit' => 'm²'],
                'slug'         => 'facing-stone-or-tiles-construction',
                'is_active'    => true,
                'is_countable' => true,
                'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
            ],
            [
                'hy'           => ['name' => 'Ցեմենտ, ավազ, շաղախ կամ այլ նյութեր'],
                'en'           => ['name' => 'Cement, sand, mixtures or other materials'],
                'slug'         => 'cement-sand-mixtures-or-other-materials-construction-2',
                'is_active'    => true,
                'is_countable' => false,
                'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
            ],
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Պարսպի եւ դարպասի տեղադրում'],
            'en'           => ['name' => 'Fence and gate installation'],
            'slug'         => 'fence-and-gate-installation',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
            'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Դարպաս', 'unit' => 'հատ'],
                'en'           => ['name' => 'Gate', 'unit' => 'pcs'],
                'slug'         => 'gate-installation',
                'is_active'    => true,
                'is_countable' => true,
                'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
            ],
            [
                'hy'           => ['name' => 'Շինանյութ և այլ նյութեր'],
                'en'           => ['name' => 'Construction and other materials'],
                'slug'         => 'construction-and-other-materials',
                'is_active'    => true,
                'is_countable' => false,
                'availability' => Improvement::AVAILABILITY_CONSTRUCTION,
            ],
        ]);

        $improvement = new Improvement();
        App::setLocale('hy');
        $improvement->name          = 'Ներքին աշխատանքներ';
        $improvement->description   = 'Ընդհանուր բնակելի տան ներքին աշխատանքներ';
        $improvement->slug          = 'inside-works';
        $improvement->is_active     = true;
        $improvement->icon          = asset('images/improvements/interior_works.svg');
        $improvement->is_countable  = false;
        $improvement->include_works = false;
        $improvement->save();
        App::setLocale('en');
        $improvement->name        = 'Internal Works';
        $improvement->description = 'Works to be done inside the house/apartment';
        $improvement->save();
        $improvement->children()->create([
            'hy'            => ['name' => 'Ջեռուցման համակարգ'],
            'en'            => ['name' => 'Heating system'],
            'slug'          => 'construction-heating-system',
            'is_active'     => true,
            'is_countable'  => false,
            'include_works' => false,
            'availability'  => Improvement::AVAILABILITY_CONSTRUCTION,
        ]);

        $child = $improvement->children()->create([
            'hy'            => ['name' => 'Պատերի եւ հատակի քանդում'],
            'en'            => ['name' => 'Demolition of walls and floor'],
            'slug'          => 'demolition-of-walls-and-floor',
            'is_active'     => true,
            'is_countable'  => false,
            'include_works' => false,
            'availability'  => Improvement::AVAILABILITY_RENOVATION_ALL,
        ]);
        $child->children()->create([
            'hy'           => ['name' => 'Աշխատանք և աղբահանություն'],
            'en'           => ['name' => 'Labor cost and garbage removal'],
            'slug'         => 'labor-cost-and-garbage-removal',
            'is_active'    => true,
            'is_countable' => false,
            'availability' => Improvement::AVAILABILITY_RENOVATION_ALL,
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Ներքին ջրամատակարարում/ջրահեռացում'],
            'en'           => ['name' => 'Internal water supply/drainage'],
            'slug'         => 'internal-water-supply-drainage',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->create([
            'hy'           => ['name' => 'Խողովակ, կցամասեր և այլ նյութեր'],
            'en'           => ['name' => 'Pipe, fittings and other materials'],
            'slug'         => 'pipe-fittings-and-other-materials',
            'is_active'    => true,
            'is_countable' => false,
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Ներքին էլեկտրասնուցում'],
            'en'           => ['name' => 'Internal power supply'],
            'slug'         => 'internal-power-supply',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Մալուխ', 'unit' => 'մ'],
                'en'           => ['name' => 'Power cable', 'unit' => 'm'],
                'slug'         => 'power-cable',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Վարդակ եւ անջատիչ', 'unit' => 'հատ'],
                'en'           => ['name' => 'Sockets and switches', 'unit' => 'pcs'],
                'slug'         => 'sockets-and-switches',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Ավտոմատ և կարգավորման ռելե', 'unit' => 'հատ'],
                'en'           => ['name' => 'Power regulation relays and switches', 'unit' => 'pcs'],
                'slug'         => 'power-regulation-relays-and-switches',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Այլ նյութածախս'],
                'en'           => ['name' => 'Other materials cost'],
                'slug'         => 'other-materials-cost',
                'is_active'    => true,
                'is_countable' => false,
            ],
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Պատերի հարթեցում'],
            'en'           => ['name' => 'Leveling of walls'],
            'slug'         => 'leveling-of-walls',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Ցեմենտ, ավազ, շաղախ կամ այլ նյութեր', 'unit' => 'մ²'],
                'en'           => ['name' => 'Cement sand, mixtures or other materials', 'unit' => 'm²'],
                'slug'         => 'cement-sand-mixtures-or-other-materials-walls',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Գիպսոնիտ, գաջ կամ այլ նյութեր', 'unit' => 'մ²'],
                'en'           => ['name' => 'Gypsum, gypsonite or other materials', 'unit' => 'm²'],
                'slug'         => 'gypsum-gypsonite-or-other-materials-walls',
                'is_active'    => true,
                'is_countable' => true,
            ],
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Հատակի հարթեցում'],
            'en'           => ['name' => 'Leveling of the floor'],
            'slug'         => 'leveling-of-the-floor',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->create([
            'hy'           => ['name' => 'Ցեմենտ, ավազ, շաղախ կամ այլ նյութեր', 'unit' => 'մ²'],
            'en'           => ['name' => 'Cement sand, mixtures or other materials', 'unit' => 'm²'],
            'slug'         => 'cement-sand-mixtures-or-other-materials-floor',
            'is_active'    => true,
            'is_countable' => true,
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Առաստաղ'],
            'en'           => ['name' => 'Ceiling'],
            'slug'         => 'ceiling',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Գիպսոնիտ, գաջ կամ այլ նյութեր', 'unit' => 'մ²'],
                'en'           => ['name' => 'Gypsum, gypsonite or other materials', 'unit' => 'm²'],
                'slug'         => 'gypsum-gypsonite-or-other-materials-ceiling',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Գիպսաստվարաթուղթ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Drywall', 'unit' => 'm²'],
                'slug'         => 'drywall-ceiling',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Պրոֆիլներ, պտուտակներ և այլ համապատասխան դետալներ'],
                'en'           => ['name' => 'Studs, screws and other appropriate materials'],
                'slug'         => 'studs-screws-and-other-appropriate-materials-drywall',
                'is_active'    => true,
                'is_countable' => false,
            ],
            [
                'hy'           => ['name' => 'Առաստաղի շերտեր և այլ նյութեր', 'unit' => 'մ²'],
                'en'           => ['name' => 'PVC or metal boards and other materials', 'unit' => 'm²'],
                'slug'         => 'pvc-or-metal-boards-and-other-materials',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Պրոֆիլներ, պտուտակներ և այլ համապատասխան դետալներ'],
                'en'           => ['name' => 'Studs, screws and other appropriate materials'],
                'slug'         => 'studs-screws-and-other-appropriate-materials-pvc',
                'is_active'    => true,
                'is_countable' => false,
            ],
            [
                'hy'            => ['name' => 'Ձգվող առաստաղ (նյութեր և աշխատանք)', 'unit' => 'մ²'],
                'en'            => ['name' => 'Stretching ceiling (materials and labor cost)', 'unit' => 'm²'],
                'slug'          => 'stretching-ceiling',
                'is_active'     => true,
                'is_countable'  => true,
                'include_works' => false,
            ],
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Միջսենյակային դռներ'],
            'en'           => ['name' => 'Interior doors'],
            'slug'         => 'interior-doors',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->create([
            'hy'           => ['name' => 'Դռների և հարակից պարագաների ձեռքբերում', 'unit' => 'հատ'],
            'en'           => ['name' => 'Doors and related materials', 'unit' => 'pcs'],
            'slug'         => 'doors-and-related-materials',
            'is_active'    => true,
            'is_countable' => true,
        ]);

        $improvement = new Improvement();
        App::setLocale('hy');
        $improvement->name          = 'Սանհանգույց';
        $improvement->description   = 'Սանհանգույց';
        $improvement->slug          = 'bathroom';
        $improvement->is_active     = true;
        $improvement->icon          = asset('images/improvements/bathroom.svg');
        $improvement->is_countable  = false;
        $improvement->include_works = false;
        $improvement->save();
        App::setLocale('en');
        $improvement->name        = 'Bathroom';
        $improvement->description = 'Bathroom';
        $improvement->save();
        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Պատերի եւ հատակի սալիկապատում'],
            'en'           => ['name' => 'Tiling of walls and floor'],
            'slug'         => 'tiling-of-walls-and-floor-bathroom',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Սալիկներ պատերի', 'unit' => 'մ²',],
                'en'           => ['name' => 'Wall tiles', 'unit' => 'm²',],
                'slug'         => 'wall-tiles',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Սալիկներ հատակի', 'unit' => 'մ²',],
                'en'           => ['name' => 'Floor tiles', 'unit' => 'm²',],
                'slug'         => 'floor-tiles',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Սալիկի սոսինձ', 'unit' => 'պարկ',],
                'en'           => ['name' => 'Tile installment cement', 'unit' => 'bag',],
                'slug'         => 'tile-installment-cement',
                'is_active'    => true,
                'is_countable' => true,
            ],
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Պարագաներ և այլ նյութեր'],
            'en'           => ['name' => 'Accessories and other'],
            'slug'         => 'accessories-and-other-bathroom',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Ջրակայուն ներկ', 'unit' => 'լիտր'],
                'en'           => ['name' => 'Waterproof paint', 'unit' => 'liter'],
                'slug'         => 'waterproof-paint',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Լոգարան', 'unit' => 'հատ'],
                'en'           => ['name' => 'Bathtub', 'unit' => 'pcs'],
                'slug'         => 'bathtub',
                'is_active'    => true,
                'is_countable' => true,
            ], [
                'hy'           => ['name' => 'Լոգախցիկ', 'unit' => 'հատ'],
                'en'           => ['name' => 'Shower cabinet', 'unit' => 'pcs'],
                'slug'         => 'shower-cabinet',
                'is_active'    => true,
                'is_countable' => true,
            ], [
                'hy'           => ['name' => 'Լոգանքի ցնցուղ', 'unit' => 'հատ'],
                'en'           => ['name' => 'Bath shower', 'unit' => 'pcs'],
                'slug'         => 'bath-shower',
                'is_active'    => true,
                'is_countable' => true,
            ], [
                'hy'           => ['name' => 'Հիգենիկ ցնցուղ', 'unit' => 'հատ'],
                'en'           => ['name' => 'Bidet shower', 'unit' => 'pcs'],
                'slug'         => 'bidet-shower',
                'is_active'    => true,
                'is_countable' => true,
            ], [
                'hy'           => ['name' => 'Լվացարան', 'unit' => 'հատ'],
                'en'           => ['name' => 'Sink', 'unit' => 'pcs'],
                'slug'         => 'sink',
                'is_active'    => true,
                'is_countable' => true,
            ], [
                'hy'           => ['name' => 'Ծորակ', 'unit' => 'հատ'],
                'en'           => ['name' => 'Faucet', 'unit' => 'pcs'],
                'slug'         => 'faucet',
                'is_active'    => true,
                'is_countable' => true,
            ], [
                'hy'           => ['name' => 'Զուգարանակոնք', 'unit' => 'հատ'],
                'en'           => ['name' => 'Toilet', 'unit' => 'pcs'],
                'slug'         => 'toilet',
                'is_active'    => true,
                'is_countable' => true,
            ], [
                'hy'           => ['name' => 'Օդաքարշ', 'unit' => 'հատ'],
                'en'           => ['name' => 'Fan', 'unit' => 'pcs'],
                'slug'         => 'fan',
                'is_active'    => true,
                'is_countable' => true,
            ], [
                'hy'           => ['name' => 'Հայելի', 'unit' => 'հատ'],
                'en'           => ['name' => 'Mirror', 'unit' => 'pcs'],
                'slug'         => 'mirror',
                'is_active'    => true,
                'is_countable' => true,
            ], [
                'hy'           => ['name' => 'Կախիչներ և այլ աքսեսուարներ'],
                'en'           => ['name' => 'Hangers and other accessories'],
                'slug'         => 'hangers-and-other-accessories',
                'is_active'    => true,
                'is_countable' => false,
            ], [
                'hy'           => ['name' => 'Այլ պարագաներ'],
                'en'           => ['name' => 'Other accessories'],
                'slug'         => 'other-accessories',
                'is_active'    => true,
                'is_countable' => false,
            ],
        ]);

        $improvement = new Improvement();
        App::setLocale('hy');
        $improvement->name          = 'Հյուրասենյակ';
        $improvement->description   = 'Հյուրասենյակ';
        $improvement->slug          = 'living-room';
        $improvement->is_active     = true;
        $improvement->icon          = asset('images/improvements/living_room.svg');
        $improvement->is_countable  = false;
        $improvement->include_works = false;
        $improvement->save();
        App::setLocale('en');
        $improvement->name        = 'Living Room';
        $improvement->description = 'Living Room';
        $improvement->save();
        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Պատերի եւ առաստաղի գերհարթեցում, ներկում'],
            'en'           => ['name' => 'Finishing, painting of walls and ceiling'],
            'slug'         => 'finishing-painting-living-room',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Գիպսային և կավճային ծեփամածիկ', 'unit' => 'պարկ'],
                'en'           => ['name' => 'Gypsum and chalk putty', 'unit' => 'bag'],
                'slug'         => 'gypsum-and-chalk-putty-living-room',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Ներկ', 'unit' => 'լիտր'],
                'en'           => ['name' => 'Paint', 'unit' => 'liter'],
                'slug'         => 'paint-living-room',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Պաստառ', 'unit' => 'հատ'],
                'en'           => ['name' => 'Wallpaper', 'unit' => 'pcs'],
                'slug'         => 'wallpaper-living-room',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Այլ նյութեր'],
                'en'           => ['name' => 'Other materials'],
                'slug'         => 'other-materials-living-room',
                'is_active'    => true,
                'is_countable' => false,
            ],
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Հատակ'],
            'en'           => ['name' => 'Flooring'],
            'slug'         => 'flooring-living-room',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Սալիկ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Tiles', 'unit' => 'm²'],
                'slug'         => 'tiles-living-room',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Լամինատ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Laminated floor materials', 'unit' => 'm²'],
                'slug'         => 'laminated-floor-materials-living-room',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Մանրահատակ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Hardwood floor materials', 'unit' => 'm²'],
                'slug'         => 'hardwood-floor-materials-living-room',
                'is_active'    => true,
                'is_countable' => true,
            ],
        ]);

        $improvement = new Improvement();
        App::setLocale('hy');
        $improvement->name          = 'Միջանցք';
        $improvement->description   = 'Միջանցք';
        $improvement->slug          = 'Hallway';
        $improvement->is_active     = true;
        $improvement->icon          = asset('images/improvements/hallway.svg');
        $improvement->is_countable  = false;
        $improvement->include_works = false;
        $improvement->save();
        App::setLocale('en');
        $improvement->name        = 'Hallway';
        $improvement->description = 'Hallway';
        $improvement->save();
        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Պատերի եւ առաստաղի գերհարթեցում, ներկում'],
            'en'           => ['name' => 'Finishing, painting of walls and ceiling'],
            'slug'         => 'finishing-painting-hallway',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Գիպսային և կավճային ծեփամածիկ', 'unit' => 'պարկ'],
                'en'           => ['name' => 'Gypsum and chalk putty', 'unit' => 'bag'],
                'slug'         => 'gypsum-and-chalk-putty-hallway',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Ներկ', 'unit' => 'լիտր'],
                'en'           => ['name' => 'Paint', 'unit' => 'liter'],
                'slug'         => 'paint-hallway',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Պաստառ', 'unit' => 'հատ'],
                'en'           => ['name' => 'Wallpaper', 'unit' => 'pcs'],
                'slug'         => 'wallpaper-hallway',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Այլ նյութեր'],
                'en'           => ['name' => 'Other materials'],
                'slug'         => 'other-materials-hallway',
                'is_active'    => true,
                'is_countable' => false,
            ],
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Հատակ'],
            'en'           => ['name' => 'Flooring'],
            'slug'         => 'floor-hallway',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Սալիկ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Tiles', 'unit' => 'm²'],
                'slug'         => 'tiles-hallway',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Լամինատ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Laminated floor materials', 'unit' => 'm²'],
                'slug'         => 'laminated-floor-materials-hallway',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Մանրահատակ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Hardwood floor materials', 'unit' => 'm²'],
                'slug'         => 'hardwood-floor-materials-hallway',
                'is_active'    => true,
                'is_countable' => true,
            ],
        ]);

        $improvement = new Improvement();
        App::setLocale('hy');
        $improvement->name          = 'Խոհանոց';
        $improvement->description   = 'Խոհանոց';
        $improvement->slug          = 'Kitchen';
        $improvement->is_active     = true;
        $improvement->icon          = asset('images/improvements/kitchen.svg');
        $improvement->is_countable  = false;
        $improvement->include_works = false;
        $improvement->save();
        App::setLocale('en');
        $improvement->name        = 'Kitchen';
        $improvement->description = 'Kitchen';
        $improvement->save();
        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Պատերի եւ առաստաղի գերհարթեցում, ներկում'],
            'en'           => ['name' => 'Finishing, painting of walls and ceiling'],
            'slug'         => 'finishing-painting-kitchen',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Գիպսային և կավճային ծեփամածիկ', 'unit' => 'պարկ'],
                'en'           => ['name' => 'Gypsum and chalk putty', 'unit' => 'bag'],
                'slug'         => 'gypsum-and-chalk-putty-kitchen',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Ներկ', 'unit' => 'լիտր'],
                'en'           => ['name' => 'Paint', 'unit' => 'liter'],
                'slug'         => 'paint-kitchen',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Պաստառ', 'unit' => 'հատ'],
                'en'           => ['name' => 'Wallpaper', 'unit' => 'pcs'],
                'slug'         => 'wallpaper-kitchen',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Սալիկ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Tiles', 'unit' => 'm²'],
                'slug'         => 'tiles-finishing-painting-kitchen',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Այլ նյութեր'],
                'en'           => ['name' => 'Other materials'],
                'slug'         => 'other-materials-kitchen',
                'is_active'    => true,
                'is_countable' => false,
            ],
            [
                'hy'           => ['name' => 'Սալիկապատման աշխատանք', 'unit' => 'մ²'],
                'en'           => ['name' => 'Tiles installment labor cost', 'unit' => 'm²'],
                'slug'         => 'tiles-installment-labor-cost-kitchen',
                'is_active'    => true,
                'is_countable' => true,
            ],
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Հատակ'],
            'en'           => ['name' => 'Flooring'],
            'slug'         => 'floor-kitchen',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Սալիկ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Tiles', 'unit' => 'm²'],
                'slug'         => 'tiles-kitchen',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Լամինատ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Laminated floor materials', 'unit' => 'm²'],
                'slug'         => 'laminated-floor-materials-kitchen',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Մանրահատակ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Hardwood floor materials', 'unit' => 'm²'],
                'slug'         => 'hardwood-floor-materials-kitchen',
                'is_active'    => true,
                'is_countable' => true,
            ],
        ]);

        $improvement = new Improvement();
        App::setLocale('hy');
        $improvement->name          = 'Ննջարաններ';
        $improvement->description   = 'Ննջարաններ';
        $improvement->slug          = 'Bedrooms';
        $improvement->is_active     = true;
        $improvement->icon          = asset('images/improvements/bedrooms.svg');
        $improvement->is_countable  = false;
        $improvement->include_works = false;
        $improvement->save();
        App::setLocale('en');
        $improvement->name        = 'Bedrooms';
        $improvement->description = 'Bedrooms';
        $improvement->save();
        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Պատերի եւ առաստաղի գերհարթեցում, ներկում'],
            'en'           => ['name' => 'Finishing, painting of walls and ceiling'],
            'slug'         => 'finishing-painting-bedrooms',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Գիպսային և կավճային ծեփամածիկ', 'unit' => 'պարկ'],
                'en'           => ['name' => 'Gypsum and chalk putty', 'unit' => 'bag'],
                'slug'         => 'gypsum-and-chalk-putty-bedrooms',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Ներկ', 'unit' => 'լիտր'],
                'en'           => ['name' => 'Paint', 'unit' => 'liter'],
                'slug'         => 'paint-bedrooms',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Պաստառ', 'unit' => 'հատ'],
                'en'           => ['name' => 'Wallpaper', 'unit' => 'pcs'],
                'slug'         => 'wallpaper-bedrooms',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Այլ նյութեր', 'unit' => ''],
                'en'           => ['name' => 'Other materials', 'unit' => ''],
                'slug'         => 'other-materials-bedrooms',
                'is_active'    => true,
                'is_countable' => false,
            ],
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Հատակ'],
            'en'           => ['name' => 'Flooring'],
            'slug'         => 'floor-bedrooms',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Սալիկ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Tiles', 'unit' => 'm²'],
                'slug'         => 'tiles-bedrooms',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Լամինատ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Laminated floor materials', 'unit' => 'm²'],
                'slug'         => 'laminated-floor-materials-bedrooms',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Մանրահատակ', 'unit' => 'մ²'],
                'en'           => ['name' => 'Hardwood floor materials', 'unit' => 'm²'],
                'slug'         => 'hardwood-floor-materials-bedrooms',
                'is_active'    => true,
                'is_countable' => true,
            ],
        ]);

        $improvement = new Improvement();
        App::setLocale('hy');
        $improvement->name          = 'Առանձնատան պարագայում';
        $improvement->description   = 'Առանձնատան պարագայում';
        $improvement->slug          = 'for-house-renovation';
        $improvement->is_active     = true;
        $improvement->icon          = asset('images/improvements/for_house_renovation.svg');
        $improvement->availability  = Improvement::AVAILABILITY_RENOVATION_HOUSE;
        $improvement->is_countable  = false;
        $improvement->include_works = false;
        $improvement->save();
        App::setLocale('en');
        $improvement->name        = 'For a House';
        $improvement->description = 'For a House';
        $improvement->save();
        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Տանիքի վերանորոգում'],
            'en'           => ['name' => 'Roof renovation'],
            'slug'         => 'roof-renovation',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Թիթեղ', 'unit' => 'մ²',],
                'en'           => ['name' => 'Roof tin covering material', 'unit' => 'm²',],
                'slug'         => 'roof-tin-covering-material-for-house',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Կղմինդր', 'unit' => 'լիտր',],
                'en'           => ['name' => 'Roof tiles', 'unit' => 'liter',],
                'slug'         => 'roof-tiles',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Հենասյուներ և այլ նյութեր',],
                'en'           => ['name' => 'Columns and other materials',],
                'slug'         => 'columns-and-other-materials',
                'is_active'    => true,
                'is_countable' => false,
            ],
            [
                'hy'           => ['name' => 'Տոլ, իզոգամ', 'unit' => 'հատ',],
                'en'           => ['name' => 'Waterproof materials', 'unit' => 'pcs',],
                'slug'         => 'waterproof-materials-renovation',
                'is_active'    => true,
                'is_countable' => true,
            ],
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Շինության երեսպատում'],
            'en'           => ['name' => 'External facing of the building'],
            'slug'         => 'external-facing-of-the-building-renovation',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Երեսպատման քար կամ սալիկներ', 'unit' => 'մ²',],
                'en'           => ['name' => 'Facing stone or tiles', 'unit' => 'm²',],
                'slug'         => 'facing-stone-or-tiles',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Ցեմենտ ավազ, շաղախ կամ այլ նյութեր',],
                'en'           => ['name' => 'Cement sand, mixtures or other materials',],
                'slug'         => 'cement-sand-mixtures-or-other-materials-renovation',
                'is_active'    => true,
                'is_countable' => false,
            ],
        ]);

        $child = $improvement->children()->create([
            'hy'           => ['name' => 'Պարսպի եւ դարպասի նորոգում'],
            'en'           => ['name' => 'Renovation of fence and gate'],
            'slug'         => 'renovation-of-fence-and-gate',
            'is_active'    => true,
            'is_countable' => false,
            'include_works' => true,
        ]);
        $child->children()->createMany([
            [
                'hy'           => ['name' => 'Դարպաս', 'unit' => 'հատ'],
                'en'           => ['name' => 'Gate', 'unit' => 'pcs'],
                'slug'         => 'gate-renovation',
                'is_active'    => true,
                'is_countable' => true,
            ],
            [
                'hy'           => ['name' => 'Շինանյութ և այլ նյութեր'],
                'en'           => ['name' => 'Construction and other materials'],
                'slug'         => 'construction-and-other-materials-renovation',
                'is_active'    => true,
                'is_countable' => false,
            ],
        ]);
    }
}
