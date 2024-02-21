<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = [
            [
                'name' => 'users_index',
            ],
            [
                'name' => 'users_create',
            ],
            [
                'name' => 'users_edit',
            ],
            [
                'name' => 'users_delete',
            ],
            [
                'name' => 'permissions_index',
            ],
            [
                'name' => 'permissions_create',
            ],
            [
                'name' => 'permissions_edit',
            ],
            [
                'name' => 'permissions_delete',
            ],
            [
                'name' => 'projects_index',
            ],
            [
                'name' => 'projects_create',
            ],
            [
                'name' => 'projects_edit',
            ],
            [
                'name' => 'projects_delete',
            ],
            [
                'name' => 'partners_index',
            ],
            [
                'name' => 'partners_create',
            ],
            [
                'name' => 'partners_edit',
            ],
            [
                'name' => 'partners_delete',
            ],
            [
                'name' => 'fillials_index',
            ],
            [
                'name' => 'fillials_create',
            ],
            [
                'name' => 'fillials_edit',
            ],
            [
                'name' => 'fillials_delete',
            ],
            [
                'name' => 'vacancy_index',
            ],
            [
                'name' => 'vacancy_create',
            ],
            [
                'name' => 'vacancy_edit',
            ],
            [
                'name' => 'vacancy_delete',
            ],
            [
                'name' => 'products_index',
            ],

            [
                'name' => 'products_delete',
            ],
            [
                'name' => 'products_create',
            ],
            [
                'name' => 'products_edit',
            ],

            [
                'name' => 'documents_index',
            ],
            [
                'name' => 'contacts_index',
            ],
            [
                'name' => 'news_index',
            ],
            [
                'name' => 'news_create',
            ],
            [
                'name' => 'news_edit',
            ],
            [
                'name' => 'news_delete',
            ],
            [
                'name' => 'comments_index',
            ],
        ];
        Permission::insert($permission);
    }
}
