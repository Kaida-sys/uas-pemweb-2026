<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::insert([
            [
                'name' => 'Manajemen Data Pelanggan',
                'description' => 'Layanan pengelolaan data pelanggan berbasis sistem informasi.',
                'price' => 500000,
                'is_active' => true,
            ],
            [
                'name' => 'Layanan Digitalisasi UMKM',
                'description' => 'Pendampingan transformasi digital untuk UMKM.',
                'price' => 750000,
                'is_active' => true,
            ],
            [
                'name' => 'Konsultasi Sistem Informasi',
                'description' => 'Konsultasi dan analisis kebutuhan sistem.',
                'price' => null,
                'is_active' => true,
            ],
        ]);
    }
}
