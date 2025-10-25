<?php

namespace Database\Factories;

use App\Models\DokumenPengajuan;
use App\Models\ReviewDokumen;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewDokumenFactory extends Factory
{
    protected $model = ReviewDokumen::class;

    public function definition()
    {
        return [
            'dokumen_pengajuan_id' => DokumenPengajuan::factory(),
            'reviewer_id' => User::where('role', 'kabupaten')->inRandomOrder()->first()->id,
            'status' => $this->faker->randomElement(['disetujui', 'ditolak']),
            'catatan' => $this->faker->sentence
        ];
    }
}