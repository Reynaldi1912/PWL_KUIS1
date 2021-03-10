<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_barang=[
            [
                'nama_barang' => 'Playstation 5',
                'jenis_barang' => 'Elektronik',
                'jumlah' => '10'
            ],
            [
                'nama_barang' => 'Televisi LG',
                'jenis_barang' => 'Elektronik',
                'jumlah' => '5'
            ],
            [
                'nama_barang' => 'Panci',
                'jenis_barang' => 'Alat Masak',
                'jumlah' => '20'
            ],
            [
                'nama_barang' => 'Pantsu',
                'jenis_barang' => 'Pakaian & Style',
                'jumlah' => '26'
            ]
        ];
        DB::table('barang')->insert($data_barang);
    }
}
