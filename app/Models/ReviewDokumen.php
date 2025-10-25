<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewDokumen extends Model
{
    use HasFactory;

    protected $table = 'review_dokumens';
    protected $fillable = [
        'dokumen_pengajuan_id',
        'reviewer_id',
        'status',
        'catatan'
    ];
    
    public function dokumenPengajuan()
    {
        return $this->belongsTo(DokumenPengajuan::class);
    }
    
    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }
}