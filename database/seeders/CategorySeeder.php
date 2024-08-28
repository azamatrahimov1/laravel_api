<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::query()->create([
            'name' => [
                'uz' => 'Stol',
                'ru' => 'Стол'
            ],
        ]);

        Category::query()->create([
            'name' => [
                'uz' => 'Divan',
                'ru' => 'Диван'
            ],
        ]);

        Category::query()->create([
            'name' => [
                'uz' => 'Kreslo',
                'ru' => 'Кресло'
            ],
        ]);

        Category::query()->create([
            'name' => [
                'uz' => 'Yotoq',
                'ru' => 'Кровать'
            ],
        ]);

        Category::query()->create([
            'name' => [
                'uz' => 'Stul',
                'ru' => 'Стул'
            ],
        ]);
    }
}
