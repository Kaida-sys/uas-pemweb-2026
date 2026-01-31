<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    public function run(): void
    {
        Feature::insert([
            [
                'icon' => 'lni lni-code-alt',
                'title' => 'Web Development',
                'description' => 'Pembuatan website profesional sesuai kebutuhan bisnis.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'icon' => 'lni lni-vector',
                'title' => 'UI/UX Design',
                'description' => 'Desain antarmuka modern dan mudah digunakan.',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'icon' => 'lni lni-lock',
                'title' => 'Sistem Aman',
                'description' => 'Keamanan data dan sistem menjadi prioritas utama.',
                'order' => 3,
                'is_active' => true,
            ],
        ]);
    }
}
