<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            ['name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '1234567890'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '0987654321'],
        ]);
    }
}
