<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DokumenPengajuan;
use App\Models\ReviewDokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        // Cek role
        if (Auth::user()->role !== 'kabupaten') {
            abort(403, 'Unauthorized action.');
        }
        
        $dokumen = DokumenPengajuan::with(['pengajuan.user', 'persyaratan', 'review'])
            ->whereHas('pengajuan', function($q) {
                $q->whereIn('status', ['diajukan', 'diproses']);
            })
            ->latest()
            ->get();
            
        return view('admin.review.index', compact('dokumen'));
    }

    public function show($id)
    {
        // Cek role
        if (Auth::user()->role !== 'kabupaten') {
            abort(403, 'Unauthorized action.');
        }
        
        $dokumen = DokumenPengajuan::with(['pengajuan.user', 'persyaratan', 'review.reviewer'])
            ->findOrFail($id);
            
        return view('admin.review.show', compact('dokumen'));
    }

    public function update(Request $request, $id)
    {
        // Cek role
        if (Auth::user()->role !== 'kabupaten') {
            abort(403, 'Unauthorized action.');
        }
        
        $request->validate([
            'status' => 'required|in:disetujui,ditolak',
            'catatan' => 'nullable|string|max:500'
        ]);

        $dokumen = DokumenPengajuan::findOrFail($id);

        ReviewDokumen::updateOrCreate(
            ['dokumen_pengajuan_id' => $id],
            [
                'reviewer_id' => Auth::id(),
                'status' => $request->status,
                'catatan' => $request->catatan
            ]
        );

        // Update status pengajuan jika semua dokumen sudah direview
        $pengajuan = $dokumen->pengajuan;
        $allReviewed = $pengajuan->dokumenPengajuan()->whereHas('review')->count() 
                      === $pengajuan->dokumenPengajuan()->count();
        
        if ($allReviewed) {
            $pengajuan->status = 'diproses';
            $pengajuan->save();
        }

        return redirect()->route('admin.review.index')
            ->with('success', 'Review berhasil disimpan!');
    }
}