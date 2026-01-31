<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    public function run(): void
    {
        Hero::create([
            'title' => 'Layanan Digital UMKM',
            'subtitle' => 'Solusi Website & Sistem',
            'description' => 'Kami membantu UMKM bertransformasi secara digital melalui website, sistem informasi, dan layanan IT terintegrasi.',
            'phone_number' => '081234567890',
            'cta_text' => 'Ajukan Layanan',
            'cta_link' => '#contact',
            'is_active' => true,
        ]);
    }
}