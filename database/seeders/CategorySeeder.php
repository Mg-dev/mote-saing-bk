<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $categories =
        //     ["name"=>"candy"]
        // ;
        // DB::table('categories')->insert($categories);
        // Category::factory()
        // ->count(10)
        // ->hasProducts(100)
        // ->create();
        Category::factory()
        ->hasProducts(100)
        ->count(10)
        ->create();
    }
}
