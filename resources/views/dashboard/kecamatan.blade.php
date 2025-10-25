@extends('layouts.app')

@section('title', 'Dashboard Kecamatan')

@section('content')
<div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-blue-500 rounded-full">
                    <i class="fas fa-file-alt text-white text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Total Pengajuan</p>
                    <p class="text-2xl font-semibold">{{ \App\Models\Pengajuan::count() }}</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-green-500 rounded-full">
                    <i class="fas fa-check-circle text-white text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Disetujui</p>
                    <p class="text-2xl font-semibold">{{ \App\Models\Pengajuan::where('status', 'disetujui')->count() }}</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-yellow-500 rounded-full">
                    <i class="fas fa-clock text-white text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Diproses</p>
                    <p class="text-2xl font-semibold">{{ \App\Models\Pengajuan::where('status', 'diproses')->count() }}</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 bg-red-500 rounded-full">
                    <i class="fas fa-times-circle text-white text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Ditolak</p>
                    <p class="text-2xl font-semibold">{{ \App\Models\Pengajuan::where('status', 'ditolak')->count() }}</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold mb-4">Pengajuan per Desa</h3>
            <div class="space-y-4">
                @php
                $pengajuanPerDesa = \App\Models\Pengajuan::select('users.nama_desa', \DB::raw('count(*) as total'))
                    ->join('users', 'pengajuans.user_id', '=', 'users.id')
                    ->groupBy('users.nama_desa')
                    ->orderByDesc('total')
                    ->take(5)
                    ->get();
                $maxTotal = $pengajuanPerDesa->max('total') ?: 1;
                @endphp

                @foreach($pengajuanPerDesa as $item)
                @php
                    $persentase = ($item->total / $maxTotal) * 100;
                @endphp
                <div class="flex items-center justify-between p-3 border-b">
                    <div>
                        <p class="font-medium">{{ $item->nama_desa }}</p>
                        <p class="text-sm text-gray-500">{{ $item->total }} pengajuan</p>
                    </div>
                    <div class="w-24 bg-gray-200 rounded-full h-2">
                        <div class="bg-blue-500 h-2 rounded-full" style="width: {{ number_format($persentase, 2) }}%;"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold mb-4">Aksi Cepat</h3>
            <div class="grid grid-cols-2 gap-4">
                <a href="{{ route('kecamatan.pengajuan.index') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white rounded-lg p-4 text-center">
                    <i class="fas fa-eye mb-2"></i>
                    <p>Monitor Pengajuan</p>
                </a>
                <form action="{{ route('logout') }}" method="POST" class="bg-red-500 hover:bg-red-600 text-white rounded-lg p-4 text-center">
                    @csrf
                    <button type="submit" class="w-full">
                        <i class="fas fa-sign-out-alt mb-2"></i>
                        <p>Logout</p>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
