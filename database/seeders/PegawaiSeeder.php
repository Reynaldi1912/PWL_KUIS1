<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_pegawai=[
            [
                'id_pegawai' => '1941720142',
                'nama_pegawai' => 'Reynaldi Ramadhani',
                'jenis_kelamin' => 'Laki-Laki',
                'alamat' => 'jl. Lumajang no 23'
            ],
            [
                'id_pegawai' => '1941720165',
                'nama_pegawai' => 'Mochammad Dimasqi',
                'jenis_kelamin' => 'Laki-Laki',
                'alamat' => 'jl. Pahlawan no 16'
            ]
        ];
        DB::table('pegawai')->insert($data_pegawai);
    }
}
