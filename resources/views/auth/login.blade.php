<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pakades | Sistem Keuangan Desa</title>
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
        
        .login-container {
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
        
        .btn-login {
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
            animation: fadeInUp 0.6s ease 0.7s forwards;
        }
        
        .btn-login:hover {
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
        
        @media (max-width: 768px) {
            .login-container {
                grid-template-columns: 1fr;
            }
            .left-panel {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
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
                <h1 class="text-3xl font-bold mb-4">Selamat Datang di Pakades</h1>
                <p class="text-blue-100">Sistem Keuangan Desa</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div>
                    <h3 class="font-semibold">Keamanan Terjamin</h3>
                    <p class="text-blue-100 text-sm">Data keuangan desa terlindungi dengan enkripsi tingkat tinggi</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div>
                    <h3 class="font-semibold">Laporan Real-time</h3>
                    <p class="text-blue-100 text-sm">Pantau perkembangan keuangan desa secara real-time</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div>
                    <h3 class="font-semibold">Akses Mudah</h3>
                    <p class="text-blue-100 text-sm">Akses sistem dari berbagai perangkat kapan saja</p>
                </div>
            </div>
        </div>
        
        <!-- Right Panel - Login Form -->
        <div class="right-panel">
            <div class="logo-container">
                <div class="logo">
                    <img src="https://png.pngtree.com/png-clipart/20230124/ourmid/pngtree-regional-head-avatar-png-image_6569018.png" 
                         alt="Pak Kades">
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Pakades</h1>
                    <p class="text-gray-600 text-sm">Masuk ke akun Anda</p>
                </div>
            </div>
            
            <!-- Session Status -->
            <div class="mb-6 p-3 bg-blue-50 text-blue-700 rounded-lg text-sm border border-blue-200">
                <i class="fas fa-info-circle mr-2"></i>
                Sistem Keuangan Desa Terintegrasi
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

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
                           autofocus 
                           autocomplete="email"
                           class="input-field"
                           placeholder="email@desa.id">
                    @if($errors->has('email'))
                        <p class="mt-2 text-red-600 text-sm">{{ $errors->first('email') }}</p>
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
                           autocomplete="current-password"
                           class="input-field"
                           placeholder="Masukkan kata sandi">
                    @if($errors->has('password'))
                        <p class="mt-2 text-red-600 text-sm">{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="form-group flex items-center justify-between">
                    <label class="flex items-center">
                        <input id="remember_me" 
                               type="checkbox" 
                               name="remember" 
                               class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-600">Ingat Saya</span>
                    </label>
                    
                    @if (Route::has('password.request'))
                        <a class="text-sm text-indigo-600 hover:text-indigo-500 transition duration-200" 
                           href="{{ route('password.request') }}">
                            Lupa kata sandi?
                        </a>
                    @endif
                </div>

                <!-- Login Button -->
                <button type="submit" class="btn-login">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Masuk ke Sistem
                </button>
            </form>

            <!-- Additional Info -->
            <div class="mt-8 pt-6 border-t border-gray-200 text-center">
                <p class="text-gray-600 text-sm">
                    Butuh bantuan? 
                    <a href="https://wa.me/+6285730302827" class="text-indigo-600 hover:text-indigo-500 font-medium">
                        Hubungi Administrator
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script>
        // Simple animation observer
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