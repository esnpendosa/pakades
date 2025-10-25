<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PersyaratanDokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersyaratanController extends Controller
{
    public function index()
    {
        // Cek role
        if (Auth::user()->role !== 'kabupaten') {
            abort(403, 'Unauthorized action.');
        }
        
        $persyaratan = PersyaratanDokumen::latest()->get();
        return view('admin.persyaratan.index', compact('persyaratan'));
    }

    public function create()
    {
        // Cek role
        if (Auth::user()->role !== 'kabupaten') {
            abort(403, 'Unauthorized action.');
        }
        
        return view('admin.persyaratan.create');
    }

    public function store(Request $request)
    {
        // Cek role
        if (Auth::user()->role !== 'kabupaten') {
            abort(403, 'Unauthorized action.');
        }
        
        $request->validate([
            'nama' => 'required|string|max:255',
            'kode' => 'required|string|max:50|unique:persyaratan_dokumen',
            'deskripsi' => 'nullable|string',
            'wajib' => 'required|boolean',
            'tipe_file' => 'required|string|in:pdf,doc,docx,jpg,jpeg,png',
            'ukuran_max' => 'required|integer|min:1'
        ]);

        PersyaratanDokumen::create($request->all());

        return redirect()->route('admin.persyaratan.index')
            ->with('success', 'Persyaratan dokumen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cek role
        if (Auth::user()->role !== 'kabupaten') {
            abort(403, 'Unauthorized action.');
        }
        
        $persyaratan = PersyaratanDokumen::findOrFail($id);
        return view('admin.persyaratan.edit', compact('persyaratan'));
    }

    public function update(Request $request, $id)
    {
        // Cek role
        if (Auth::user()->role !== 'kabupaten') {
            abort(403, 'Unauthorized action.');
        }
        
        $persyaratan = PersyaratanDokumen::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'kode' => 'required|string|max:50|unique:persyaratan_dokumen,kode,'.$id,
            'deskripsi' => 'nullable|string',
            'wajib' => 'required|boolean',
            'tipe_file' => 'required|string|in:pdf,doc,docx,jpg,jpeg,png',
            'ukuran_max' => 'required|integer|min:1'
        ]);

        $persyaratan->update($request->all());

        return redirect()->route('admin.persyaratan.index')
            ->with('success', 'Persyaratan dokumen berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Cek role
        if (Auth::user()->role !== 'kabupaten') {
            abort(403, 'Unauthorized action.');
        }
        
        PersyaratanDokumen::destroy($id);
        return redirect()->route('admin.persyaratan.index')
            ->with('success', 'Persyaratan dokumen berhasil dihapus!');
    }
}