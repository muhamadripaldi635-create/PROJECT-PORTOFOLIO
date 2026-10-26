@extends('layouts.app')

@section('title', 'PORTFOLIO  — Muhamad Rivaldi Herdiansyah')

@section('content')

    {{-- ============================================================
         HERO SECTION (Matching Reference Image Layout Exactly)
         ============================================================ --}}
    <section class="hero-section" id="home">
        <div class="hero-ambient-glow"></div>
        <div class="container hero-container">
            
            {{-- Left Column: Intro & Call to Action --}}
            <div class="hero-content">
                <span class="hero-greeting">Hello, I'm Muhamad Rivaldi</span>
                
                <h1 class="hero-title">
                    <span class="hero-accent-text" id="typewriterText">A Web Designer</span>
                    <span class="typewriter-cursor">|</span>
                </h1>

                <p class="hero-description">
                Turning Complex Logic into Seamless Digital Experiences.
                a Full-Stack Web Developer & System Architect focused on full-scale web application development, system architecture design, and spatial data processing.
                I combine strong engineering logic with user-centered design to build responsive, well-structured, and efficient digital solutions.
                </p>

                {{-- Circular Social Icons Row matching Reference --}}
                <div class="hero-social-links">
                    <a href="https://instagram.com" target="_blank" class="social-circle-btn" aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://github.com" target="_blank" class="social-circle-btn" aria-label="GitHub">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="https://linkedin.com" target="_blank" class="social-circle-btn" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>

                {{-- Action Buttons --}}
                <div class="hero-cta-group">
                    <a href="https://wa.me/6283808567541?text=Halo%20Rivaldi,%20saya%20melihat%20portfolio%20kamu%20dan%20ingin%20berdiskusi%20proyek." target="_blank" class="btn-primary-orange">
                        <i class="fa-brands fa-whatsapp"></i> Hire Me
                    </a>
                    <a href="#about" class="btn-outline-white">
                        <i class="fa-solid fa-user"></i> About Me
                    </a>
                    <a href="#projects" class="btn-outline-white">
                        <i class="fa-solid fa-layer-group"></i> My Works
                    </a>
                </div>


            </div>

            {{-- Right Column: User Portrait Image --}}
            <div class="hero-image-wrapper">
                <div class="hero-image-backdrop"></div>
                <div class="hero-image-frame">
                    <img src="{{ asset('assets/images/hero-rivaldi.jpg') }}" alt="Muhamad Rivaldi Herdiansyah — Web Designer & Developer" class="hero-user-photo">
                </div>


            </div>

        </div>
    </section>

    {{-- ============================================================
         ABOUT ME SECTION ("ABOUT")
         ============================================================ --}}
    <section class="section section-dark" id="about">
        <div class="container">
            <div class="section-title-wrap">
                <span class="section-badge">TENTANG SAYA</span>
                <h2 class="section-heading">ABOUT <span class="text-orange">ME</span></h2>
                <div class="section-divider-line"></div>
            </div>

            <div class="about-grid">
                {{-- Left: Portrait Card --}}
                <div class="about-card-portrait">
                    <div class="about-photo-wrapper">
                        <img src="{{ asset('assets/images/profile-user.jpg') }}" alt="Muhamad Rivaldi Herdiansyah" class="about-photo-img">
                        <div class="about-photo-glow"></div>
                    </div>
                    <div class="">
                    </div>
                </div>

                {{-- Right: Bio & Key Skills --}}
                <div class="about-details">
                    <h3 class="about-lead-title">
                        Saya <span class="text-orange">Muhamad Rivaldi Herdiansyah</span>
                    </h3>
                    <p class="about-paragraph">
                        Lulusan <strong>S1 Teknik Informatika</strong> dari <strong>Universitas Nusa Putra</strong> yang memiliki fondasi kuat dalam pemikiran analitis, pengelolaan data, dan pengembangan solusi berbasis teknologi digital. Berpengalaman dalam merancang serta menyelesaikan berbagai proyek secara terstruktur, dengan selalu mengedepankan ketelitian, efisiensi, dan efektivitas alur kerja. Memiliki kemampuan komunikasi profesional dan pengalaman organisasi yang teruji dalam membangun kolaborasi lintas fungsi, memecahkan masalah, serta mengelola tenggat waktu secara tepat. Berdedikasi tinggi untuk terus berkembang dan siap memberikan kontribusi nyata bagi kelancaran operasional maupun pencapaian target strategis perusahaan.
                    </p>

                    {{-- Personal Information Matrix --}}
                    <div class="about-info-matrix">
                        <div class="info-row">
                            <span class="info-label"><i class="fa-solid fa-user text-orange"></i> Nama:</span>
                            <span class="info-value">Muhamad Rivaldi Herdiansyah</span>
                        </div>
                        <div class="info-row">
                            <span class="info-label"><i class="fa-solid fa-graduation-cap text-orange"></i> Pendidikan:</span>
                            <span class="info-value">S1 Teknik Informatika (Univ. Nusa Putra)</span>
                        </div>
                        <div class="info-row">
                            <span class="info-label"><i class="fa-solid fa-envelope text-orange"></i> Email:</span>
                            <span class="info-value">Muhamadripaldi635@gmail.com</span>
                        </div>
                        <div class="info-row">
                            <span class="info-label"><i class="fa-brands fa-whatsapp text-orange"></i> Telepon/WA:</span>
                            <span class="info-value"><a href="https://wa.me/6283808567541" target="_blank" style="color: inherit; text-decoration: none;">+62 838-0856-7541</a></span>
                        </div>
                        <div class="info-row">
                            <span class="info-label"><i class="fa-solid fa-location-dot text-orange"></i> Lokasi:</span>
                            <span class="info-value">Indonesia (Tersedia Remote & On-Site)</span>
                        </div>
                        <div class="info-row">
                            <span class="info-label"><i class="fa-solid fa-briefcase text-orange"></i> Status:</span>
                            <span class="info-value text-success"><i class="fa-solid fa-circle-check"></i> Available for Hire & Projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         SERVICES SECTION ("SERVICES")
         ============================================================ --}}
    <section class="section section-darker" id="services">
        <div class="container">
            <div class="section-title-wrap">
                <span class="section-badge">LAYANAN UNGGULAN</span>
                <h2 class="section-heading">OUR <span class="text-orange">SERVICES</span></h2>
                <p class="section-subtext">Solusi komprehensif mulai dari desain visual, rekayasa website modern, hingga pemetaan spasial dan integrasi database.</p>
                <div class="section-divider-line"></div>
            </div>
        
            <div class="services-grid">
                
                {{-- Service 1 --}}
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fa-solid fa-palette"></i>
                    </div>
                    <h3 class="service-title">Web & UI/UX Design</h3>
                    <p class="service-desc">
                        Merancang antarmuka digital yang intuitif, estetis, dan responsif. Berfokus pada pengalaman pengguna yang optimal melalui wireframing, sistem desain terstruktur, dan prototipe interaktif menggunakan Figma.
                    </p>
                    <ul class="service-features-list">
                        <li><i class="fa-solid fa-check text-orange"></i> High-Fidelity UI Prototype</li>
                        <li><i class="fa-solid fa-check text-orange"></i> Design System & Component Library</li>
                        <li><i class="fa-solid fa-check text-orange"></i> Mobile-First Responsive Design</li>
                    </ul>
                </div>

                {{-- Service 2 --}}
                <div class="service-card active-featured">
                    <div class="service-icon-box">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h3 class="service-title">Full-Stack Web Development</h3>
                    <p class="service-desc">
                        Membangun aplikasi web modern berkinerja tinggi berbasis ekosistem PHP 8 & Laravel 11. Mengutamakan clean code, arsitektur sistem yang andal, efisiensi basis data, serta keamanan akses pengguna
                    </p>
                    <ul class="service-features-list">
                        <li><i class="fa-solid fa-check text-orange"></i> Arsitektur MVC & Clean Code</li>
                        <li><i class="fa-solid fa-check text-orange"></i> Autentikasi Keamanan & Role Access</li>
                        <li><i class="fa-solid fa-check text-orange"></i> SEO Friendly & Fast Load Speed</li>
                    </ul>
                </div>

                {{-- Service 3 --}}
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </div>
                    <h3 class="service-title">WebGIS & Spatial Systems</h3>
                    <p class="service-desc">
                        Mengembangkan sistem informasi geografis berbasis web secara interaktif menggunakan Leaflet.js dan GeoJSON. Berfokus pada visualisasi peta dinamis, pemrosesan kueri spasial, serta filter radius lokasi berbasis algoritma.
                    </p>
                    <ul class="service-features-list">
                        <li><i class="fa-solid fa-check text-orange"></i> Interactive Map Dashboard</li>
                        <li><i class="fa-solid fa-check text-orange"></i> Spatial Query & Radius Filter</li>
                        <li><i class="fa-solid fa-check text-orange"></i> Clustering & Custom Markers</li>
                    </ul>
                </div>

                {{-- Service 4 --}}
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fa-solid fa-network-wired"></i>
                    </div>
                    <h3 class="service-title">Pesat Land Property & Web Application</h3>
                    <p class="service-desc">
                        Mengembangkan sistem informasi dan platform web properti interaktif untuk menyajikan katalog perumahan secara responsif, modern, dan mudah digunakan oleh calon pembeli.
                        Tanggung Jawab & Fitur Utama:
                    </p>
                    <ul class="service-features-list">
                        <li><i class="fa-solid fa-check text-orange"></i> Integrasi Full-Stack & Database Properti</li>
                        <li><i class="fa-solid fa-check text-orange"></i> Modul Pengelolaan & Katalog Perumahan</li>
                        <li><i class="fa-solid fa-check text-orange"></i> Desain Web Responsif & User-Friendly</li>
                    </ul>
                </div>

                {{-- Service 5 --}}
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fa-solid fa-database"></i>
                    </div>
                    <h3 class="service-title">Database Design & Optimization</h3>
                    <p class="service-desc">
                        Perancangan Entity Relationship Diagram (ERD), normalisasi skema basis data relasional, indexing query, serta tuning performa database skala besar.
                    </p>
                    <ul class="service-features-list">
                        <li><i class="fa-solid fa-check text-orange"></i> MySQL, MariaDB, SQLite & Postgre</li>
                        <li><i class="fa-solid fa-check text-orange"></i> Skema Data Normal & Relasional</li>
                        <li><i class="fa-solid fa-check text-orange"></i> Caching & Query Optimization</li>
                    </ul>
                </div>

                {{-- Service 6 --}}
                <div class="service-card">
                    <div class="service-icon-box">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <h3 class="service-title">Web Maintenance & Optimization</h3>
                    <p class="service-desc">
                        Layanan pemeliharaan website agar selalu aman, responsif, dan bebas dari kendala teknis. Berfokus pada perbaikan error, pembaruan sistem, serta peningkatan kecepatan akses website.
                    </p>
                    <ul class="service-features-list">
                        <li><i class="fa-solid fa-check text-orange"></i> Perbaikan Error & Pembaruan Kode</li>
                        <li><i class="fa-solid fa-check text-orange"></i> Pengaturan Server & Keamanan SSL</li>
                        <li><i class="fa-solid fa-check text-orange"></i> Optimasi Kecepatan & Performa Web</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================================
         PORTFOLIO SECTION ("PROJECTS")
         ============================================================ --}}
    <section class="section section-dark" id="projects">
        <div class="container">
            <div class="section-title-wrap">
                <span class="section-badge">KOLEKSI KARYA</span>
                <h2 class="section-heading">FEATURED <span class="text-orange">PROJECTS</span></h2>
                <p class="section-subtext">Showcase portofolio aplikasi web, sistem spasial, dan platform digital yang telah dibangun.</p>
                <div class="section-divider-line"></div>
            </div>

            {{-- Filter Bar --}}
            <div class="portfolio-filter-tabs">
                <button class="filter-tab active" data-filter="all">Semua Proyek</button>
                <button class="filter-tab" data-filter="WebGIS & Spatial">WebGIS & Spatial</button>
                <button class="filter-tab" data-filter="Web Application">Web Application</button>
                <button class="filter-tab" data-filter="Sistem Informasi">Sistem Informasi</button>
                <button class="filter-tab" data-filter="Backend & API">Backend & API</button>
            </div>

            {{-- Projects Grid --}}
            <div class="projects-grid">
                @php
                    $projectThumbnails = [
                        'WebGIS & Spatial' => asset('assets/images/tools-projects.png'),
                        'Web Application' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop',
                        'Sistem Informasi' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop',
                        'Backend & API' => 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?q=80&w=800&auto=format&fit=crop'
                    ];
                @endphp

                @forelse ($projects as $project)
                    @php
                        $categoryName = $project->category ?? 'Web Application';
                        if (!empty($project->image)) {
                            if (str_starts_with($project->image, 'http')) {
                                $imgSrc = $project->image;
                            } elseif (str_starts_with($project->image, 'assets/')) {
                                $imgSrc = asset($project->image);
                            } else {
                                $imgSrc = asset('storage/' . $project->image);
                            }
                        } else {
                            $imgSrc = $projectThumbnails[$categoryName] ?? 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800&auto=format&fit=crop';
                        }
                    @endphp
                    <div class="project-card" data-category="{{ $categoryName }}">
                        <div class="project-card-thumb">
                            <span class="project-badge">{{ $categoryName }}</span>
                            <img src="{{ $imgSrc }}" alt="{{ $project->title }}" loading="lazy">
                            <div class="project-overlay">
                                <a href="https://wa.me/6283808567541?text=Halo%20Rivaldi,%20saya%20tertarik%20melihat%20demo%20proyek%20{{ urlencode($project->title) }}" target="_blank" class="overlay-btn" aria-label="Lihat Detail">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>
                            </div>
                        </div>
                        <div class="project-card-body">
                            <h3 class="project-title">{{ $project->title }}</h3>
                            <p class="project-desc">{{ $project->description }}</p>
                            <div class="project-meta-row">
                                <span class="client-tag"><i class="fa-solid fa-building text-orange"></i> {{ $project->client ?: 'Riset Informatika' }}</span>
                                <a href="https://wa.me/6283808567541?text=Halo%20Rivaldi,%20saya%20tertarik%20dengan%20proyek%20{{ urlencode($project->title) }}" target="_blank" class="project-link-btn">
                                    Detail <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="no-projects-box">
                        <i class="fa-solid fa-code text-orange" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                        <p>Belum ada proyek yang ditampilkan saat ini.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>

    {{-- ============================================================
         REVIEWS / TESTIMONIALS SECTION ("REVIEW")
         ============================================================ --}}
    <section class="section section-darker" id="review">
        <div class="container">
            <div class="section-title-wrap">
                <span class="section-badge">TESTIMONIAL & ULASAN</span>
                <h2 class="section-heading">CLIENT <span class="text-orange">REVIEWS</span></h2>
                <p class="section-subtext">Apa yang dikatakan dosen pembimbing, mitra kolaborasi, dan klien tentang hasil kerja dan etos rekayasa perangkat lunak.</p>
                <div class="section-divider-line"></div>
            </div>

            <div class="testimonials-grid">
                @forelse ($testimonials as $testimonial)
                    <div class="testimonial-card">
                        <div class="testimonial-top">
                            <div class="quote-icon"><i class="fa-solid fa-quote-left text-orange"></i></div>
                            <div class="star-rating">
                                @php $rating = $testimonial->rating ?: 5; @endphp
                                @for ($i = 0; $i < $rating; $i++)
                                    <i class="fa-solid fa-star text-orange"></i>
                                @endfor
                            </div>
                        </div>
                        
                        <p class="testimonial-message">
                            "{{ $testimonial->message }}"
                        </p>

                        <div class="testimonial-author">
                            <div class="author-avatar-wrap">
                                @if ($testimonial->avatar)
                                    <img src="{{ asset('storage/' . $testimonial->avatar) }}" alt="{{ $testimonial->name }}">
                                @else
                                    <span class="avatar-initial">{{ strtoupper(substr($testimonial->name, 0, 1)) }}</span>
                                @endif
                            </div>
                            <div class="author-info">
                                <h4 class="author-name">{{ $testimonial->name }}</h4>
                                <span class="author-role">{{ $testimonial->position ?: 'Mitra Kolaborator' }}{{ $testimonial->company ? ' • ' . $testimonial->company : '' }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="testimonial-card">
                        <div class="testimonial-top">
                            <div class="quote-icon"><i class="fa-solid fa-quote-left text-orange"></i></div>
                            <div class="star-rating">
                                <i class="fa-solid fa-star text-orange"></i>
                                <i class="fa-solid fa-star text-orange"></i>
                                <i class="fa-solid fa-star text-orange"></i>
                                <i class="fa-solid fa-star text-orange"></i>
                                <i class="fa-solid fa-star text-orange"></i>
                            </div>
                        </div>
                        <p class="testimonial-message">
                            "Rivaldi menunjukkan dedikasi luar biasa dalam pengembangan web, mulai dari perancangan arsitektur database hingga penyusunan UI yang sangat rapi dan intuitif."
                        </p>
                        <div class="testimonial-author">
                            <div class="author-avatar-wrap"><span class="avatar-initial">D</span></div>
                            <div class="author-info">
                                <h4 class="author-name">Dosen Pembimbing Teknik Informatika</h4>
                                <span class="author-role">Universitas Nusa Putra</span>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>



    {{-- ============================================================
         BLOG SECTION ("BLOG")
         ============================================================ --}}
    <section class="section section-darker" id="blog">
        <div class="container">
            <div class="section-title-wrap">
                <span class="section-badge">ARTIKEL & WAWASAN</span>
                <h2 class="section-heading">LATEST <span class="text-orange">BLOG</span></h2>
                <p class="section-subtext">Catatan rekayasa perangkat lunak, eksplorasi arsitektur web modern, dan tips optimasi sistem.</p>
                <div class="section-divider-line"></div>
            </div>

            <div class="blog-grid">
                
                {{-- Blog Item 1 --}}
                <article class="blog-card">
                    <div class="blog-thumb">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=800&auto=format&fit=crop" alt="Arsitektur Web Modern" loading="lazy">
                        <span class="blog-category-badge">Web Architecture</span>
                    </div>
                    <div class="blog-body">
                        <div class="blog-meta-date">
                            <i class="fa-regular fa-calendar text-orange"></i> 24 Sep 2026 • 5 min read
                        </div>
                        <h3 class="blog-title">Membangun Web Application Skalabel dengan Laravel 11 & Clean Architecture</h3>
                        <p class="blog-excerpt">
                            Strategi memisahkan business logic, service layer, dan repository pattern untuk aplikasi berskala enterprise yang mudah dimaintain.
                        </p>
                        <a href="https://wa.me/6283808567541?text=Halo%20Rivaldi,%20saya%20ingin%20membaca%20lebih%20lanjut%20tentang%20artikel%20Laravel%20kamu." target="_blank" class="blog-read-link">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                {{-- Blog Item 2 --}}
                <article class="blog-card">
                    <div class="blog-thumb">
                        <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=800&auto=format&fit=crop" alt="WebGIS Leaflet" loading="lazy">
                        <span class="blog-category-badge">WebGIS & Spatial</span>
                    </div>
                    <div class="blog-body">
                        <div class="blog-meta-date">
                            <i class="fa-regular fa-calendar text-orange"></i> 18 Sep 2026 • 7 min read
                        </div>
                        <h3 class="blog-title">Visualisasi Data Spasial Real-Time dengan Leaflet.js dan GeoJSON</h3>
                        <p class="blog-excerpt">
                            Teknik rendering ribuan titik koordinat dan poligon wilayah tanpa membebani browser pengguna menggunakan clustering algoritma.
                        </p>
                        <a href="https://wa.me/6283808567541?text=Halo%20Rivaldi,%20saya%20ingin%20berdiskusi%20tentang%20WebGIS%20dan%20Leaflet." target="_blank" class="blog-read-link">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                {{-- Blog Item 3 --}}
                <article class="blog-card">
                    <div class="blog-thumb">
                        <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=800&auto=format&fit=crop" alt="UI UX Design Trends" loading="lazy">
                        <span class="blog-category-badge">UI/UX Design</span>
                    </div>
                    <div class="blog-body">
                        <div class="blog-meta-date">
                            <i class="fa-regular fa-calendar text-orange"></i> 10 Sep 2026 • 4 min read
                        </div>
                        <h3 class="blog-title">Prinsip Desain Dark Mode Modern & Hirarki Visual untuk Konversi Tinggi</h3>
                        <p class="blog-excerpt">
                            Bagaimana memadukan kontras gelap matte, aksen warna hangat, serta micro-animation untuk meningkatkan engagement pengguna secara signifikan.
                        </p>
                        <a href="https://wa.me/6283808567541?text=Halo%20Rivaldi,%20saya%20tertarik%20dengan%20desain%20UI/UX%20kamu." target="_blank" class="blog-read-link">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

            </div>
        </div>
    </section>



@endsection
