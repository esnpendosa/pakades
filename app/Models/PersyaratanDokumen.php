<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersyaratanDokumen extends Model
{
    use HasFactory;

    protected $table = 'persyaratan_dokumen';
    protected $fillable = [
        'nama',
        'kode',
        'deskripsi',
        'wajib',
        'tipe_file',
        'ukuran_max'
    ];
    
    public function dokumenPengajuan()
    {
        return $this->hasMany(DokumenPengajuan::class);
    }
}