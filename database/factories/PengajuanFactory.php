<?php

namespace Database\Factories;

use App\Models\Pengajuan;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PengajuanFactory extends Factory
{
    protected $model = Pengajuan::class;

    public function definition()
    {
        return [
            'nomor_pengajuan' => 'PGJ-' . date('YmdHis') . rand(1000, 9999),
            'user_id' => User::where('role', 'desa')->inRandomOrder()->first()->id,
            'jenis' => $this->faker->randomElement(['DD', 'ADD']),
            'tahun_anggaran' => $this->faker->numberBetween(2020, 2025),
            'status' => $this->faker->randomElement(['draft', 'diajukan', 'diproses', 'disetujui', 'ditolak'])
        ];
    }
}