<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email - Pakkades | Sistem Keuangan Desa</title>
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
        
        .verify-container {
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
        
        .email-icon {
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
        
        .actions-container {
            opacity: 0;
            animation: fadeInUp 0.6s ease 0.7s forwards;
        }
        
        .btn-verify {
            padding: 0.75rem 1.5rem;
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-verify:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
        }
        
        .btn-logout {
            padding: 0.5rem 1rem;
            color: #6b7280;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            background: white;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-logout:hover {
            background: #f9fafb;
            border-color: #d1d5db;
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
            .verify-container {
                grid-template-columns: 1fr;
            }
            .left-panel {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="verify-container">
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
                <h1 class="text-3xl font-bold mb-4">Verifikasi Email Anda</h1>
                <p class="text-blue-100">Langkah terakhir untuk mengaktifkan akun Anda</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div>
                    <h3 class="font-semibold">Keamanan Akun</h3>
                    <p class="text-blue-100 text-sm">Verifikasi email untuk memastikan keamanan akun Anda</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <div>
                    <h3 class="font-semibold">Notifikasi Penting</h3>
                    <p class="text-blue-100 text-sm">Terima notifikasi dan pembaruan sistem</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div>
                    <h3 class="font-semibold">Akses Penuh</h3>
                    <p class="text-blue-100 text-sm">Dapatkan akses penuh ke semua fitur sistem</p>
                </div>
            </div>
        </div>
        
        <!-- Right Panel - Verification Content -->
        <div class="right-panel">
            <div class="logo-container">
                <div class="logo">
                    <img src="https://png.pngtree.com/png-clipart/20230124/ourmid/pngtree-regional-head-avatar-png-image_6569018.png" 
                         alt="Pak Kades">
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Pakkades</h1>
                    <p class="text-gray-600 text-sm">Verifikasi Email</p>
                </div>
            </div>

            <!-- Email Icon -->
            <div class="text-center email-icon">
                <i class="fas fa-envelope-open-text"></i>
            </div>

            <!-- Message Content -->
            <div class="message-content text-center mb-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-3">
                    Terima Kasih Telah Mendaftar!
                </h2>
                <p class="text-gray-600 mb-4">
                    Sebelum memulai, mohon verifikasi alamat email Anda dengan mengklik tautan yang baru saja kami kirim ke email Anda. Jika Anda tidak menerima email, kami akan dengan senang hati mengirimkan yang lain.
                </p>
            </div>

            <!-- Status Message -->
            @if (session('status') == 'verification-link-sent')
                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg text-green-700 text-sm text-center">
                    <i class="fas fa-check-circle mr-2"></i>
                    Tautan verifikasi baru telah dikirim ke alamat email yang Anda berikan saat pendaftaran.
                </div>
            @endif

            <!-- Actions -->
            <div class="actions-container flex flex-col sm:flex-row gap-4 justify-center items-center">
                <!-- Resend Verification Email -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn-verify">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Kirim Ulang Email Verifikasi
                    </button>
                </form>

                <!-- Log Out -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn-logout">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Keluar
                    </button>
                </form>
            </div>

            <!-- Additional Info -->
            <div class="mt-8 pt-6 border-t border-gray-200 text-center">
                <p class="text-gray-600 text-sm">
                    Butuh bantuan? 
                    <a href="#" class="text-indigo-600 hover:text-indigo-500 font-medium">
                        Hubungi Administrator
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