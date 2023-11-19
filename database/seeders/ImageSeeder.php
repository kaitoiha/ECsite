<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            [
                'owner_id' => 1,
                'filename' => 'sample1.jpg',
                'title'    => 'ダミー1'
            ],
            [
                'owner_id' => 2,
                'filename' => 'sample2.jpg',
                'title'    => 'ダミー2'
            ],
            [
                'owner_id' => 3,
                'filename' => 'sample3.jpg',
                'title'    => 'ダミー3'
            ],
            [
                'owner_id' => 4,
                'filename' => 'sample4.jpg',
                'title'    => 'ダミー4'
            ],
            [
                'owner_id' => 5,
                'filename' => 'sample5.jpg',
                'title'    => 'ダミー5'
            ],
            [
                'owner_id' => 6,
                'filename' => 'sample6.jpg',
                'title'    => 'ダミー6'
            ],
        ]);
    }
}
