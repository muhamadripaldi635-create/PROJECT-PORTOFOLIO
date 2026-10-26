<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin — Portfolio Dashboard</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        :root {
            --bg-black: #08080a;
            --bg-main: #0c0c0f;
            --bg-card: #131318;
            --bg-card-hover: #191a22;
            --bg-input: #181920;
            --orange: #f97316;
            --orange-hover: #ea580c;
            --orange-glow: rgba(249, 115, 22, 0.35);
            --orange-subtle: rgba(249, 115, 22, 0.12);
            --text-white: #ffffff;
            --text-heading: #f3f4f6;
            --text-body: #9ca3af;
            --text-muted: #6b7280;
            --border-card: rgba(255, 255, 255, 0.1);
            --border-orange: rgba(249, 115, 22, 0.45);
            --font-heading: 'Outfit', 'Plus Jakarta Sans', sans-serif;
            --font-body: 'Inter', -apple-system, sans-serif;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: var(--bg-black);
            background-image: 
                radial-gradient(circle at 15% 20%, rgba(249, 115, 22, 0.12) 0%, transparent 40%),
                radial-gradient(circle at 85% 80%, rgba(6, 182, 212, 0.08) 0%, transparent 40%);
            color: var(--text-heading);
            font-family: var(--font-body);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px 16px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 440px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--text-body);
            text-decoration: none;
            font-size: 0.9rem;
            margin-bottom: 24px;
            transition: color 0.2s ease;
        }

        .back-link:hover {
            color: var(--orange);
        }

        .login-card {
            background: var(--bg-card);
            border: 1px solid var(--border-card);
            border-radius: 20px;
            padding: 36px 32px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(12px);
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--orange), transparent);
        }

        .brand-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--orange-subtle);
            border: 1px solid var(--border-orange);
            color: var(--orange);
            padding: 6px 14px;
            border-radius: 999px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 16px;
        }

        .login-title {
            font-family: var(--font-heading);
            font-size: 1.85rem;
            font-weight: 700;
            margin-bottom: 8px;
            color: var(--text-white);
        }

        .login-desc {
            color: var(--text-body);
            font-size: 0.95rem;
            margin-bottom: 28px;
            line-height: 1.5;
        }

        .alert {
            padding: 12px 16px;
            border-radius: 12px;
            font-size: 0.9rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid rgba(239, 68, 68, 0.35);
            color: #fca5a5;
        }

        .alert-success {
            background: rgba(16, 185, 129, 0.15);
            border: 1px solid rgba(16, 185, 129, 0.35);
            color: #6ee7b7;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text-body);
            margin-bottom: 8px;
        }

        .input-group {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            color: var(--text-muted);
            font-size: 1rem;
            pointer-events: none;
        }

        .form-control {
            width: 100%;
            background: var(--bg-input);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 12px;
            padding: 14px 16px 14px 44px;
            color: var(--text-white);
            font-size: 0.95rem;
            font-family: inherit;
            outline: none;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            border-color: var(--orange);
            box-shadow: 0 0 0 3px rgba(249, 115, 22, 0.2);
            background: #1d1e28;
        }

        .toggle-password {
            position: absolute;
            right: 14px;
            background: none;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            padding: 6px;
            font-size: 1rem;
            transition: color 0.2s ease;
        }

        .toggle-password:hover {
            color: var(--orange);
        }

        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
            font-size: 0.875rem;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--text-body);
            cursor: pointer;
            user-select: none;
        }

        .checkbox-label input {
            accent-color: var(--orange);
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        .btn-submit {
            width: 100%;
            background: linear-gradient(135deg, var(--orange), #ea580c);
            color: #fff;
            border: none;
            border-radius: 12px;
            padding: 15px;
            font-size: 1rem;
            font-weight: 600;
            font-family: var(--font-heading);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.25s ease;
            box-shadow: 0 6px 20px var(--orange-glow);
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(249, 115, 22, 0.5);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .default-cred-box {
            margin-top: 24px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px dashed rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            padding: 14px;
            font-size: 0.825rem;
            color: var(--text-body);
        }

        .default-cred-title {
            color: var(--orange-light);
            font-weight: 600;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .cred-item {
            display: flex;
            justify-content: space-between;
            margin-top: 4px;
        }

        .cred-code {
            color: var(--text-white);
            font-family: monospace;
            background: rgba(255, 255, 255, 0.08);
            padding: 2px 6px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <div class="login-wrapper">
        <a href="{{ url('/') }}" class="back-link">
            <i class="fa-solid fa-arrow-left"></i>
            Kembali ke Beranda
        </a>

        <div class="login-card">
            <div class="brand-badge">
                <i class="fa-solid fa-shield-halved"></i>
                Admin Portal
            </div>

            <h1 class="login-title">Masuk ke Dashboard</h1>
            <p class="login-desc">Kelola portofolio, projects, review testimoni, dan data pengalaman Anda dari HP atau Tablet.</p>

            @if (session('success'))
                <div class="alert alert-success">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-error">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="email" class="form-label">Email Administrator</label>
                    <div class="input-group">
                        <i class="fa-regular fa-envelope input-icon"></i>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-control" 
                            placeholder="nama@domain.com"
                            value="{{ old('email', 'admin@gmail.com') }}" 
                            required 
                            autofocus
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <i class="fa-solid fa-lock input-icon"></i>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-control" 
                            placeholder="••••••••"
                            value="password123"
                            required
                        >
                        <button type="button" class="toggle-password" id="togglePasswordBtn" aria-label="Toggle Password Visibility">
                            <i class="fa-regular fa-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>

                <div class="form-options">
                    <label class="checkbox-label">
                        <input type="checkbox" name="remember" id="remember" checked>
                        <span>Ingat saya di perangkat ini</span>
                    </label>
                </div>

                <button type="submit" class="btn-submit">
                    <span>Masuk Sekarang</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </form>

            <div class="default-cred-box">
                <div class="default-cred-title">
                    <i class="fa-solid fa-key"></i>
                    Akun Bawaan (Default):
                </div>
                <div class="cred-item">
                    <span>Email:</span>
                    <span class="cred-code">admin@gmail.com</span>
                </div>
                <div class="cred-item">
                    <span>Password:</span>
                    <span class="cred-code">password123</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePasswordBtn = document.getElementById('togglePasswordBtn');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePasswordBtn.addEventListener('click', () => {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';
            eyeIcon.className = isPassword ? 'fa-regular fa-eye-slash' : 'fa-regular fa-eye';
        });
    </script>
</body>
</html>
