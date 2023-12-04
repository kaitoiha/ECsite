<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'アガベ',
                'sort_order' => 1,
            ],
            [
                'name' => '実生株',
                'sort_order' => 2,
            ],
            [
                'name' => '種',
                'sort_order' => 3,
            ],
            [
                'name' => '土',
                'sort_order' => 4,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'オテロイ',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => 'ホリダ',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => 'イシスメンシス',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => 'オテロイ',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => 'ホリダ',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],
            [
                'name' => 'イシスメンシス',
                'sort_order' => 6,
                'primary_category_id' => 2
            ],
            [
                'name' => 'オテロイ',
                'sort_order' => 7,
                'primary_category_id' => 3
            ],
            [
                'name' => 'ホリダ',
                'sort_order' => 8,
                'primary_category_id' => 3
            ],
            [
                'name' => 'イシスメンシス',
                'sort_order' => 9,
                'primary_category_id' => 3
            ],
            [
                'name' => '鹿沼土',
                'sort_order' => 10,
                'primary_category_id' => 4
            ],
        ]);
    }
}
