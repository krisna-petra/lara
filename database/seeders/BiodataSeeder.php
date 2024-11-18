<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Biodata;
use Illuminate\Support\Facades\DB;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {   
        // data 1 record
        $data = new Biodata;
        $data->nama = 'Biodata 1';
        $data->tahun_masuk = 2020;
        $data->tgl_lahir = '2020-01-01';
        $data->alamat = 'Surabaya';
        $data->is_aktif = 1;
        $data->notelp = '0123456789';
        $data->save();

        DB::table('biodata')->insert([
            [
                'nama' => 'data 1',
                'tahun_masuk' => 2020,
                'tgl_lahir' => '2020-02-02',
                'alamat' => 'Surabaya',
                'is_aktif' => 1,
                'notelp' => '123456789',
            ],
            [
                'nama' => 'data 2',
                'tahun_masuk' => 2021,
                'tgl_lahir' => '2021-02-02',
                'alamat' => 'Surabaya',
                'is_aktif' => 1,
                'notelp' => '987654321',
            ],
        ]);
    }
}
