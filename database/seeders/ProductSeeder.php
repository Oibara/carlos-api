<?php

namespace Database\Seeders;

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
        DB::table('products')->insert([
            'name' => "Iphone 10",
            'description'=>"Muy buen movil",
            'amount' =>"847"
        ]);
        DB::table('products')->insert([
            'name' => "Iphone 11",
            'description'=>" buen movil",
            'amount' =>"347"
        ]);
    }
}
