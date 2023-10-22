<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    
    public function run()
    {
        DB::table('categories')->delete();

        $categories =
            [
                [
                    'en' => 'News',
                    'ar' => 'أخبار'
                ],
                [
                    'en' => 'Events',
                    'ar' => 'أحداث'
                ],

            ];

        foreach ($categories as $category) {

            Category::create(['name' => $category]);

        } // End of Foreach

    } // End of Run


} // End of Seeder
