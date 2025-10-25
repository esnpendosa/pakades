@extends('layouts.app')

@section('title', 'Buat Pengajuan')

@section('content')
<div class="container mx-auto px-4">
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-semibold mb-6">Buat Pengajuan Baru</h2>
        
        <form action="{{ route('pengajuan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Pengajuan</label>
                    <select name="jenis" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
                        <option value="DD">Dana Desa (DD)</option>
                        <option value="ADD">Alokasi Dana Desa (ADD)</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tahun Anggaran</label>
                    <input type="number" name="tahun_anggaran" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" min="2020" max="2030" value="{{ date('Y') }}" required>
                </div>
            </div>
            
            <hr class="my-6">
            
            <h3 class="text-lg font-medium mb-4">Dokumen yang Diperlukan</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($persyaratan as $item)
                <div class="border border-gray-200 rounded-lg p-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        {{ $item->nama }} {{ $item->wajib ? '<span class="text-red-500">*</span>' : '' }}
                    </label>
                    <p class="text-sm text-gray-500 mb-3">{{ $item->deskripsi }}</p>
                    <input type="file" name="dokumen[{{ $item->id }}]" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" 
                           accept="{{ $item->tipe_file == 'pdf' ? '.pdf' : '.pdf,.doc,.docx,.jpg,.jpeg,.png' }}" 
                           {{ $item->wajib ? 'required' : '' }}>
                    <p class="text-xs text-gray-500 mt-1">Maks: {{ $item->ukuran_max }}KB, Format: {{ strtoupper($item->tipe_file) }}</p>
                </div>
                @endforeach
            </div>
            
            <div class="mt-8 flex justify-end space-x-4">
                <a href="{{ route('pengajuan.index') }}" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                    Kembali
                </a>
                <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Simpan Pengajuan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection