<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuans';
    protected $fillable = [
        'nomor_pengajuan',
        'user_id',
        'jenis',
        'tahun_anggaran',
        'status'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function dokumenPengajuan()
    {
        return $this->hasMany(DokumenPengajuan::class);
    }
}