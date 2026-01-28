<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ['name' => 'admin', 'description' => 'Full access'],
            ['name' => 'publisher', 'description' => 'Can create/edit content'],
            ['name' => 'previewer', 'description' => 'Can view content only'],
        ];

        foreach ($roles as $role) {
            DB::table('roles')->updateOrInsert(
                ['name' => $role['name']],
                ['description' => $role['description'], 'created_at' => now(), 'updated_at' => now()]
            );
        }

        $this->command->info('Roles seeded');
    }
}
