<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password - Pakkades | Sistem Keuangan Desa</title>
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
        
        .forgot-container {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            max-width: 1000px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            min-height: 500px;
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
        
        .password-icon {
            font-size: 4rem;
            color: #4f46e5;
            margin-bottom: 1.5rem;
            opacity: 0;
            animation: fadeInUp 0.6s ease 0.3s forwards;
        }
        
        .message-content {
            opacity: 0;
            animation: fadeInUp 0.6s ease 0.5s forwards;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
            opacity: 0;
            animation: fadeInUp 0.6s ease 0.7s forwards;
        }
        
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
        
        .btn-reset {
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
            animation: fadeInUp 0.6s ease 0.9s forwards;
        }
        
        .btn-reset:hover {
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
            .forgot-container {
                grid-template-columns: 1fr;
            }
            .left-panel {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="forgot-container">
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
                <h1 class="text-3xl font-bold mb-4">Reset Password</h1>
                <p class="text-blue-100">Kami akan membantu Anda mendapatkan akses kembali</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-key"></i>
                </div>
                <div>
                    <h3 class="font-semibold">Reset Aman</h3>
                    <p class="text-blue-100 text-sm">Proses reset password yang aman dan terjamin</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div>
                    <h3 class="font-semibold">Link Reset</h3>
                    <p class="text-blue-100 text-sm">Kirim link reset ke email terdaftar</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-shield-check"></i>
                </div>
                <div>
                    <h3 class="font-semibold">Proses Cepat</h3>
                    <p class="text-blue-100 text-sm">Reset password selesai dalam beberapa menit</p>
                </div>
            </div>
        </div>
        
        <!-- Right Panel - Forgot Password Form -->
        <div class="right-panel">
            <div class="logo-container">
                <div class="logo">
                    <img src="https://png.pngtree.com/png-clipart/20230124/ourmid/pngtree-regional-head-avatar-png-image_6569018.png" 
                         alt="Pak Kades">
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Pakkades</h1>
                    <p class="text-gray-600 text-sm">Reset Password</p>
                </div>
            </div>

            <!-- Password Icon -->
            <div class="text-center password-icon">
                <i class="fas fa-unlock-alt"></i>
            </div>

            <!-- Message Content -->
            <div class="message-content mb-6">
                <p class="text-gray-600 text-center mb-4">
                    Lupa password Anda? Tidak masalah. Beri tahu kami alamat email Anda dan kami akan mengirimkan link reset password yang memungkinkan Anda memilih yang baru.
                </p>
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg text-green-700 text-sm text-center">
                    <i class="fas fa-check-circle mr-2"></i>
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
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
                           class="input-field"
                           placeholder="email@instansi.id">
                    @if($errors->has('email'))
                        <p class="mt-2 text-red-600 text-sm">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <!-- Reset Button -->
                <button type="submit" class="btn-reset">
                    <i class="fas fa-paper-plane mr-2"></i>
                    Kirim Link Reset Password
                </button>
            </form>

            <!-- Login Link -->
            <div class="mt-6 pt-6 border-t border-gray-200 text-center">
                <p class="text-gray-600 text-sm">
                    Ingat password Anda? 
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