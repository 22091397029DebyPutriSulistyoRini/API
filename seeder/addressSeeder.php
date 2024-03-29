<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class addressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            'id' => '01',
            'id_contact' => 1,
            'street' => 'jl.buntu no.1',
            'city' => 'Malang',
            'province' => 'Jawa Timur',
            'country' => 'Indonesia',
            'postal_code' => '10001'
        ]);

    }
}
