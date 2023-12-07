<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shops')->insert([
            [
                'owner_id'    => 1,
                'name'        => 'nativo plant',
                'information' => 'ここにお店の情報が入ります。ここにお店の情報が入ります。ここにお店の情報が入ります。',
                'filename' => 'owner1.jpg',
                'is_selling'  => true,
            ],
            [
                'owner_id'    => 2,
                'name'        => 'アガベ格安',
                'information' => 'ここにお店の情報が入ります。ここにお店の情報が入ります。ここにお店の情報が入ります。',
                'filename'    => 'owner2.PNG',
                'is_selling'  => true,
            ],
            [
                'owner_id'    => 3,
                'name'        => '珍植物屋さん',
                'information' => 'ここにお店の情報が入ります。ここにお店の情報が入ります。ここにお店の情報が入ります。',
                'filename'    => 'sample3.jpg',
                'is_selling'  => true,
            ],
            [
                'owner_id'    => 4,
                'name'        => 'お店４',
                'information' => 'ここにお店の情報が入ります。ここにお店の情報が入ります。ここにお店の情報が入ります。',
                'filename'    => 'owner4.PNG',
                'is_selling'  => true,
            ],
            [
                'owner_id'    => 5,
                'name'        => 'お店5',
                'information' => 'ここにお店の情報が入ります。ここにお店の情報が入ります。ここにお店の情報が入ります。',
                'filename'    => 'owner5.PNG',
                'is_selling'  => true,
            ],
        ]);
    }
}
