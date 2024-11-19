<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stocks')->insert([
            [
                'name' => 'Produk A',
                'description' => 'Deskripsi produk A',
                'price' => 10000.00,
                'quantity' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Produk B',
                'description' => 'Deskripsi produk B',
                'price' => 20000.00,
                'quantity' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
