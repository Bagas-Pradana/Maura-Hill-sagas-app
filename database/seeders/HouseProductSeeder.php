<?php

namespace Database\Seeders;

use App\Models\HouseProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HouseProduct::truncate();

        // Data imagesarray dalam bentuk JSON
        $imagesEverest = json_encode([
            [
                'order' => 1,
                'url' => 'images/product/house.png',
                'title' => 'preview',
            ],
            [
                'order' => 2,
                'url' => 'images/product/layout2-everest.png',
                'title' => 'Specification',
            ],
            [
                'order' => 3,
                'url' => 'images/product/layout3-everest.png',
                'title' => 'Specification',
            ],
        ]);
        // Data imagesarray dalam bentuk JSON
        $imagesMonstera = json_encode([
            [
                'order' => 1,
                'url' => 'images/product/monstera.png',
                'title' => 'preview',
            ],
            [
                'order' => 2,
                'url' => 'images/product/layout2-monstera.png',
                'title' => 'Specification',
            ],
        ]);
        // Data imagesarray dalam bentuk JSON
        $imagesAre = json_encode([
            [
                'order' => 1,
                'url' => 'images/product/are.png',
                'title' => 'preview',
            ],
            [
                'order' => 2,
                'url' => 'images/product/layout2-are.png',
                'title' => 'Specification',
            ],
        ]);

        // Data specification_list dalam bentuk array untuk unit spesifikasi
        // $specificationList = json_encode(['satu', 'dua', 'tiga']);
        $specificationList1 = json_encode([
            'dua lantai',
            '6 x 10',
            null
        ]);
        $specificationList2 = json_encode([
            'satu lantai',
            '5 x 12',
            null
        ]);
        $specificationList3 = json_encode([
            'satu lantai',
            '5 x 12',
            null
        ]);

        // Data specification_table dalam bentuk JSON untuk property
        $specificationTable1 = json_encode([
            [
                'label' => 'Luas Tanah',
                'value' => 60,
                'unit' => 'm²',
            ],
            [
                'label' => 'Luas Bangunan',
                'value' => 44,
                'unit' => 'm²',
            ],
            [
                'label' => 'Kamar Tidur',
                'value' => 2,
                'unit' => 'Buah',
            ],
            [
                'label' => 'Kamar Mandi',
                'value' => 2,
                'unit' => 'Buah',
            ],
            [
                'label' => 'Parkir',
                'value' => 1,
                'unit' => 'Mobil',
            ],
        ]);

        $specificationTable2 = json_encode([
            [
                'label' => 'Luas Tanah',
                'value' => 60,
                'unit' => 'm²',
            ],
            [
                'label' => 'Luas Bangunan',
                'value' => 30,
                'unit' => 'm²',
            ],
            [
                'label' => 'Kamar Tidur',
                'value' => 2,
                'unit' => 'Buah',
            ],
            [
                'label' => 'Kamar Mandi',
                'value' => 1,
                'unit' => 'Buah',
            ],
            [
                'label' => 'Parkir',
                'value' => 1,
                'unit' => 'Mobil',
            ],
        ]);

        $specificationTable3 = json_encode([
            [
                'label' => 'Luas Tanah',
                'value' => 60,
                'unit' => 'm²',
            ],
            [
                'label' => 'Luas Bangunan',
                'value' => 25,
                'unit' => 'm²',
            ],
            [
                'label' => 'Kamar Tidur',
                'value' => 1,
                'unit' => 'Buah',
            ],
            [
                'label' => 'Kamar Mandi',
                'value' => 1,
                'unit' => 'Buah',
            ],
            [
                'label' => 'Parkir',
                'value' => 1,
                'unit' => 'Mobil',
            ],
        ]);

        // Data posts
        $posts = [
            [
                'unit' => 'Everest',
                'title' => 'Rumah Mewah Everest',
                'description' => 'Rumah satu lantai ini cocok untuk Anda dan keluarga Anda untuk bertumbuh bersama dan menikmati lingkungan yang nyaman.',
                'specification_list' => $specificationList1,
                'specification_table' => $specificationTable1,
                'images' => $imagesEverest,
            ],
            [
                'unit' => 'Monstera',
                'title' => 'Rumah Minimalis Era',
                'description' => 'Rumah satu lantai yang sangat populer di Grand Harvest. Rumah dengan low cost maintenance yang cocok untuk kamu dengan gaya hidup compact dan minimalist.',
                'specification_list' => $specificationList2,
                'specification_table' => $specificationTable2,
                'images' => $imagesMonstera,
            ],
            [
                'unit' => 'Are',
                'title' => 'Rumah Nyaman Harmony',
                'description' => 'Rumah dengan 1 kamar, cocok untuk millennial yang produktif atau pasangan muda.',
                'specification_list' => $specificationList3,
                'specification_table' => $specificationTable3,
                'images' => $imagesAre,
            ],
        ];

        // Insert data ke tabel house_products karena data array looping
        foreach ($posts as $post) {
            HouseProduct::create($post);
        }
    }
}
