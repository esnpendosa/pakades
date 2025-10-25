@extends('layouts.app')

@section('title', 'Review Dokumen')

@section('content')
<div class="container mx-auto px-4">
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-semibold mb-6">Review Dokumen</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($dokumen as $item)
            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-3">
                    <h3 class="font-medium text-gray-900">{{ $item->persyaratan->nama }}</h3>
                    @if($item->review)
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                            {{ $item->review->status === 'disetujui' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ ucfirst($item->review->status) }}
                        </span>
                    @else
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            Belum Direview
                        </span>
                    @endif
                </div>
                
                <div class="space-y-2 mb-4">
                    <p class="text-sm text-gray-600">
                        <span class="font-medium">Pengajuan:</span> {{ $item->pengajuan->nomor_pengajuan }}
                    </p>
                    <p class="text-sm text-gray-600">
                        <span class="font-medium">Desa:</span> {{ $item->pengajuan->user->nama_desa }}
                    </p>
                    <p class="text-sm text-gray-600">
                        <span class="font-medium">Jenis:</span> {{ $item->pengajuan->jenis }}
                    </p>
                </div>
                
                <div class="flex justify-between items-center">
                    <a href="{{ route('admin.review.show', $item->id) }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                        Review Dokumen
                    </a>
                    <a href="{{ asset('storage/' . $item->path) }}" target="_blank" class="text-gray-600 hover:text-gray-800">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection