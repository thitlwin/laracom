<?php

use App\Shop\Brands\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        factory(Brand::class)->create([
            'name' => 'Ready'
        ]);
        factory(Brand::class)->create([
            'name' => 'Bravo'
        ]);
    }
}