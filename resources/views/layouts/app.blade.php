<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pakkades - @yield('title')</title>
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
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        .sidebar.collapsed {
            margin-left: -16rem;
        }
        
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                top: 0;
                left: 0;
                z-index: 50;
                height: 100vh;
                width: 16rem;
                transform: translateX(-100%);
            }
            .sidebar.active {
                transform: translateX(0);
            }
        }
        
        .sidebar-overlay {
            display: none;
        }
        
        @media (max-width: 768px) {
            .sidebar-overlay.active {
                display: block;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.5);
                z-index: 40;
            }
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
        
        .btn {
            transition: all 0.2s ease;
            border-radius: 0.75rem;
        }
        
        .btn:hover {
            transform: translateY(-1px);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        }
        
        .dropdown-menu {
            transform-origin: top right;
            transition: all 0.2s ease;
            border-radius: 0.75rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        .profile-photo {
            transition: all 0.3s ease;
            border: 2px solid #e2e8f0;
        }
        
        .profile-photo:hover {
            transform: scale(1.05);
            border-color: var(--primary);
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
    </style>
</head>
<body class="bg-gray-50">
    <!-- Mobile Overlay -->
    <div id="sidebarOverlay" class="sidebar-overlay" onclick="toggleSidebar()"></div>
    
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div id="sidebar" class="sidebar w-64 text-white">
            <!-- Logo Section -->
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
            
            <!-- User Profile -->
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
            
            <!-- Navigation Menu -->
            <nav class="flex-1 p-4">
                <div class="space-y-1">
                    <a href="{{ route('dashboard') }}" class="sidebar-link flex items-center px-3 py-3 text-sm font-medium {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt w-5 mr-3"></i>
                        <span>Dashboard</span>
                    </a>
                    
                    @if(auth()->user()->role === 'desa')
                    <a href="{{ route('pengajuan.index') }}" class="sidebar-link flex items-center px-3 py-3 text-sm font-medium {{ request()->routeIs('pengajuan.*') ? 'active' : '' }}">
                        <i class="fas fa-file-alt w-5 mr-3"></i>
                        <span>Pengajuan Dana</span>
                    </a>
                    <a href="{{ route('pengajuan.create') }}" class="sidebar-link flex items-center px-3 py-3 text-sm font-medium {{ request()->routeIs('pengajuan.create') ? 'active' : '' }}">
                        <i class="fas fa-plus-circle w-5 mr-3"></i>
                        <span>Buat Pengajuan</span>
                    </a>
                    @endif
                    
                    @if(auth()->user()->role === 'kabupaten')
                    <a href="{{ route('admin.persyaratan.index') }}" class="sidebar-link flex items-center px-3 py-3 text-sm font-medium {{ request()->routeIs('admin.persyaratan.*') ? 'active' : '' }}">
                        <i class="fas fa-cog w-5 mr-3"></i>
                        <span>Kelola Persyaratan</span>
                    </a>
                    <a href="{{ route('admin.review.index') }}" class="sidebar-link flex items-center px-3 py-3 text-sm font-medium {{ request()->routeIs('admin.review.*') ? 'active' : '' }}">
                        <i class="fas fa-search w-5 mr-3"></i>
                        <span>Review Dokumen</span>
                    </a>
                    @endif
                    
                    @if(auth()->user()->role === 'kecamatan')
                    <a href="{{ route('kecamatan.pengajuan.index') }}" class="sidebar-link flex items-center px-3 py-3 text-sm font-medium {{ request()->routeIs('kecamatan.pengajuan.*') ? 'active' : '' }}">
                        <i class="fas fa-eye w-5 mr-3"></i>
                        <span>Monitor Pengajuan</span>
                    </a>
                    @endif
                    
                    <div class="pt-4 border-t border-gray-700">
                        <a href="{{ route('profile.show') }}" class="sidebar-link flex items-center px-3 py-3 text-sm font-medium {{ request()->routeIs('profile.*') ? 'active' : '' }}">
                            <i class="fas fa-user w-5 mr-3"></i>
                            <span>Profile Saya</span>
                        </a>
                    </div>
                </div>
            </nav>
            
            <!-- Logout Button -->
            <div class="p-4 border-t border-gray-700">
                <form action="{{ route('logout') }}" method="POST" class="block">
                    @csrf
                    <button type="submit" class="w-full text-left px-3 py-3 text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg transition-all duration-200 flex items-center">
                        <i class="fas fa-sign-out-alt w-5 mr-3"></i>
                        <span>Keluar</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Topbar -->
            <header class="bg-white shadow-sm border-b border-gray-200">
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center space-x-4">
                        <button id="sidebarToggle" class="md:hidden text-gray-600 hover:text-gray-900 focus:outline-none focus:text-gray-900">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                        <h2 class="text-lg font-semibold text-gray-800">@yield('title', 'Dashboard')</h2>
                        <div class="hidden md:flex items-center space-x-2 text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-blue-500"></i>
                            <span>
                                @if(auth()->user()->nama_desa)
                                    {{ auth()->user()->nama_desa }}, {{ auth()->user()->nama_kecamatan ?? 'Kecamatan' }}
                                @else
                                    {{ ucfirst(auth()->user()->role) }}
                                @endif
                            </span>
                        </div>
                    </div>
                    
                    <!-- Top Right Menu -->
                    <div class="flex items-center space-x-4">
                        <!-- Notifications -->
                        <div class="relative">
                            <button onclick="toggleNotificationDropdown()" class="text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 relative p-2 rounded-lg hover:bg-gray-100 transition-colors">
                                <i class="fas fa-bell text-xl"></i>
                                <span class="notification-dot"></span>
                            </button>
                            
                            <!-- Notification Dropdown -->
                            <div id="notificationDropdown" class="hidden absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg py-2 z-50 dropdown-menu">
                                <div class="px-4 py-2 border-b border-gray-100">
                                    <p class="text-sm font-medium text-gray-900">Notifikasi</p>
                                </div>
                                <div class="max-h-60 overflow-y-auto">
                                    <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 border-b border-gray-100">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                                            <div>
                                                <p class="font-medium">Pengajuan baru diterima</p>
                                                <p class="text-xs text-gray-500 mt-1">2 menit yang lalu</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 border-b border-gray-100">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-2 h-2 bg-yellow-500 rounded-full mt-2 flex-shrink-0"></div>
                                            <div>
                                                <p class="font-medium">Dokumen perlu review</p>
                                                <p class="text-xs text-gray-500 mt-1">1 jam yang lalu</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="#" class="block px-4 py-2 text-sm text-center text-blue-600 hover:bg-gray-50 font-medium">
                                    Lihat semua notifikasi
                                </a>
                            </div>
                        </div>
                        
                        <!-- Profile Dropdown -->
                        <div class="relative">
                            <button onclick="toggleProfileDropdown()" class="flex items-center space-x-3 focus:outline-none p-2 rounded-lg hover:bg-gray-100 transition-colors">
                                <img src="{{ auth()->user()->profile_photo_url ?? 'https://png.pngtree.com/png-clipart/20230124/ourmid/pngtree-regional-head-avatar-png-image_6569018.png' }}" 
                                     alt="Profile" 
                                     class="w-8 h-8 rounded-full object-cover profile-photo">
                                <div class="hidden md:block text-left">
                                    <p class="text-sm font-medium text-gray-700 truncate max-w-32">{{ auth()->user()->name }}</p>
                                    <p class="text-xs text-gray-500 capitalize">{{ auth()->user()->role }}</p>
                                </div>
                                <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                            </button>
                            
                            <!-- Profile Dropdown Menu -->
                            <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-50 dropdown-menu">
                                <div class="px-4 py-2 border-b border-gray-100">
                                    <p class="text-sm font-medium text-gray-900 truncate">{{ auth()->user()->name }}</p>
                                    <p class="text-xs text-gray-500 truncate">{{ auth()->user()->email }}</p>
                                </div>
                                <a href="{{ route('profile.show') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-user mr-3 w-4 text-gray-400"></i> 
                                    <span>Profile Saya</span>
                                </a>
                                <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-edit mr-3 w-4 text-gray-400"></i> 
                                    <span>Edit Profile</span>
                                </a>
                                <div class="border-t border-gray-100 my-1"></div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="flex items-center w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors">
                                        <i class="fas fa-sign-out-alt mr-3 w-4 text-gray-400"></i> 
                                        <span>Keluar</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto bg-gray-50">
                <!-- Flash Messages -->
                @if(session('success'))
                <div class="bg-green-50 border-l-4 border-green-400 p-4 m-4 rounded-r-lg">
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
                <div class="bg-red-50 border-l-4 border-red-400 p-4 m-4 rounded-r-lg">
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

                @if(session('info'))
                <div class="bg-blue-50 border-l-4 border-blue-400 p-4 m-4 rounded-r-lg">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="fas fa-info-circle text-blue-400 text-lg"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-blue-700 font-medium">
                                {{ session('info') }}
                            </p>
                        </div>
                    </div>
                </div>
                @endif

                @if(session('warning'))
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 m-4 rounded-r-lg">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-triangle text-yellow-400 text-lg"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-yellow-700 font-medium">
                                {{ session('warning') }}
                            </p>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Page Content -->
                <div class="px-4 md:px-6 py-6">
                    @yield('content')
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t border-gray-200 p-4">
                <div class="flex items-center justify-between text-sm text-gray-500">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-landmark text-blue-500"></i>
                        <span>© {{ date('Y') }} Pakkades - Sistem Keuangan Desa</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="hidden md:inline">Versi 2.1.0</span>
                        <span class="hidden lg:inline">{{ auth()->user()->nama_desa ?? ucfirst(auth()->user()->role) }}</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // Toggle Sidebar
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        }

        document.getElementById('sidebarToggle').addEventListener('click', toggleSidebar);

        // Toggle Profile Dropdown
        function toggleProfileDropdown() {
            const dropdown = document.getElementById('profileDropdown');
            dropdown.classList.toggle('hidden');
            
            // Close notification dropdown if open
            document.getElementById('notificationDropdown').classList.add('hidden');
        }

        // Toggle Notification Dropdown
        function toggleNotificationDropdown() {
            const dropdown = document.getElementById('notificationDropdown');
            dropdown.classList.toggle('hidden');
            
            // Close profile dropdown if open
            document.getElementById('profileDropdown').classList.add('hidden');
        }

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            const profileDropdown = document.getElementById('profileDropdown');
            const notificationDropdown = document.getElementById('notificationDropdown');
            const profileButton = event.target.closest('button[onclick="toggleProfileDropdown()"]');
            const notificationButton = event.target.closest('button[onclick="toggleNotificationDropdown()"]');
            
            if (!profileButton && profileDropdown && !profileDropdown.contains(event.target)) {
                profileDropdown.classList.add('hidden');
            }
            
            if (!notificationButton && notificationDropdown && !notificationDropdown.contains(event.target)) {
                notificationDropdown.classList.add('hidden');
            }
        });

        // Auto-hide flash messages after 5 seconds
        setTimeout(function() {
            const flashMessages = document.querySelectorAll('.bg-green-50, .bg-red-50, .bg-blue-50, .bg-yellow-50');
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

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                document.getElementById('sidebar').classList.remove('active');
                document.getElementById('sidebarOverlay').classList.remove('active');
            }
        });

        // Highlight active sidebar link based on current route
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const sidebarLinks = document.querySelectorAll('.sidebar-link');
            
            sidebarLinks.forEach(function(link) {
                const href = link.getAttribute('href');
                if (href === currentPath || (href !== '/' && currentPath.startsWith(href))) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>