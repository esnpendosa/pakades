@extends('layouts.app')

@section('title', 'Dashboard Kabupaten')

@section('content')
<div class="container mx-auto px-4">
    {{-- Statistik --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        {{-- Total Pengajuan --}}
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-500 rounded-full">
                    <i class="fas fa-file-alt text-white text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Total Pengajuan</p>
                    <p class="text-2xl font-semibold">
                        {{ \App\Models\Pengajuan::count() }}
                    </p>
                </div>
            </div>
        </div>

        {{-- Disetujui --}}
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-500 rounded-full">
                    <i class="fas fa-check-circle text-white text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Disetujui</p>
                    <p class="text-2xl font-semibold">
                        {{ \App\Models\Pengajuan::where('status', 'disetujui')->count() }}
                    </p>
                </div>
            </div>
        </div>

        {{-- Menunggu Review --}}
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-yellow-500 rounded-full">
                    <i class="fas fa-clock text-white text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Menunggu Review</p>
                    <p class="text-2xl font-semibold">
                        {{ \App\Models\DokumenPengajuan::whereDoesntHave('review')->count() }}
                    </p>
                </div>
            </div>
        </div>

        {{-- Ditolak --}}
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-red-500 rounded-full">
                    <i class="fas fa-times-circle text-white text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Ditolak</p>
                    <p class="text-2xl font-semibold">
                        {{ \App\Models\Pengajuan::where('status', 'ditolak')->count() }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Dokumen Menunggu Review & Aksi Cepat --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        {{-- Dokumen Menunggu Review --}}
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold mb-4">Dokumen Menunggu Review</h3>
            <div class="space-y-4">
                @php
                    $dokumenMenunggu = \App\Models\DokumenPengajuan::with(['pengajuan.user', 'persyaratan'])
                        ->whereDoesntHave('review')
                        ->latest()
                        ->take(5)
                        ->get();
                @endphp

                @forelse($dokumenMenunggu as $dokumen)
                    <div class="flex items-center justify-between p-3 border-b">
                        <div>
                            <p class="font-medium">{{ $dokumen->persyaratan->nama ?? '-' }}</p>
                            <p class="text-sm text-gray-500">
                                {{ $dokumen->pengajuan->user->nama_desa ?? 'Tidak diketahui' }} - 
                                {{ $dokumen->pengajuan->jenis ?? '-' }}
                            </p>
                        </div>
                        <a href="{{ route('admin.review.show', $dokumen->id) }}" 
                           class="text-blue-600 hover:text-blue-800" title="Lihat Detail">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                @empty
                    <p class="text-gray-500 text-sm text-center">Tidak ada dokumen yang menunggu review.</p>
                @endforelse
            </div>
        </div>

        {{-- Aksi Cepat --}}
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold mb-4">Aksi Cepat</h3>
            <div class="grid grid-cols-2 gap-4">
                <a href="{{ route('admin.review.index') }}" 
                   class="bg-orange-500 hover:bg-orange-600 text-white rounded-lg p-4 text-center transition">
                    <i class="fas fa-search mb-2 text-lg"></i>
                    <p>Review Dokumen</p>
                </a>
                <a href="{{ route('admin.persyaratan.index') }}" 
                   class="bg-purple-500 hover:bg-purple-600 text-white rounded-lg p-4 text-center transition">
                    <i class="fas fa-cog mb-2 text-lg"></i>
                    <p>Persyaratan</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
