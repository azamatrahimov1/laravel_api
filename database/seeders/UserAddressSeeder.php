<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->find(2)->addresses()->create([
            'latitude' => '41.310014',
            'longitude' => '69.280742',
            'region' => 'Tashkent',
            'district' => 'Mirobod District',
            'street' => 'Mingurik Mahallah',
            'home' => '268',
        ]);

        User::query()->find(2)->addresses()->create([
            'latitude' => '41.310014',
            'longitude' => '69.280742',
            'region' => 'Tashkent',
            'district' => 'Mirzo Ulug\'bek District',
            'street' => 'Navbahor Mahallah',
            'home' => '123',
        ]);
    }
}
