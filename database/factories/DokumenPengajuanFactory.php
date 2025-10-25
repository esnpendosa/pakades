<?php

namespace Database\Factories;

use App\Models\DokumenPengajuan;
use App\Models\Pengajuan;
use App\Models\PersyaratanDokumen;
use Illuminate\Database\Eloquent\Factories\Factory;

class DokumenPengajuanFactory extends Factory
{
    protected $model = DokumenPengajuan::class;

    public function definition()
    {
        return [
            'pengajuan_id' => Pengajuan::factory(),
            'persyaratan_id' => PersyaratanDokumen::inRandomOrder()->first()->id,
            'path' => 'dokumen/dummy.pdf',
            'nama_asli' => $this->faker->word . '.pdf'
        ];
    }
}