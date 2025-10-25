@extends('layouts.app')

@section('title', 'Review Dokumen')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex flex-wrap">
        <div class="w-full lg:w-8/12 pr-0 lg:pr-6">
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <h2 class="text-2xl font-semibold mb-6">Review Dokumen</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h3 class="text-lg font-medium mb-4">Informasi Pengajuan</h3>
                        <table class="min-w-full divide-y divide-gray-200">
                            <tr>
                                <td class="py-2 text-sm font-medium text-gray-500">Nomor Pengajuan</td>
                                <td class="py-2 text-sm text-gray-900">{{ $dokumen->pengajuan->nomor_pengajuan }}</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-sm font-medium text-gray-500">Jenis</td>
                                <td class="py-2 text-sm text-gray-900">{{ $dokumen->pengajuan->jenis }}</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-sm font-medium text-gray-500">Tahun Anggaran</td>
                                <td class="py-2 text-sm text-gray-900">{{ $dokumen->pengajuan->tahun_anggaran }}</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-sm font-medium text-gray-500">Desa</td>
                                <td class="py-2 text-sm text-gray-900">{{ $dokumen->pengajuan->user->nama_desa }}</td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium mb-4">Informasi Dokumen</h3>
                        <table class="min-w-full divide-y divide-gray-200">
                            <tr>
                                <td class="py-2 text-sm font-medium text-gray-500">Nama Dokumen</td>
                                <td class="py-2 text-sm text-gray-900">{{ $dokumen->persyaratan->nama }}</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-sm font-medium text-gray-500">Status</td>
                                <td class="py-2">
                                    @if($dokumen->review)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                            {{ $dokumen->review->status === 'disetujui' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                            {{ ucfirst($dokumen->review->status) }}
                                        </span>
                                    @else
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Belum Direview
                                        </span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 text-sm font-medium text-gray-500">File</td>
                                <td class="py-2">
                                    <a href="{{ asset('storage/' . $dokumen->path) }}" target="_blank" class="text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-download mr-1"></i> Download
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <hr class="my-6">
                
                <h3 class="text-lg font-medium mb-4">Review Dokumen</h3>
                <form action="{{ route('admin.review.update', $dokumen->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status Review</label>
                        <select name="status" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
                            <option value="">-- Pilih Status --</option>
                            <option value="disetujui" {{ $dokumen->review && $dokumen->review->status === 'disetujui' ? 'selected' : '' }}>
                                Disetujui
                            </option>
                            <option value="ditolak" {{ $dokumen->review && $dokumen->review->status === 'ditolak' ? 'selected' : '' }}>
                                Ditolak
                            </option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Catatan Review</label>
                        <textarea name="catatan" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" rows="3">{{ $dokumen->review ? $dokumen->review->catatan : '' }}</textarea>
                    </div>
                    
                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('admin.review.index') }}" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                            Kembali
                        </a>
                        <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Simpan Review
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="w-full lg:w-4/12">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-medium mb-4">Preview Dokumen</h3>
                <div class="border border-gray-200 rounded-lg p-4">
                    @if($dokumen->persyaratan->tipe_file === 'pdf')
                        <embed src="{{ asset('storage/' . $dokumen->path) }}" type="application/pdf" width="100%" height="500px" />
                    @else
                        <img src="{{ asset('storage/' . $dokumen->path) }}" class="w-full h-auto" alt="Dokumen">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection