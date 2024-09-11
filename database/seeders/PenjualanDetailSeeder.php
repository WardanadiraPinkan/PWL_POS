<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Penjualan ID 1
            [
                'detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => '450000',
                'jumlah' => '2',
            ],
            [
                'detail_id' => 2,
                'penjualan_id' => 1,
                'barang_id' => 2,
                'harga' => '2500000',
                'jumlah' => '3',
            ],
            [
                'detail_id' => 3,
                'penjualan_id' => 1,
                'barang_id' => 3,
                'harga' => '1050000',
                'jumlah' => '2',
            ],

            // Penjualan ID 2
            [
                'detail_id' => 4,
                'penjualan_id' => 2,
                'barang_id' => 4,
                'harga' => '52000000',
                'jumlah' => '4',
            ],
            [
                'detail_id' => 5,
                'penjualan_id' => 2,
                'barang_id' => 5,
                'harga' => '8500000',
                'jumlah' => '4',
            ],
            [
                'detail_id' => 6,
                'penjualan_id' => 2,
                'barang_id' => 6,
                'harga' => '198000000',
                'jumlah' => '3',
            ],

            // Penjualan ID 3
            [
                'detail_id' => 7,
                'penjualan_id' => 3,
                'barang_id' => 7,
                'harga' => '3000',
                'jumlah' => '12',
            ],
            [
                'detail_id' => 8,
                'penjualan_id' => 3,
                'barang_id' => 8,
                'harga' => '4000',
                'jumlah' => '12',
            ],
            [
                'detail_id' => 9,
                'penjualan_id' => 3,
                'barang_id' => 9,
                'harga' => '5000',
                'jumlah' => '12',
            ],

            // Penjualan ID 4
            [
                'detail_id' => 10,
                'penjualan_id' => 4,
                'barang_id' => 10,
                'harga' => '5400',
                'jumlah' => '6',
            ],
            [
                'detail_id' => 11,
                'penjualan_id' => 4,
                'barang_id' => 11,
                'harga' => '5800',
                'jumlah' => '6',
            ],
            [
                'detail_id' => 12,
                'penjualan_id' => 4,
                'barang_id' => 12,
                'harga' => '6500',
                'jumlah' => '6',
            ],

            // Penjualan ID 5
            [
                'detail_id' => 13,
                'penjualan_id' => 5,
                'barang_id' => 13,
                'harga' => '310000',
                'jumlah' => '2',
            ],
            [
                'detail_id' => 14,
                'penjualan_id' => 5,
                'barang_id' => 14,
                'harga' => '75000',
                'jumlah' => '3',
            ],
            [
                'detail_id' => 15,
                'penjualan_id' => 5,
                'barang_id' => 15,
                'harga' => '74000',
                'jumlah' => '2',
            ],

            // Penjualan ID 6
            [
                'detail_id' => 16,
                'penjualan_id' => 6,
                'barang_id' => 1,
                'harga' => '630000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => 17,
                'penjualan_id' => 6,
                'barang_id' => 2,
                'harga' => '410000',
                'jumlah' => '2',
            ],
            [
                'detail_id' => 18,
                'penjualan_id' => 6,
                'barang_id' => 3,
                'harga' => '2200000',
                'jumlah' => '1',
            ],

            // Penjualan ID 7
            [
                'detail_id' => 19,
                'penjualan_id' => 7,
                'barang_id' => 4,
                'harga' => '61000000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => 20,
                'penjualan_id' => 7,
                'barang_id' => 5,
                'harga' => '87000000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => 21,
                'penjualan_id' => 7,
                'barang_id' => 6,
                'harga' => '410000000',
                'jumlah' => '1',
            ],

            // Penjualan ID 8
            [
                'detail_id' => 22,
                'penjualan_id' => 8,
                'barang_id' => 7,
                'harga' => '4700',
                'jumlah' => '17',
            ],
            [
                'detail_id' => 23,
                'penjualan_id' => 8,
                'barang_id' => 8,
                'harga' => '4600',
                'jumlah' => '16',
            ],
            [
                'detail_id' => 24,
                'penjualan_id' => 8,
                'barang_id' => 9,
                'harga' => '4100',
                'jumlah' => '14',
            ],

            // Penjualan ID 9
            [
                'detail_id' => 25,
                'penjualan_id' => 9,
                'barang_id' => 10,
                'harga' => '6700',
                'jumlah' => '7',
            ],
            [
                'detail_id' => 26,
                'penjualan_id' => 9,
                'barang_id' => 11,
                'harga' => '6900',
                'jumlah' => '7',
            ],
            [
                'detail_id' => 27,
                'penjualan_id' => 9,
                'barang_id' => 12,
                'harga' => '7800',
                'jumlah' => '6',
            ],

            // Penjualan ID 10
            [
                'detail_id' => 28,
                'penjualan_id' => 10,
                'barang_id' => 13,
                'harga' => '425000',
                'jumlah' => '2',
            ],
            [
                'detail_id' => 29,
                'penjualan_id' => 10,
                'barang_id' => 14,
                'harga' => '86000',
                'jumlah' => '3',
            ],
            [
                'detail_id' => 30,
                'penjualan_id' => 10,
                'barang_id' => 15,
                'harga' => '83000',
                'jumlah' => '3',
            ],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}