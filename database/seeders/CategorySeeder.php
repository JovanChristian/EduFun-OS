<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Data Science',
                'slug' => 'data-science',
                'description' => 'All about Data Science',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Network Security',
                'slug' => 'network-security',
                'description' => 'Network Security topics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}