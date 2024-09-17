<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleAndPermissionSeeder::class,
            UserSeeder::class,
            SettingsSeeder::class,
            MaterialSeeder::class,
            ElectronicParamSeeder::class,
            RegionSeeder::class,
            PostSeeder::class,
            PartnerSeeder::class,
            CommunitySeeder::class,
            EeImprovementSeeder::class,
            ImprovementSeeder::class,
            ResidentialComplexSeeder::class, //temporary
        ]);
    }
}
