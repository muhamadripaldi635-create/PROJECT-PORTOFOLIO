<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta name="description" content="Portfolio Web Designer & Full-Stack Software Engineer — Muhamad Rivaldi Herdiansyah. UI/UX Design, Modern Web Development, WebGIS, dan Arsitektur Sistem Skalabel.">
    <title>@yield('title', 'PORTFOLIO VIEW — Muhamad Rivaldi Herdiansyah')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo-rm.png') }}">
    
    <!-- Font Awesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v={{ time() }}">
    @stack('styles')
</head>
<body>

    <!-- Header Navigation matching PORTFOLIO VIEW Reference -->
    <header class="navbar-wrapper">
        <nav class="navbar" id="mainNavbar">
            <a href="{{ url('/') }}" class="navbar-brand">
                <span class="brand-title">PORTFOLIO</span>
            </a>

            <ul class="navbar-nav" id="navbarNav">
                <li><a href="#home" class="nav-link active">HOME</a></li>
                <li><a href="#about" class="nav-link">ABOUT</a></li>
                <li><a href="#services" class="nav-link">SERVICES</a></li>
                <li><a href="#projects" class="nav-link">PORTFOLIO</a></li>
                <li><a href="#review" class="nav-link">REVIEW</a></li>
                <li><a href="#pricing" class="nav-link">PRICING</a></li>
                <li><a href="#blog" class="nav-link">BLOG</a></li>

            </ul>

            <div class="nav-actions">
                <button class="nav-search-btn" id="searchToggleBtn" aria-label="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                @auth
                    <a href="{{ route('admin.projects.index') }}" class="nav-login-btn" title="Dashboard Admin" style="display: inline-flex; align-items: center; gap: 6px; color: var(--orange); font-size: 0.85rem; font-weight: 600; text-decoration: none; padding: 6px 12px; border: 1px solid var(--border-orange); border-radius: 999px;">
                        <i class="fa-solid fa-gauge-high"></i> <span class="d-none d-sm-inline">Admin</span>
                    </a>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline; margin: 0;">
                        @csrf
                        <button type="submit" title="Keluar" style="background: none; border: none; color: var(--text-body); cursor: pointer; padding: 6px 8px; font-size: 0.95rem;">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="nav-login-btn" title="Login Admin" style="display: inline-flex; align-items: center; gap: 6px; color: var(--text-white); font-size: 0.85rem; font-weight: 600; text-decoration: none; padding: 6px 14px; border: 1px solid rgba(255,255,255,0.15); border-radius: 999px;">
                        <i class="fa-solid fa-lock"></i> <span>Login</span>
                    </a>
                @endauth
                <button class="mobile-toggle" id="mobileNavToggle" aria-label="Toggle Navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </nav>
    </header>

    <!-- Search Modal Popup -->
    <div class="search-modal-backdrop" id="searchModal">
        <div class="search-modal-dialog">
            <div class="search-modal-header">
                <h3>Cari di Portfolio</h3>
                <button class="search-modal-close" id="closeSearchBtn"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="search-modal-body">
                <div class="search-input-wrap">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" id="quickSearchInput" placeholder="Ketik kata kunci (misal: Laravel, WebGIS, UI/UX, REST API)..." autofocus>
                </div>
                <div class="search-quick-tags">
                    <span>Populer:</span>
                    <a href="#projects" class="search-tag">Web Design</a>
                    <a href="#projects" class="search-tag">Laravel</a>
                    <a href="#projects" class="search-tag">WebGIS</a>
                    <a href="#services" class="search-tag">UI/UX</a>
                    <a href="#pricing" class="search-tag">Paket Web</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Premium Dark Footer -->
    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-brand">
                    <h3 class="footer-brand-title">PORTFOLIO VIEW</h3>
                    <p class="footer-bio">
                        Mendedikasikan kemampuan rekayasa perangkat lunak dan desain UI/UX untuk membangun website modern, sistem informasi handal, dan solusi arsitektur data yang efisien serta bernilai bisnis tinggi.
                    </p>
                    <div class="footer-social-row">
                        <a href="https://facebook.com" target="_blank" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com" target="_blank" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://youtube.com" target="_blank" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://instagram.com" target="_blank" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://github.com" target="_blank" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                        <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="footer-column">
                    <h4>Navigasi</h4>
                    <ul class="footer-links-list">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#about">ABOUT ME</a></li>
                        <li><a href="#services">SERVICES</a></li>
                        <li><a href="#projects">PORTFOLIO</a></li>
                        <li><a href="#review">CLIENT REVIEW</a></li>
                        <li><a href="#pricing">PRICING</a></li>
                        <li><a href="#blog">BLOG POSTS</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Layanan Utama</h4>
                    <ul class="footer-links-list">
                        <li><a href="#services">Modern Web Design & Prototyping</a></li>
                        <li><a href="#services">Full-Stack Web Development</a></li>
                        <li><a href="#services">WebGIS & Pemetaan Spasial</a></li>
                        <li><a href="#services">RESTful API & Integrasi Backend</a></li>
                        <li><a href="#services">Optimasi Database & Performa</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Kontak & Info</h4>
                    <ul class="footer-contact-info">
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <span>Muhamadripaldi635@gmail.com</span>
                        </li>
                        <li>
                            <i class="fa-brands fa-whatsapp"></i>
                            <span><a href="https://wa.me/6283808567541" target="_blank" style="color: inherit; text-decoration: none;">+62 838-0856-7541</a></span>
                        </li>
                        <li>
                            <i class="fa-solid fa-graduation-cap"></i>
                            <span>S1 Teknik Informatika (Universitas Nusa Putra)</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Indonesia (Remote & On-Site Available)</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} <strong>PORTFOLIO VIEW</strong> — Muhamad Rivaldi Herdiansyah. All rights reserved.</p>
                <div class="footer-bottom-links">
                    <a href="#home">Back to Top <i class="fa-solid fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top floating button -->
    <a href="#home" class="btn-back-to-top" id="backToTopBtn" aria-label="Back to top">
        <i class="fa-solid fa-chevron-up"></i>
    </a>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}?v={{ time() }}"></script>
    @stack('scripts')
</body>
</html>
