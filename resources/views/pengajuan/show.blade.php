@extends('layouts.app')

@section('title', 'Detail Pengajuan')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex flex-wrap">
        <div class="w-full lg:w-8/12 pr-0 lg:pr-6">
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <h2 class="text-2xl font-semibold mb-6">Detail Pengajuan</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h3 class="text-lg font-medium mb-4">Informasi Pengajuan</h3>
                        <table class="min-w-full divide-y divide-gray-200">
                            <tr>
                                <td class="py-2 text-sm font-medium text-gray-500">Nomor Pengajuan</td>
                                <td class="py-2 text-sm text-gray-900">{{ $pengajuan->nomor_pengajuan }}</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-sm font-medium text-gray-500">Jenis</td>
                                <td class="py-2 text-sm text-gray-900">{{ $pengajuan->jenis }}</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-sm font-medium text-gray-500">Tahun Anggaran</td>
                                <td class="py-2 text-sm text-gray-900">{{ $pengajuan->tahun_anggaran }}</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-sm font-medium text-gray-500">Status</td>
                                <td class="py-2">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                        {{ $pengajuan->status === 'disetujui' ? 'bg-green-100 text-green-800' : 
                                           ($pengajuan->status === 'ditolak' ? 'bg-red-100 text-red-800' : 'bg-yellow-100 text-yellow-800') }}">
                                        {{ ucfirst($pengajuan->status) }}
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium mb-4">Informasi Desa</h3>
                        <table class="min-w-full divide-y divide-gray-200">
                            <tr>
                                <td class="py-2 text-sm font-medium text-gray-500">Nama Desa</td>
                                <td class="py-2 text-sm text-gray-900">{{ $pengajuan->user->nama_desa }}</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-sm font-medium text-gray-500">Kecamatan</td>
                                <td class="py-2 text-sm text-gray-900">{{ $pengajuan->user->nama_kecamatan }}</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-sm font-medium text-gray-500">Email</td>
                                <td class="py-2 text-sm text-gray-900">{{ $pengajuan->user->email }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <hr class="my-6">
                
                <h3 class="text-lg font-medium mb-4">Dokumen Pengajuan</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($pengajuan->dokumenPengajuan as $dokumen)
                    <div class="border border-gray-200 rounded-lg p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="font-medium">{{ $dokumen->persyaratan->nama }}</h4>
                            @if($dokumen->review)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    {{ $dokumen->review->status === 'disetujui' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ ucfirst($dokumen->review->status) }}
                                </span>
                            @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                    Belum Direview
                                </span>
                            @endif
                        </div>
                        <p class="text-sm text-gray-500 mb-3">{{ $dokumen->persyaratan->deskripsi }}</p>
                        <div class="flex justify-between items-center">
                            <a href="{{ asset('storage/' . $dokumen->path) }}" target="_blank" class="text-blue-600 hover:text-blue-800 text-sm">
                                <i class="fas fa-download mr-1"></i> Download
                            </a>
                            @if($dokumen->review && $dokumen->review->catatan)
                            <span class="text-sm text-gray-600">Catatan: {{ $dokumen->review->catatan }}</span>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="w-full lg:w-4/12">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-medium mb-4">Riwayat Status</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-plus text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Pengajuan Dibuat</p>
                            <p class="text-sm text-gray-500">{{ $pengajuan->created_at->format('d M Y, H:i') }}</p>
                        </div>
                    </div>
                    
                    @if($pengajuan->status !== 'draft')
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-paper-plane text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Pengajuan Diajukan</p>
                            <p class="text-sm text-gray-500">{{ $pengajuan->updated_at->format('d M Y, H:i') }}</p>
                        </div>
                    </div>
                    @endif
                    
                    @if($pengajuan->status === 'diproses')
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-tasks text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Sedang Diproses</p>
                            <p class="text-sm text-gray-500">{{ $pengajuan->updated_at->format('d M Y, H:i') }}</p>
                        </div>
                    </div>
                    @endif
                    
                    @if($pengajuan->status === 'disetujui')
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Disetujui</p>
                            <p class="text-sm text-gray-500">{{ $pengajuan->updated_at->format('d M Y, H:i') }}</p>
                        </div>
                    </div>
                    @endif
                    
                    @if($pengajuan->status === 'ditolak')
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-times text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Ditolak</p>
                            <p class="text-sm text-gray-500">{{ $pengajuan->updated_at->format('d M Y, H:i') }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection