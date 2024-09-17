<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $root             = new User();
        $root->first_name = 'Site';
        $root->last_name  = 'Administrator';
        $root->email      = 'root@apricode.am';
        $root->password   = bcrypt('root');
        $root->save();
        $root->assignRole('root');
    }
}
