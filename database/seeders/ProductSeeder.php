<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'INDOMIE GORENG 3200',
            'code' => '2023001',
            'price' => 3200

        ]);
        Product::create([
            'name' => 'POWER F ALL VARIANTS',
            'code' => '2023002',
            'price' => 1000

        ]);
        Product::create([
            'name' => 'AQUA 600ML',
            'code' => '2023003',
            'price' => 3000

        ]);
        Product::create([
            'name' => 'KINDER JOY',
            'code' => '2023004',
            'price' => 14490

        ]);
        Product::create([
            'name' => 'GARNIER MEN FACIAL FOAM',
            'code' => '2023005',
            'price' => 23500

        ]);
    }
}
