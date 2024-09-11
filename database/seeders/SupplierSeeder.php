<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 11,
                'supplier_nama' => 'Asus',
                'supplier_alamat' => 'Jakarta',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 22,
                'supplier_nama' => 'Pocari',
                'supplier_alamat' => 'Jepang',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 33,
                'supplier_nama' => 'Indomilk',
                'supplier_alamat' => 'Pasuruan ',
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}