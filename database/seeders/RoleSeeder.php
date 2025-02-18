<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Log;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'guest',
            'employee',
            'admin'
        ];

        foreach($roles as $role) {
            Role::create([
                'name' => $role
            ]);
            Log::info($role . " is added to the database");
        };
    }
}
