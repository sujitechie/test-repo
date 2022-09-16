<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'person_create',
            ],
            [
                'id'    => 19,
                'title' => 'person_edit',
            ],
            [
                'id'    => 20,
                'title' => 'person_show',
            ],
            [
                'id'    => 21,
                'title' => 'person_delete',
            ],
            [
                'id'    => 22,
                'title' => 'person_access',
            ],
            [
                'id'    => 23,
                'title' => 'product_create',
            ],
            [
                'id'    => 24,
                'title' => 'product_edit',
            ],
            [
                'id'    => 25,
                'title' => 'product_show',
            ],
            [
                'id'    => 26,
                'title' => 'product_delete',
            ],
            [
                'id'    => 27,
                'title' => 'product_access',
            ],
            [
                'id'    => 28,
                'title' => 'order_create',
            ],
            [
                'id'    => 29,
                'title' => 'order_edit',
            ],
            [
                'id'    => 30,
                'title' => 'order_show',
            ],
            [
                'id'    => 31,
                'title' => 'order_delete',
            ],
            [
                'id'    => 32,
                'title' => 'order_access',
            ],
            [
                'id'    => 33,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 34,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 35,
                'title' => 'team_create',
            ],
            [
                'id'    => 36,
                'title' => 'team_edit',
            ],
            [
                'id'    => 37,
                'title' => 'team_show',
            ],
            [
                'id'    => 38,
                'title' => 'team_delete',
            ],
            [
                'id'    => 39,
                'title' => 'team_access',
            ],
            [
                'id'    => 40,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 41,
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => 42,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 43,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 44,
                'title' => 'user_alert_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
