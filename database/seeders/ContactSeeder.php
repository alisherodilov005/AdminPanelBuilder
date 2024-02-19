<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'name' => "Abdulloh Temirov",
                'description' => 'Assalomu alaykum menda bir muammo bor Super CaD3 dorisini sotib olgan edim lekin hali yetib kelmadi',
                'number' => '+998 94 222 22 22',
                'status' => 0,
            ],
            [
                'name' => "Akmal Masurov",
                'description' => 'Assalomu alaykum menda bir muammo bor Super CaD3 dorisini sotib olgan edim lekin hali yetib kelmadi',
                'number' => '+998 94 123 22 11',
                'status' => 0,
            ],
            [
                'name' => "Jasurbek Salohiddinov",
                'description' => 'Assalomu alaykum menda bir muammo bor Super CaD3 dorisini sotib olgan edim lekin hali yetib kelmadi',
                'number' => '+998 94 123 22 11',
                'status' => 1,
            ]
        ];
        Contact::insert($contacts);
    }
}
