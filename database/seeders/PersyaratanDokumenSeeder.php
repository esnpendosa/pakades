<?php

namespace Database\Seeders;

use App\Models\PersyaratanDokumen;
use Illuminate\Database\Seeder;

class PersyaratanDokumenSeeder extends Seeder
{
    public function run()
    {
        $persyaratan = [
            [
                'nama' => 'Perdes APBDes',
                'kode' => 'PERDES_APBDES',
                'deskripsi' => 'Peraturan Desa tentang APBDes',
                'wajib' => true,
                'tipe_file' => 'pdf',
                'ukuran_max' => 2048
            ],
            [
                'nama' => 'Surat Pengantar',
                'kode' => 'SURAT_PENGANTAR',
                'deskripsi' => 'Surat pengantar dari desa',
                'wajib' => true,
                'tipe_file' => 'pdf',
                'ukuran_max' => 1024
            ],
            [
                'nama' => 'Laporan Realisasi',
                'kode' => 'LAPORAN_REALISASI',
                'deskripsi' => 'Laporan realisasi penggunaan dana',
                'wajib' => true,
                'tipe_file' => 'pdf',
                'ukuran_max' => 3072
            ],
            [
                'nama' => 'LPP',
                'kode' => 'LPP',
                'deskripsi' => 'Laporan Pertanggungjawaban Penyerapan',
                'wajib' => true,
                'tipe_file' => 'pdf',
                'ukuran_max' => 2048
            ],
            [
                'nama' => 'SPJ',
                'kode' => 'SPJ',
                'deskripsi' => 'Surat Pertanggungjawaban',
                'wajib' => true,
                'tipe_file' => 'pdf',
                'ukuran_max' => 2048
            ]
        ];

        foreach ($persyaratan as $item) {
            PersyaratanDokumen::create($item);
        }
    }
}