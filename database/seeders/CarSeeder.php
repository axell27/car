<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            ['make' => 'Toyota', 'model' => 'Corolla', 'year' => 2020, 'license_plate' => 'ABC123', 'rental_price' => 50],
            ['make' => 'Honda', 'model' => 'Civic', 'year' => 2021, 'license_plate' => 'XYZ789', 'rental_price' => 60],
        ]);
    }
}