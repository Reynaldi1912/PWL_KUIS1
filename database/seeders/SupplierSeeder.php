<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_supplier=[
        [
            'id_supplier' => '7828126',
            'nama_supplier' => 'Nabila Senja',
            'asal_instansi' => 'PT Mediatok'
        ],
        [
            'id_supplier' => '19210252',
            'nama_supplier' => 'Nabila Amelia',
            'asal_instansi' => 'PT Tafferware'
        ]
        ];
        DB::table('supplier')->insert($data_supplier);
    }
}
