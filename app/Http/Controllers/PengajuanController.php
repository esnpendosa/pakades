<?php

namespace App\Http\Controllers;

use App\Models\DokumenPengajuan;
use App\Models\Pengajuan;
use App\Models\PersyaratanDokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengajuanController extends Controller
{
    public function index()
    {
        // Cek role
        if (Auth::user()->role !== 'desa' && Auth::user()->role !== 'kecamatan') {
            abort(403, 'Unauthorized action.');
        }
        
        $pengajuan = Pengajuan::with('user')
            ->when(Auth::user()->role === 'desa', function($q) {
                return $q->where('user_id', Auth::id());
            })
            ->latest()
            ->get();
            
        return view('pengajuan.index', compact('pengajuan'));
    }

    public function create()
    {
        // Cek role
        if (Auth::user()->role !== 'desa') {
            abort(403, 'Unauthorized action.');
        }
        
        $persyaratan = PersyaratanDokumen::where('wajib', true)->get();
        return view('pengajuan.create', compact('persyaratan'));
    }

    public function store(Request $request)
    {
        // Cek role
        if (Auth::user()->role !== 'desa') {
            abort(403, 'Unauthorized action.');
        }
        
        $request->validate([
            'jenis' => 'required|in:DD,ADD',
            'tahun_anggaran' => 'required|digits:4',
            'dokumen' => 'required|array',
            'dokumen.*' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg|max:2048'
        ]);

        // Buat pengajuan
        $pengajuan = Pengajuan::create([
            'nomor_pengajuan' => 'PGJ-' . date('YmdHis'),
            'user_id' => Auth::id(),
            'jenis' => $request->jenis,
            'tahun_anggaran' => $request->tahun_anggaran,
            'status' => 'draft'
        ]);

        // Upload dokumen
        foreach ($request->dokumen as $persyaratanId => $file) {
            $path = $file->store('dokumen/' . $pengajuan->id, 'public');
            
            DokumenPengajuan::create([
                'pengajuan_id' => $pengajuan->id,
                'persyaratan_id' => $persyaratanId,
                'path' => $path,
                'nama_asli' => $file->getClientOriginalName()
            ]);
        }

        return redirect()->route('pengajuan.show', $pengajuan->id)
            ->with('success', 'Pengajuan berhasil dibuat!');
    }

    public function show($id)
    {
        // Cek role
        if (Auth::user()->role !== 'desa' && Auth::user()->role !== 'kecamatan') {
            abort(403, 'Unauthorized action.');
        }
        
        $pengajuan = Pengajuan::with(['dokumenPengajuan.persyaratan', 'dokumenPengajuan.review'])
            ->findOrFail($id);
            
        // Cek hak akses
        if (Auth::user()->role === 'desa' && $pengajuan->user_id !== Auth::id()) {
            abort(403);
        }

        return view('pengajuan.show', compact('pengajuan'));
    }

    public function submit($id)
    {
        // Cek role
        if (Auth::user()->role !== 'desa') {
            abort(403, 'Unauthorized action.');
        }
        
        $pengajuan = Pengajuan::findOrFail($id);
        
        // Cek hak akses
        if (Auth::user()->role !== 'desa' || $pengajuan->user_id !== Auth::id()) {
            abort(403);
        }

        // Cek apakah semua dokumen wajib sudah diupload
        $persyaratanWajib = PersyaratanDokumen::where('wajib', true)->pluck('id');
        $dokumenTerupload = $pengajuan->dokumenPengajuan()
            ->whereIn('persyaratan_id', $persyaratanWajib)
            ->count();

        if ($dokumenTerupload < $persyaratanWajib->count()) {
            return back()->with('error', 'Harap upload semua dokumen wajib sebelum mengajukan.');
        }

        $pengajuan->status = 'diajukan';
        $pengajuan->save();

        return redirect()->route('pengajuan.index')
            ->with('success', 'Pengajuan berhasil diajukan!');
    }
}