<?php

use App\Shop\Products\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        factory(Product::class)->create([
	        'sku' => 'sku001',
	        'name' => $product,
	        'slug' => 'sku001',
	        // 'description' => $this->faker->paragraph,
	        // 'cover' => $file->store('products', ['disk' => 'public']),
	        'quantity' => 10,
	        'price' => 5.00,
	        'status' => 1,
	        'weight' => 5,
	        'mass_unit' => config('shop.weight', 'gms')
        ]);        
    }
}