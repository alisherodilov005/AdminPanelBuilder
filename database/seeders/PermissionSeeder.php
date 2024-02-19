<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
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
                'name'=>'users_index',
            ],
            [
                'name'=>'permissions_index'
            ],
            [
                'name'=>'projects_index'
            ],
            [
                'name'=>'partners_index'
            ],
            [
                'name'=>'fillials_index'
            ],
            [
                'name'=>'vacancy_index'
            ],
            [
                'name'=>'products_index'
            ],
            [
                'name'=>'documents_index'
            ],
            [
                'name'=>'contacts_index'
            ],
            [
                'name'=>'news_index'
            ],
            [
                'name'=>'comments_index'
            ]
        ];
        Permission::insert($permission);
    }
}
