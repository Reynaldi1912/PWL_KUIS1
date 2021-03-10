<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_pelanggan=[
            [
                'id_pelanggan' => '194201921',
                'nama_pelanggan' => 'Dama Alaba',
                'alamat' => 'jl.karangsari kampung inggris , kediri'
            ],
            [
                'id_pelanggan' => '194201923',
                'nama_pelanggan' => 'Genadi Dharma',
                'alamat' => 'jl.Tatean Denpasar , Bali'
            ],
            [
                'id_pelanggan' => '194201111',
                'nama_pelanggan' => 'Andika Hilmi',
                'alamat' => 'jl.merpati putih no 32 , Mojokerto'
            ]
        ];
        DB::table('pelanggan')->insert($data_pelanggan);
    }
}
