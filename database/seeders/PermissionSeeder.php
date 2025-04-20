<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permission::truncate();

        // $permissions = [
        //     'role-show',
        //     'role-create',
        //     'role-edit',
        //     'role-delete',

        //     'permission-show',
        //     'permission-create',
        //     'permission-edit',
        //     'permission-delete',

        //     'user-show',
        //     'user-create',
        //     'user-edit',
        //     'user-delete',

        //     'asset_type-show',
        //     'asset_type-create',
        //     'asset_type-edit',
        //     'asset_type-delete',

        //     'asset_category-show',
        //     'asset_category-create',
        //     'asset_category-edit',
        //     'asset_category-delete',


        // ];

        // foreach ($permissions as $permission) {
        //     Permission::create(['name' => $permission,'guard_name' => 'web']);
        // }


        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo('dashboard-show');

        $salesRole = Role::create(['name' => 'marketing']);
        $salesRole->givePermissionTo('asset_type-show');
        $salesRole->givePermissionTo('asset_type-create');
        $salesRole->givePermissionTo('asset_type-edit');
        $salesRole->givePermissionTo('asset_type-edit');


        $developerRole = Role::create(['name' => 'developer']);
        $adminRole = Role::create(['name' => 'admin']);

        $user = User::factory()->create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('abcdefgh')
        ]);
        $user->assignRole($visitorRole);

        $sales = User::factory()->create([
            'name' => 'sales',
            'email' => 'sales@gmail.com',
            'password' => Hash::make('abcdefgh')
        ]);
        $sales->assignRole($salesRole);

        $devloper = User::factory()->create([
            'name' => 'developer',
            'email' => 'developer@gmail.com',
            'password' => bcrypt('abcdefgh')
        ]);
        $devloper->assignRole($developerRole);

    }
}
