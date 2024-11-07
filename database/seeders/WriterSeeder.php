<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WriterSeeder extends Seeder
{
    public function run()
    {
        $writers = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'bio' => 'Expert in Data Science',
                'image' => 'writer1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'bio' => 'Network Security Specialist',
                'image' => 'writer2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('writers')->insert($writers);
    }
}