<?php

namespace Database\Seeders;

use App\Models\PaymentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentType::query()->create([
            'name' => [
                'uz' => 'Naqd',
                'ru' => 'Наличные'
            ]
        ]);

        PaymentType::query()->create([
            'name' => [
                'uz' => 'Terminal',
                'ru' => 'Терминал'
            ]
        ]);

        PaymentType::query()->create([
            'name' => [
                'uz' => 'Click',
                'ru' => 'Click'
            ]
        ]);

        PaymentType::query()->create([
            'name' => [
                'uz' => 'Payme',
                'ru' => 'Payme'
            ]
        ]);

        PaymentType::query()->create([
            'name' => [
                'uz' => 'Uzum',
                'ru' => 'Uzum'
            ]
        ]);
    }
}
