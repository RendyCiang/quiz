<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $writers = [
            ['name' => 'Alice Johnson', 'major' => 'Interactive Multimedia'],
            ['name' => 'Bob Smith', 'major' => 'Software Engineering'],
            ['name' => 'Carol Davis', 'major' => 'Interactive Multimedia'],
            ['name' => 'David Wilson', 'major' => 'Software Engineering'],
            ['name' => 'Eve Brown', 'major' => 'Interactive Multimedia'],
            ['name' => 'Frank Miller', 'major' => 'Software Engineering'],
        ];

        foreach ($writers as $item) {
            Writer::create($item);
        }
    }
}
