<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DemoDataSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
            ->count(3)
            ->superAdmin()
            ->create();

        User::factory()
            ->count(5)
            ->admin()
            ->create();

        User::factory()
            ->count(10)
            ->regularUser()
            ->create();

        User::factory()
            ->count(3)
            ->withPermissions(['view users', 'view roles'])
            ->create();

        User::factory()
            ->count(2)
            ->withPermissions(['view activity log'])
            ->create();

        $this->command->info('✅ Demo data created successfully!');
        $this->command->info('   - 3 Super Admins');
        $this->command->info('   - 5 Admins');
        $this->command->info('   - 10 Regular Users');
        $this->command->info('   - 5 Users with custom permissions');
        $this->command->info('   Total: 23 users created');
    }
}
