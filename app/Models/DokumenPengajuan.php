<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenPengajuan extends Model
{
    use HasFactory;

    protected $table = 'dokumen_pengajuans';
    protected $fillable = [
        'pengajuan_id',
        'persyaratan_id',
        'path',
        'nama_asli'
    ];
    
    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class);
    }
    
    public function persyaratan()
    {
        return $this->belongsTo(PersyaratanDokumen::class);
    }
    
    public function review()
    {
        return $this->hasOne(ReviewDokumen::class);
    }
}