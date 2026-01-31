<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
use Illuminate\Database\Seeder;

class CompanyProfileSeeder extends Seeder
{
    public function run(): void
    {
        CompanyProfile::create([
            'title' => 'Tentang Kami',
            'description' => 'Kami adalah penyedia layanan digital yang berfokus membantu UMKM berkembang melalui teknologi.',
            'points' => [
                'Website profesional dan modern',
                'Sistem informasi sesuai kebutuhan',
                'Dukungan teknis berkelanjutan',
            ],
            'button_text' => 'Pelajari Lebih Lanjut',
            'button_link' => '#pricing',
            'is_active' => true,
        ]);
    }
}