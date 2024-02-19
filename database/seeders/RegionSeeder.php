<?php

namespace Database\Seeders;

use App\Models\Regions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            [
                'name' => 'Andijon'
            ],
            [
                'name' => 'Buxoro'
            ],
            [
                'name' => 'Fargo\'na'
            ],
            [
                'name' => 'Jizzah'
            ],
            [
                'name' => 'Namangan'
            ],
            [
                'name' => 'Navoiy'
            ],
            [
                'name' => 'Qashqadaryo'
            ],
            [
                'name' => 'Samarqand'
            ],
            [
                'name' => 'Sirdaryo'
            ],
            [
                'name' => 'Surxondaryo'
            ],
            [
                'name' => 'Tashkent'
            ],
            [
                'name' => 'Xorazm'
            ],
            [
                'name' => 'Tashkent shahar'
            ]
        ];
        Regions::insert($regions);
    }
}
