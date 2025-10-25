<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DokumenPengajuan;
use App\Models\Pengajuan;
use App\Models\ReviewDokumen;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Buat 20 pengajuan dummy
        Pengajuan::factory(20)->create()->each(function ($pengajuan) {
            // Untuk setiap pengajuan, buat dokumen pengajuan
            DokumenPengajuan::factory(rand(3, 5))->create([
                'pengajuan_id' => $pengajuan->id
            ])->each(function ($dokumen) {
                // Untuk setiap dokumen, buat review
                ReviewDokumen::factory()->create([
                    'dokumen_pengajuan_id' => $dokumen->id
                ]);
            });
        });
    }
}
