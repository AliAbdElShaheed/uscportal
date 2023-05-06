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
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();


        $product = Product::create([
            'category_id' => '1',

            'name' => [
                'en' => 'Product 1',
                'ar' => 'المنتج الأول'
            ],

            'description' => [
                'en' => 'Desc 1',
                'ar' => 'الوصف الأول'
            ],
            'image' => 'default.png',
            'purchase_price' => '100',
            'sale_price' => '120',
            'stock' => '35',

        ]);

        $product = Product::create([
            'category_id' => '2',

            'name' => [
                'en' => 'Product 2',
                'ar' => 'المنتج الثانى'
            ],

            'description' => [
                'en' => 'Desc 2',
                'ar' => 'الوصف الثانى'
            ],
            'image' => 'default.png',
            'purchase_price' => '100',
            'sale_price' => '120',
            'stock' => '35',

        ]);

        $product = Product::create([
            'category_id' => '3',

            'name' => [
                'en' => 'Product 3',
                'ar' => 'المنتج الثالث'
            ],

            'description' => [
                'en' => 'Desc 3',
                'ar' => 'الوصف الثالث'
            ],
            'image' => 'default.png',
            'purchase_price' => '100',
            'sale_price' => '120',
            'stock' => '35',

        ]);

        $product = Product::create([
            'category_id' => '4',

            'name' => [
                'en' => 'Product 4',
                'ar' => 'المنتج الرابع'
            ],

            'description' => [
                'en' => 'Desc 4',
                'ar' => 'الوصف الرابع'
            ],
            'image' => 'default.png',
            'purchase_price' => '100',
            'sale_price' => '120',
            'stock' => '35',

        ]);

        $product = Product::create([
            'category_id' => '5',

            'name' => [
                'en' => 'Product 5',
                'ar' => 'المنتج الخامس'
            ],

            'description' => [
                'en' => 'Desc 5',
                'ar' => 'الوصف الخامس'
            ],
            'image' => 'default.png',
            'purchase_price' => '100',
            'sale_price' => '120',
            'stock' => '35',

        ]);


        $product = Product::create([
            'category_id' => '6',

            'name' => [
                'en' => 'Product 6',
                'ar' => 'المنتج السادس'
            ],

            'description' => [
                'en' => 'Desc 6',
                'ar' => 'الوصف السادس'
            ],
            'image' => 'default.png',
            'purchase_price' => '100',
            'sale_price' => '120',
            'stock' => '35',

        ]);


        $product = Product::create([
            'category_id' => '1',

            'name' => [
                'en' => 'Product 7',
                'ar' => 'المنتج السابع'
            ],

            'description' => [
                'en' => 'Desc 7',
                'ar' => 'الوصف السابع'
            ],
            'image' => 'default.png',
            'purchase_price' => '100',
            'sale_price' => '120',
            'stock' => '35',

        ]);

    } // end of Run


} // End of Seeder
