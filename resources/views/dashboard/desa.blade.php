<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pakkades - Dashboard Desa</title>

    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        :root {
            --primary: #4f46e5;
            --primary-dark: #3730a3;
            --sidebar-bg: #1e293b;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }
        
        .sidebar {
            background: linear-gradient(135deg, var(--sidebar-bg) 0%, #0f172a 100%);
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        .sidebar-link {
            transition: all 0.3s ease;
            color: #cbd5e1;
            border-radius: 0.75rem;
            margin: 0.25rem 0.5rem;
        }
        
        .sidebar-link:hover {
            background: rgba(79, 70, 229, 0.15);
            color: white;
            transform: translateX(4px);
        }
        
        .sidebar-link.active {
            background: rgba(79, 70, 229, 0.2);
            border-left: 4px solid var(--primary);
            color: white;
            font-weight: 500;
        }
        
        .card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }
        
        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .stat-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 1rem;
            position: relative;
            overflow: hidden;
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(30deg);
        }
        
        .quick-action {
            transition: all 0.3s ease;
            border-radius: 1rem;
            position: relative;
            overflow: hidden;
        }
        
        .quick-action::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .quick-action:hover::before {
            left: 100%;
        }
        
        .quick-action:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .badge {
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .badge-success {
            background: #dcfce7;
            color: #166534;
        }
        
        .badge-warning {
            background: #fef3c7;
            color: #92400e;
        }
        
        .badge-danger {
            background: #fee2e2;
            color: #991b1b;
        }
        
        .badge-info {
            background: #dbeafe;
            color: #1e40af;
        }
        
        .profile-photo {
            transition: all 0.3s ease;
            border: 2px solid #e2e8f0;
        }
        
        .profile-photo:hover {
            transform: scale(1.05);
            border-color: var(--primary);
        }
        
        .logo {
            width: 40px;
            height: 40px;
            border-radius: 0.75rem;
            overflow: hidden;
            border: 2px solid white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .notification-dot {
            position: absolute;
            top: -2px;
            right: -2px;
            width: 8px;
            height: 8px;
            background: #ef4444;
            border-radius: 50%;
            border: 2px solid white;
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        {{-- Sidebar --}}
        <aside class="sidebar w-64 text-white flex-shrink-0">
            <div class="h-full flex flex-col">
                {{-- Logo Section --}}
                <div class="p-6 border-b border-gray-700">
                    <div class="flex items-center space-x-3">
                        <div class="logo">
                            <img src="https://png.pngtree.com/png-clipart/20230124/ourmid/pngtree-regional-head-avatar-png-image_6569018.png" 
                                 alt="Pakkades">
                        </div>
                        <div>
                            <h1 class="font-bold text-xl text-white">Pakkades</h1>
                            <p class="text-gray-400 text-xs">Sistem Keuangan Desa</p>
                        </div>
                    </div>
                </div>

                {{-- User Info --}}
                <div class="p-4 border-b border-gray-700">
                    <div class="flex items-center">
                        <img src="{{ auth()->user()->profile_photo_url ?? 'https://png.pngtree.com/png-clipart/20230124/ourmid/pngtree-regional-head-avatar-png-image_6569018.png' }}" 
                             alt="Profile" 
                             class="w-12 h-12 rounded-full object-cover profile-photo">
                        <div class="ml-3 flex-1 min-w-0">
                            <p class="text-sm font-medium text-white truncate">{{ auth()->user()->name }}</p>
                            <p class="text-xs text-gray-400 capitalize">{{ auth()->user()->role }}</p>
                            @if(auth()->user()->nama_desa)
                            <p class="text-xs text-gray-500 truncate">{{ auth()->user()->nama_desa }}</p>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Navigation --}}
                <nav class="flex-1 p-4">
                    <div class="space-y-1">
                        <a href="{{ route('dashboard') }}" class="sidebar-link flex items-center px-3 py-3 text-sm font-medium {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                            <i class="fas fa-tachometer-alt w-5 mr-3"></i>
                            <span>Dashboard</span>
                        </a>
                        <a href="{{ route('pengajuan.index') }}" class="sidebar-link flex items-center px-3 py-3 text-sm font-medium {{ request()->routeIs('pengajuan.*') ? 'active' : '' }}">
                            <i class="fas fa-file-alt w-5 mr-3"></i>
                            <span>Pengajuan Dana</span>
                        </a>
                        <a href="{{ route('pengajuan.create') }}" class="sidebar-link flex items-center px-3 py-3 text-sm font-medium {{ request()->routeIs('pengajuan.create') ? 'active' : '' }}">
                            <i class="fas fa-plus-circle w-5 mr-3"></i>
                            <span>Buat Pengajuan</span>
                        </a>
                        <a href="{{ route('profile.show') }}" class="sidebar-link flex items-center px-3 py-3 text-sm font-medium {{ request()->routeIs('profile.*') ? 'active' : '' }}">
                            <i class="fas fa-user w-5 mr-3"></i>
                            <span>Profil Saya</span>
                        </a>
                    </div>
                </nav>

                {{-- Logout --}}
                <div class="p-4 border-t border-gray-700">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full text-left px-3 py-3 text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg transition-all duration-200 flex items-center">
                            <i class="fas fa-sign-out-alt w-5 mr-3"></i>
                            <span>Keluar</span>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        {{-- Main Area --}}
        <div class="flex-1 flex flex-col overflow-hidden">
            {{-- Header --}}
            <header class="bg-white shadow-sm border-b border-gray-200">
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center space-x-4">
                        <h2 class="text-lg font-semibold text-gray-800">Dashboard Desa</h2>
                        <div class="hidden md:flex items-center space-x-2 text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-blue-500"></i>
                            <span>{{ auth()->user()->nama_desa ?? 'Desa' }}, {{ auth()->user()->nama_kecamatan ?? 'Kecamatan' }}</span>
                        </div>
                    </div>
                    
                    {{-- Top Right Menu --}}
                    <div class="flex items-center space-x-4">
                        <!-- Notifications -->
                        <div class="relative">
                            <button onclick="toggleNotificationDropdown()" class="text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 relative p-2 rounded-lg hover:bg-gray-100 transition-colors">
                                <i class="fas fa-bell text-xl"></i>
                                <span class="notification-dot"></span>
                            </button>
                            
                            <!-- Notification Dropdown -->
                            <div id="notificationDropdown" class="hidden absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg py-2 z-50">
                                <div class="px-4 py-2 border-b border-gray-100">
                                    <p class="text-sm font-medium text-gray-900">Notifikasi</p>
                                </div>
                                <div class="max-h-60 overflow-y-auto">
                                    <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 border-b border-gray-100">
                                        <p class="font-medium">Pengajuan baru diterima</p>
                                        <p class="text-xs text-gray-500 mt-1">2 menit yang lalu</p>
                                    </a>
                                    <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 border-b border-gray-100">
                                        <p class="font-medium">Dokumen perlu review</p>
                                        <p class="text-xs text-gray-500 mt-1">1 jam yang lalu</p>
                                    </a>
                                </div>
                                <a href="#" class="block px-4 py-2 text-sm text-center text-blue-600 hover:bg-gray-50">
                                    Lihat semua notifikasi
                                </a>
                            </div>
                        </div>
                        
                        <!-- User Info -->
                        <div class="flex items-center space-x-3">
                            <div class="text-right hidden md:block">
                                <p class="text-sm font-medium text-gray-700">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-gray-500">Desa</p>
                            </div>
                            <img src="{{ auth()->user()->profile_photo_url ?? 'https://png.pngtree.com/png-clipart/20230124/ourmid/pngtree-regional-head-avatar-png-image_6569018.png' }}" 
                                 alt="Profile" 
                                 class="w-8 h-8 rounded-full object-cover profile-photo">
                        </div>
                    </div>
                </div>
            </header>

            {{-- Main Content --}}
            <main class="flex-1 overflow-y-auto bg-gray-50">
                <div class="mx-auto w-full pb-8">
                    {{-- DASHBOARD CONTENT --}}
                    <div class="container mx-auto px-4 md:px-6 py-6">
                        {{-- Flash Messages --}}
                        @if(session('success'))
                        <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-6 rounded-r-lg">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-check-circle text-green-400 text-lg"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-green-700 font-medium">
                                        {{ session('success') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        @if(session('error'))
                        <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6 rounded-r-lg">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-exclamation-circle text-red-400 text-lg"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-red-700 font-medium">
                                        {{ session('error') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endif

                        {{-- Welcome Section --}}
                        <div class="mb-8">
                            <h1 class="text-2xl font-bold text-gray-800 mb-2">Selamat Datang, {{ auth()->user()->name }}!</h1>
                            <p class="text-gray-600">Kelola pengajuan dana desa Anda dengan mudah dan efisien.</p>
                        </div>

                        {{-- Statistik --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                            @php
                                $total = \App\Models\Pengajuan::where('user_id', auth()->id())->count();
                                $disetujui = \App\Models\Pengajuan::where('user_id', auth()->id())->where('status', 'disetujui')->count();
                                $diproses = \App\Models\Pengajuan::where('user_id', auth()->id())->where('status', 'diproses')->count();
                                $ditolak = \App\Models\Pengajuan::where('user_id', auth()->id())->where('status', 'ditolak')->count();
                            @endphp

                            {{-- Total Pengajuan --}}
                            <div class="stat-card p-6">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-blue-100 text-sm font-medium">Total Pengajuan</p>
                                        <p class="text-3xl font-bold text-white mt-2">{{ $total }}</p>
                                        <p class="text-blue-200 text-xs mt-1">Semua waktu</p>
                                    </div>
                                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                                        <i class="fas fa-file-alt text-white text-xl"></i>
                                    </div>
                                </div>
                            </div>

                            {{-- Disetujui --}}
                            <div class="stat-card p-6" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-green-100 text-sm font-medium">Disetujui</p>
                                        <p class="text-3xl font-bold text-white mt-2">{{ $disetujui }}</p>
                                        <p class="text-green-200 text-xs mt-1">Pengajuan sukses</p>
                                    </div>
                                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                                        <i class="fas fa-check-circle text-white text-xl"></i>
                                    </div>
                                </div>
                            </div>

                            {{-- Diproses --}}
                            <div class="stat-card p-6" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-yellow-100 text-sm font-medium">Diproses</p>
                                        <p class="text-3xl font-bold text-white mt-2">{{ $diproses }}</p>
                                        <p class="text-yellow-200 text-xs mt-1">Dalam review</p>
                                    </div>
                                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                                        <i class="fas fa-clock text-white text-xl"></i>
                                    </div>
                                </div>
                            </div>

                            {{-- Ditolak --}}
                            <div class="stat-card p-6" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-red-100 text-sm font-medium">Ditolak</p>
                                        <p class="text-3xl font-bold text-white mt-2">{{ $ditolak }}</p>
                                        <p class="text-red-200 text-xs mt-1">Perlu perbaikan</p>
                                    </div>
                                    <div class="w-12 h-12 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                                        <i class="fas fa-times-circle text-white text-xl"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Main Content Grid --}}
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            {{-- Pengajuan Terbaru --}}
                            <div class="card p-6 lg:col-span-2">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-lg font-semibold text-gray-800">Pengajuan Terbaru</h3>
                                    <a href="{{ route('pengajuan.index') }}" class="text-sm text-blue-600 hover:text-blue-500 font-medium flex items-center">
                                        Lihat Semua
                                        <i class="fas fa-chevron-right ml-1 text-xs"></i>
                                    </a>
                                </div>
                                <div class="space-y-3">
                                    @php
                                        $recentPengajuan = \App\Models\Pengajuan::where('user_id', auth()->id())->latest()->take(5)->get();
                                    @endphp
                                    @forelse($recentPengajuan as $pengajuan)
                                        <div class="flex items-center justify-between p-3 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors group">
                                            <div class="flex-1 min-w-0">
                                                <p class="font-medium text-gray-900 truncate group-hover:text-blue-600 transition-colors">
                                                    {{ $pengajuan->nomor_pengajuan }}
                                                </p>
                                                <div class="flex items-center space-x-2 mt-1">
                                                    <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded">
                                                        {{ $pengajuan->jenis }}
                                                    </span>
                                                    <span class="text-xs text-gray-500">
                                                        {{ $pengajuan->tahun_anggaran }}
                                                    </span>
                                                </div>
                                            </div>
                                            <span class="badge {{ $pengajuan->status === 'disetujui' ? 'badge-success' : 
                                                   ($pengajuan->status === 'ditolak' ? 'badge-danger' : 
                                                   'badge-warning') }} ml-2 flex-shrink-0">
                                                {{ ucfirst($pengajuan->status) }}
                                            </span>
                                        </div>
                                    @empty
                                        <div class="text-center py-8">
                                            <i class="fas fa-file-alt text-gray-400 text-4xl mb-3"></i>
                                            <p class="text-gray-500 text-sm mb-2">Belum ada pengajuan</p>
                                            <a href="{{ route('pengajuan.create') }}" class="text-blue-600 hover:text-blue-500 text-sm font-medium inline-flex items-center">
                                                Buat pengajuan pertama
                                                <i class="fas fa-arrow-right ml-1 text-xs"></i>
                                            </a>
                                        </div>
                                    @endforelse
                                </div>
                            </div>

                            {{-- Aksi Cepat & Info --}}
                            <div class="space-y-6">
                                {{-- Aksi Cepat --}}
                                <div class="card p-6">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Aksi Cepat</h3>
                                    <div class="grid grid-cols-2 gap-3">
                                        <a href="{{ route('pengajuan.create') }}" class="quick-action bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white rounded-xl p-4 text-center transition-all duration-200">
                                            <i class="fas fa-plus mb-2 text-xl"></i>
                                            <p class="font-medium text-xs">Buat Pengajuan</p>
                                        </a>
                                        <a href="{{ route('pengajuan.index') }}" class="quick-action bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white rounded-xl p-4 text-center transition-all duration-200">
                                            <i class="fas fa-list mb-2 text-xl"></i>
                                            <p class="font-medium text-xs">Daftar Pengajuan</p>
                                        </a>
                                        <a href="{{ route('profile.show') }}" class="quick-action bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white rounded-xl p-4 text-center transition-all duration-200">
                                            <i class="fas fa-user mb-2 text-xl"></i>
                                            <p class="font-medium text-xs">Profil Saya</p>
                                        </a>
                                        <form action="{{ route('logout') }}" method="POST" class="quick-action bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white rounded-xl p-4 text-center transition-all duration-200 cursor-pointer">
                                            @csrf
                                            <button type="submit" class="w-full h-full">
                                                <i class="fas fa-sign-out-alt mb-2 text-xl"></i>
                                                <p class="font-medium text-xs">Keluar</p>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                {{-- Info Sistem --}}
                                <div class="card p-6">
                                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Info Sistem</h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center justify-between text-sm">
                                            <span class="text-gray-600">Status Sistem</span>
                                            <span class="badge badge-success">Aktif</span>
                                        </div>
                                        <div class="flex items-center justify-between text-sm">
                                            <span class="text-gray-600">Versi</span>
                                            <span class="text-gray-900 font-medium">v2.1.0</span>
                                        </div>
                                        <div class="flex items-center justify-between text-sm">
                                            <span class="text-gray-600">Update Terakhir</span>
                                            <span class="text-gray-900 font-medium">{{ date('d M Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            {{-- Footer --}}
            <footer class="bg-white border-t border-gray-200 p-4">
                <div class="flex items-center justify-between text-sm text-gray-500">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-landmark text-blue-500"></i>
                        <span>© {{ date('Y') }} Pakkades - Sistem Keuangan Desa</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="hidden md:inline">Versi 2.1.0</span>
                        <span>{{ auth()->user()->nama_desa ?? 'Desa' }}</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    {{-- JS --}}
    <script>
        // Toggle Notification Dropdown
        function toggleNotificationDropdown() {
            const dropdown = document.getElementById('notificationDropdown');
            dropdown.classList.toggle('hidden');
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('notificationDropdown');
            const button = event.target.closest('button[onclick="toggleNotificationDropdown()"]');
            
            if (!button && !dropdown.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });

        // Auto-hide flash messages after 5 seconds
        setTimeout(function() {
            const flashMessages = document.querySelectorAll('.bg-green-50, .bg-red-50');
            flashMessages.forEach(function(message) {
                message.style.transition = 'opacity 0.5s ease';
                message.style.opacity = '0';
                setTimeout(function() {
                    if (message.parentNode) {
                        message.parentNode.removeChild(message);
                    }
                }, 500);
            });
        }, 5000);
    </script>
</body>
</html>