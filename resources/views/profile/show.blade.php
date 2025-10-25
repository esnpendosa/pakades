@extends('layouts.app')

@section('title', 'Profile Saya')

@section('content')
<div class="container mx-auto px-4">
    <div class="bg-white rounded-lg shadow p-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Profile Photo -->
            <div class="lg:col-span-1">
                <div class="text-center">
                    <img src="{{ auth()->user()->profile_photo_url }}" 
                         alt="Profile Photo" 
                         class="w-48 h-48 rounded-full object-cover mx-auto border-4 border-white shadow-lg">
                    <h3 class="mt-4 text-xl font-semibold">{{ auth()->user()->name }}</h3>
                    <p class="text-gray-600">{{ ucfirst(auth()->user()->role) }}</p>
                    
                    @if(auth()->user()->bio)
                    <div class="mt-4 p-4 bg-gray-50 rounded-lg">
                        <p class="text-sm text-gray-700">{{ auth()->user()->bio }}</p>
                    </div>
                    @endif
                    
                    <div class="mt-6 space-y-2">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-envelope mr-2"></i>
                            {{ auth()->user()->email }}
                        </div>
                        @if(auth()->user()->nama_desa)
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            {{ auth()->user()->nama_desa }}
                        </div>
                        @endif
                        @if(auth()->user()->nama_kecamatan)
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map mr-2"></i>
                            {{ auth()->user()->nama_kecamatan }}
                        </div>
                        @endif
                    </div>
                    
                    <div class="mt-6">
                        <a href="{{ route('profile.edit') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg inline-block">
                            <i class="fas fa-edit mr-2"></i> Edit Profile
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Activity Log -->
            <div class="lg:col-span-2">
                <h3 class="text-lg font-semibold mb-4">Aktivitas Terakhir</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-sign-in-alt text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Login terakhir</p>
                            <p class="text-sm text-gray-500">{{ auth()->user()->last_login_at ? auth()->user()->last_login_at->format('d M Y, H:i') : 'Tidak tersedia' }}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Pengajuan terakhir</p>
                            <p class="text-sm text-gray-500">
                                @php
                                $lastPengajuan = auth()->user()->pengajuan()->latest()->first();
                                @endphp
                                @if($lastPengajuan)
                                    {{ $lastPengajuan->created_at->format('d M Y, H:i') }}
                                @else
                                    Belum ada pengajuan
                                @endif
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-user-edit text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Profile terakhir diperbarui</p>
                            <p class="text-sm text-gray-500">{{ auth()->user()->updated_at->format('d M Y, H:i') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection