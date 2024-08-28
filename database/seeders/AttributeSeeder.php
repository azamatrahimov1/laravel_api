<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attribute::query()->create(['name' => 'color']);
        Attribute::query()->create(['name' => 'material']);
        Attribute::query()->create(['name' => 'size']);
    }
}
