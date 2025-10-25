@extends('layouts.app')

@section('title', 'Edit Persyaratan Dokumen')

@section('content')
<div class="container mx-auto px-4">
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-semibold mb-6">Edit Persyaratan Dokumen</h2>
        
        <form action="{{ route('admin.persyaratan.update', $persyaratan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Dokumen</label>
                    <input type="text" name="nama" value="{{ $persyaratan->nama }}" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kode</label>
                    <input type="text" name="kode" value="{{ $persyaratan->kode }}" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                    <textarea name="deskripsi" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" rows="3">{{ $persyaratan->deskripsi }}</textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                    <select name="wajib" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        <option value="1" {{ $persyaratan->wajib ? 'selected' : '' }}>Wajib</option>
                        <option value="0" {{ !$persyaratan->wajib ? 'selected' : '' }}>Opsional</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tipe File</label>
                    <select name="tipe_file" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        <option value="pdf" {{ $persyaratan->tipe_file === 'pdf' ? 'selected' : '' }}>PDF</option>
                        <option value="doc" {{ $persyaratan->tipe_file === 'doc' ? 'selected' : '' }}>DOC</option>
                        <option value="docx" {{ $persyaratan->tipe_file === 'docx' ? 'selected' : '' }}>DOCX</option>
                        <option value="jpg" {{ $persyaratan->tipe_file === 'jpg' ? 'selected' : '' }}>JPG</option>
                        <option value="jpeg" {{ $persyaratan->tipe_file === 'jpeg' ? 'selected' : '' }}>JPEG</option>
                        <option value="png" {{ $persyaratan->tipe_file === 'png' ? 'selected' : '' }}>PNG</option>
                    </select>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Ukuran Maksimum (KB)</label>
                    <input type="number" name="ukuran_max" value="{{ $persyaratan->ukuran_max }}" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" min="1" required>
                </div>
            </div>
            
            <div class="mt-8 flex justify-end space-x-4">
                <a href="{{ route('admin.persyaratan.index') }}" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                    Kembali
                </a>
                <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection