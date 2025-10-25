@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="content-card p-6">
        <h3 class="text-gray-800 font-semibold text-lg mb-2">Total Pengajuan</h3>
        <p class="text-gray-500 text-sm">Jumlah pengajuan masuk bulan ini.</p>
        <div class="mt-4 text-3xl font-bold text-blue-600">{{ \App\Models\Pengajuan::count() }}</div>
    </div>

    <div class="content-card p-6">
        <h3 class="text-gray-800 font-semibold text-lg mb-2">Disetujui</h3>
        <p class="text-gray-500 text-sm">Total pengajuan disetujui.</p>
        <div class="mt-4 text-3xl font-bold text-green-600">{{ \App\Models\Pengajuan::where('status', 'disetujui')->count() }}</div>
    </div>

    <div class="content-card p-6">
        <h3 class="text-gray-800 font-semibold text-lg mb-2">Diproses</h3>
        <p class="text-gray-500 text-sm">Pengajuan yang sedang diproses.</p>
        <div class="mt-4 text-3xl font-bold text-yellow-600">{{ \App\Models\Pengajuan::where('status', 'diproses')->count() }}</div>
    </div>
</div>

<div class="bg-white shadow-md rounded-lg p-6 mt-8">
    <h3 class="text-lg font-semibold text-gray-700 mb-4">Selamat Datang di Pakkades!</h3>
    <p class="text-gray-600 text-sm leading-relaxed">
        Ini adalah halaman utama sistem <strong>Pakkades (Paket Keuangan Desa)</strong>.  
        Gunakan menu di sidebar untuk mengelola pengajuan, melihat status dokumen, atau memperbarui profil.
    </p>
</div>
@endsection
