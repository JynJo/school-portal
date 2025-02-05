<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.n 
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $admin_role = Role::create(['name' => 'admin']);
        $student_role = Role::create(['name' => 'student']);
        $teacher_role = Role::create(['name' => 'teacher']);

        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        $admin->syncRoles($admin_role);

    }
}
