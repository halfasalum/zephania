<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Check if admin already exists
        $user = User::where('email', 'root@abicelia.com')->first();

        if (!$user) {
            User::create([
                'name'     => 'Root Admin',
                'email'    => 'root@abicelia.com',
                'password' => Hash::make('password'), // default password
                'role'     => 'admin', // adjust according to your roles column if you have one
                'email_verified_at' => now(),
            ]);
        }

        $this->command->info('Root admin created: root@abicelia.com / password');
        $adminRoleId = DB::table('roles')->where('name', 'admin')->value('id');

        User::updateOrCreate(
            ['email' => 'root@abicelia.com'],
            [
                'name' => 'Root Admin',
                'password' => Hash::make('password'),
                'role_id' => $adminRoleId,
                'email_verified_at' => now(),
            ]
        );
    }
}
