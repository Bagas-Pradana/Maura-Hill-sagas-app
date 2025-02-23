<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate tabel settings
        Setting::truncate();

        // List data
        $data = [
            [
                'key' => 'app-name',
                'description' => 'Nama aplikasi',
                'value' => json_encode('My Laravel App'), // Ubah value ke JSON string
                'is_array' => false,
            ],
            [
                'key' => 'whatsapp-contact',
                'description' => 'Nomor kontak WhatsApp',
                'value' => json_encode('+6281234567890'), // Ubah value ke JSON string
                'is_array' => false,
            ],
            [
                'key' => 'email-support',
                'description' => 'Email dukungan pelanggan',
                'value' => json_encode('support@example.com'),
                'is_array' => false,
            ],
            [
                'key' => 'social-media-links',
                'description' => 'Daftar link media sosial',
                'value' => json_encode([
                    'facebook' => 'https://facebook.com',
                    'twitter' => 'https://twitter.com',
                    'instagram' => 'https://instagram.com',
                ]),
                'is_array' => true,
            ]
        ];

    // Insert data ke table menggunakan create
    foreach ($data as $item) {
        Setting::create($item);
    }
    }
}