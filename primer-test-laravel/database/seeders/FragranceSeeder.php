<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FragranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fragrances')->insert([
            'name' => 'Jimmy Choo',
            'ranking' => '4',
            'brand_name' => 'Eau de Parfum',
            'is_original' => 'yes',
            'status' => 'no',
            'price' => '1200',
            'discount' => '0',
            'saleend' => '01-01-2022',
            'img_url' => 'https://cdn.mos.cms.futurecdn.net/6pz4VL6idQnpXYUhn8ngEK-768-80.jpg.webp',
        ]);
    }
}
