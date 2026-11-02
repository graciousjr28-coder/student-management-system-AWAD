<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // clear Spatie's cache so new permissions are picked up
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            // students
            'view students',
            'create students',
            'edit students',
            'delete students',
            // courses
            'view courses',
            'create courses',
            'edit courses',
            'delete courses',
            // registrations (admin)
            'view all registrations',
            'manage registrations',
            // user access (admin)
            'manage users',
            // lecturer
            'view assigned courses',
            // student
            'view available courses',
            'register for courses',
            'view own registrations',
        ];

        foreach ($permissions as $name) {
            Permission::firstOrCreate(['name' => $name, 'guard_name' => 'web']);
        }

        // Administrator: everything except the lecturer and student portal permissions
        $admin = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $admin->syncPermissions(
            Permission::whereNotIn('name', [
                'view assigned courses',
                'view available courses',
                'register for courses',
                'view own registrations',
            ])->get()
        );

        // Lecturer: only the courses assigned to them and their registered students
        $lecturer = Role::firstOrCreate(['name' => 'lecturer', 'guard_name' => 'web']);
        $lecturer->syncPermissions(['view assigned courses']);

        // Student: available courses and their own registrations
        $student = Role::firstOrCreate(['name' => 'student', 'guard_name' => 'web']);
        $student->syncPermissions([
            'view available courses',
            'register for courses',
            'view own registrations',
        ]);
    }
}

