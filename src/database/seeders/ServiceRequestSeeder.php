<?php

namespace Database\Seeders;

use App\Models\ServiceRequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceRequestSeeder extends Seeder
{
    public function run(): void
    {
        ServiceRequest::firstOrCreate([
            'name' => 'Budi',
            'email' => 'budi@gmail.com',
            'phone' => '08123456789',
            'service' => 'Website Company Profile',
            'message' => 'Saya ingin website untuk UMKM',
            'api_token' => 'abcde123',
        ]);
    }
}
