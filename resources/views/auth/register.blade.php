<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Pakades | Sistem Keuangan Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }
        
        .register-container {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            max-width: 1000px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            min-height: 600px;
        }
        
        .left-panel {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            color: white;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        .right-panel {
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .floating-element {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .floating-1 {
            width: 120px;
            height: 120px;
            top: -30px;
            right: -30px;
        }
        
        .floating-2 {
            width: 80px;
            height: 80px;
            bottom: 20px;
            left: -20px;
        }
        
        .floating-3 {
            width: 60px;
            height: 60px;
            bottom: 100px;
            right: 40px;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            opacity: 0;
            animation: fadeInUp 0.6s ease forwards;
        }
        
        .feature-item:nth-child(1) { animation-delay: 0.2s; }
        .feature-item:nth-child(2) { animation-delay: 0.4s; }
        .feature-item:nth-child(3) { animation-delay: 0.6s; }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .feature-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            opacity: 0;
            animation: fadeInUp 0.6s ease 0.1s forwards;
        }
        
        .logo {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            overflow: hidden;
            border: 4px solid white;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
            opacity: 0;
            animation: fadeInUp 0.6s ease forwards;
        }
        
        .form-group:nth-child(1) { animation-delay: 0.3s; }
        .form-group:nth-child(2) { animation-delay: 0.4s; }
        .form-group:nth-child(3) { animation-delay: 0.5s; }
        .form-group:nth-child(4) { animation-delay: 0.6s; }
        .form-group:nth-child(5) { animation-delay: 0.7s; }
        .form-group:nth-child(6) { animation-delay: 0.8s; }
        .form-group:nth-child(7) { animation-delay: 0.9s; }
        
        .input-field {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }
        
        .input-field:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
            outline: none;
        }
        
        .select-field {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-size: 0.95rem;
            background: white;
        }
        
        .select-field:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
            outline: none;
        }
        
        .btn-register {
            width: 100%;
            padding: 0.75rem;
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0;
            animation: fadeInUp 0.6s ease 1.0s forwards;
        }
        
        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
        }
        
        .welcome-logo {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
        }
        
        .welcome-logo .logo {
            width: 100px;
            height: 100px;
            border-radius: 25px;
            border: 4px solid rgba(255, 255, 255, 0.3);
        }
        
        .role-info {
            background: #f0f9ff;
            border: 1px solid #bae6fd;
            border-radius: 10px;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .role-info p {
            color: #0369a1;
            font-size: 0.875rem;
            margin: 0;
            display: flex;
            align-items: center;
        }
        
        .role-info i {
            margin-right: 0.5rem;
        }
        
        @media (max-width: 768px) {
            .register-container {
                grid-template-columns: 1fr;
            }
            .left-panel {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <!-- Left Panel - Information -->
        <div class="left-panel">
            <div class="floating-element floating-1"></div>
            <div class="floating-element floating-2"></div>
            <div class="floating-element floating-3"></div>
            
            <div class="welcome-logo">
                <div class="logo">
                    <img src="https://png.pngtree.com/png-clipart/20230124/ourmid/pngtree-regional-head-avatar-png-image_6569018.png" 
                         alt="Pak Kades">
                </div>
            </div>
            
            <div style="margin-bottom: 3rem; text-align: center;">
                <h1 class="text-3xl font-bold mb-4">Bergabung dengan Pakades</h1>
                <p class="text-blue-100">Daftarkan desa Anda untuk mengelola keuangan desa</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <div>
                    <h3 class="font-semibold">Registrasi Desa</h3>
                    <p class="text-blue-100 text-sm">Khusus untuk perangkat desa dan pemerintah desa</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-cogs"></i>
                </div>
                <div>
                    <h3 class="font-semibold">Kelola Keuangan</h3>
                    <p class="text-blue-100 text-sm">Kelola anggaran dan keuangan desa dengan mudah</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div>
                    <h3 class="font-semibold">Laporan Otomatis</h3>
                    <p class="text-blue-100 text-sm">Buat laporan keuangan desa secara otomatis</p>
                </div>
            </div>
        </div>
        
        <!-- Right Panel - Register Form -->
        <div class="right-panel">
            <div class="logo-container">
                <div class="logo">
                    <img src="https://png.pngtree.com/png-clipart/20230124/ourmid/pngtree-regional-head-avatar-png-image_6569018.png" 
                         alt="Pak Kades">
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Pakades</h1>
                    <p class="text-gray-600 text-sm">Daftar Akun Desa</p>
                </div>
            </div>

            <!-- Role Information -->
            <div class="role-info">
                <p>
                    <i class="fas fa-info-circle"></i>
                    Pendaftaran hanya diperbolehkan untuk perangkat desa dan pemerintah desa
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Hidden Role Field (fixed as 'desa') -->
                <input type="hidden" name="role" value="desa">

                <!-- Name -->
                <div class="form-group">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-user mr-2"></i>Nama Lengkap
                    </label>
                    <input id="name" 
                           type="text" 
                           name="name" 
                           value="{{ old('name') }}" 
                           required 
                           autofocus 
                           autocomplete="name"
                           class="input-field"
                           placeholder="Masukkan nama lengkap">
                    @if($errors->has('name'))
                        <p class="mt-2 text-red-600 text-sm">{{ $errors->first('name') }}</p>
                    @endif
                </div>

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-envelope mr-2"></i>Alamat Email
                    </label>
                    <input id="email" 
                           type="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           required 
                           autocomplete="email"
                           class="input-field"
                           placeholder="email@desa.id">
                    @if($errors->has('email'))
                        <p class="mt-2 text-red-600 text-sm">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <!-- Nama Desa -->
                <div class="form-group">
                    <label for="nama_desa" class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-home mr-2"></i>Nama Desa
                    </label>
                    <input id="nama_desa" 
                           type="text" 
                           name="nama_desa" 
                           value="{{ old('nama_desa') }}"
                           required
                           class="input-field"
                           placeholder="Masukkan nama desa">
                    @if($errors->has('nama_desa'))
                        <p class="mt-2 text-red-600 text-sm">{{ $errors->first('nama_desa') }}</p>
                    @endif
                </div>

                <!-- Nama Kecamatan -->
                <div class="form-group">
                    <label for="nama_kecamatan" class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-building mr-2"></i>Nama Kecamatan
                    </label>
                    <input id="nama_kecamatan" 
                           type="text" 
                           name="nama_kecamatan" 
                           value="{{ old('nama_kecamatan') }}"
                           required
                           class="input-field"
                           placeholder="Masukkan nama kecamatan">
                    @if($errors->has('nama_kecamatan'))
                        <p class="mt-2 text-red-600 text-sm">{{ $errors->first('nama_kecamatan') }}</p>
                    @endif
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-lock mr-2"></i>Kata Sandi
                    </label>
                    <input id="password" 
                           type="password" 
                           name="password" 
                           required 
                           autocomplete="new-password"
                           class="input-field"
                           placeholder="Buat kata sandi (minimal 8 karakter)">
                    @if($errors->has('password'))
                        <p class="mt-2 text-red-600 text-sm">{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                        <i class="fas fa-lock mr-2"></i>Konfirmasi Kata Sandi
                    </label>
                    <input id="password_confirmation" 
                           type="password" 
                           name="password_confirmation" 
                           required 
                           autocomplete="new-password"
                           class="input-field"
                           placeholder="Ulangi kata sandi">
                    @if($errors->has('password_confirmation'))
                        <p class="mt-2 text-red-600 text-sm">{{ $errors->first('password_confirmation') }}</p>
                    @endif
                </div>

                <!-- Terms and Conditions -->
                <div class="form-group flex items-start">
                    <input id="terms" 
                           type="checkbox" 
                           name="terms" 
                           class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 mt-1"
                           required>
                    <label for="terms" class="ml-2 text-sm text-gray-600">
                        Saya setuju dengan 
                        <a href="#" class="text-indigo-600 hover:text-indigo-500">syarat dan ketentuan</a>
                        serta menyatakan bahwa saya adalah perangkat desa yang berwenang
                    </label>
                </div>
                @if($errors->has('terms'))
                    <p class="mt-1 text-red-600 text-sm">{{ $errors->first('terms') }}</p>
                @endif

                <!-- Register Button -->
                <button type="submit" class="btn-register">
                    <i class="fas fa-user-plus mr-2"></i>
                    Daftar Akun Desa
                </button>
            </form>

            <!-- Login Link -->
            <div class="mt-6 pt-6 border-t border-gray-200 text-center">
                <p class="text-gray-600 text-sm">
                    Sudah punya akun? 
                    <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-500 font-medium">
                        Masuk di sini
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script>
        // Animation for features
        document.addEventListener('DOMContentLoaded', function() {
            const features = document.querySelectorAll('.feature-item');
            features.forEach((feature, index) => {
                setTimeout(() => {
                    feature.style.opacity = '1';
                    feature.style.transform = 'translateY(0)';
                }, 200 * (index + 1));
            });
        });
    </script>
</body>
</html>