<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Testimonial;
use App\Models\Experience;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Admin User
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Muhamad Rivaldi Herdiansyah',
                'password' => Hash::make('password123'),
            ]
        );

        // Clear old records
        Project::truncate();
        Testimonial::truncate();
        Experience::truncate();


        // Seed Projects (Teknik Informatika / Software Engineering)
        Project::create([
            'title' => 'Sistem Informasi Geografis (GIS) Pemetaan Perumahan',
            'description' => 'Aplikasi web pemetaan spasial perumahan interaktif berbasis WebGIS. Dilengkapi clustering titik koordinat, visualisasi layer batas wilayah polygon, analisis radius fasilitas umum terdekat, serta dashboard analitik harga tanah.',
            'category' => 'WebGIS & Spatial',
            'client' => 'Dinas Perumahan & Pemukiman',
            'url' => 'https://github.com',
        ]);

        Project::create([
            'title' => 'Enterprise Point of Sale (POS) & Smart Inventory',
            'description' => 'Sistem ERP retail terintegrasi multi-cabang dengan algoritma Economic Order Quantity (EOQ) untuk prediksi stok otomatis, integrasi barcode scanner real-time, dan payment gateway Midtrans (QRIS, VA).',
            'category' => 'Web Application',
            'client' => 'PT Mitra Retail Mandiri',
            'url' => 'https://github.com',
        ]);

        Project::create([
            'title' => 'Portal Layanan Akademik & E-Learning Terpadu',
            'description' => 'Sistem informasi akademik kampus dengan Role-Based Access Control (RBAC), penjadwalan kuliah otomatis, sistem presensi QR code dinamis, pengumpulan tugas mahasiswa, dan modul kalkulasi IPK terpusat.',
            'category' => 'Sistem Informasi',
            'client' => 'Fakultas Ilmu Komputer',
            'url' => 'https://github.com',
        ]);

        Project::create([
            'title' => 'High-Throughput RESTful API & Microservices Auth',
            'description' => 'Arsitektur backend scalable dengan Laravel Sanctum, Redis caching layer untuk response time < 50ms, containerization Docker, dan integrasi webhook notifikasi Telegram & WhatsApp Gateway.',
            'category' => 'Backend & API',
            'client' => 'Fintech Solution ID',
            'url' => 'https://github.com',
            'image' => 'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?q=80&w=800&auto=format&fit=crop',
        ]);

        Project::create([
            'title' => 'E-Commerce Multi-Vendor & Payment Gateway Integration',
            'description' => 'Platform marketplace e-commerce multi-vendor dengan kalkulasi ongkos kirim ekspedisi otomatis real-time, manajemen katalog produk dinamis, keranjang belanja interaktif, dan integrasi payment gateway Midtrans.',
            'category' => 'Web Application',
            'client' => 'PT Niaga Digital Pratama',
            'url' => 'https://github.com',
            'image' => 'assets/images/project-ecommerce.jpg',
        ]);

        Project::create([
            'title' => 'WebGIS Pemetaan Zonasi Rawan Bencana & Jalur Evakuasi',
            'description' => 'Sistem informasi geografis berbasis web untuk analisis spasial kerawanan bencana alam, visualisasi polygon interaktif dengan Leaflet.js, routing jalur evakuasi tercepat, dan pemantauan posko darurat secara real-time.',
            'category' => 'WebGIS & Spatial',
            'client' => 'BPBD Wilayah Jawa Barat',
            'url' => 'https://github.com',
            'image' => 'assets/images/project-webgis-evacuation.jpg',
        ]);

        // Seed Testimonials (Dosen, Tech Lead, Klien)
        Testimonial::create([
            'name' => 'Dr. Ir. Hendra Saputra, M.T.',
            'position' => 'Dosen Pembimbing & Peneliti',
            'company' => 'Fakultas Teknik Informatika',
            'message' => 'Kemampuan logika algoritma, pemahaman rekayasa perangkat lunak, serta penerapan arsitektur clean code sangat mengagumkan. Proyek GIS yang dibangun memiliki performa query spasial yang sangat optimal.',
            'rating' => 5,
        ]);

        Testimonial::create([
            'name' => 'Dimas Pratama, S.Kom.',
            'position' => 'Lead Software Architect',
            'company' => 'Nusantara Tech Studio',
            'message' => 'Developer yang berdedikasi tinggi dan sangat cepat mempelajari teknologi baru. Integrasi RESTful API dan database schema yang dirancang sangat rapi dan mudah di-maintain oleh tim.',
            'rating' => 5,
        ]);

        Testimonial::create([
            'name' => 'Sarah Anindita',
            'position' => 'Product Owner',
            'company' => 'PT Sinergi Digital',
            'message' => 'Sangat komunikatif dalam menterjemahkan kebutuhan bisnis menjadi fitur teknis yang solid. UI/UX dashboard yang dibuat sangat intuitif dan backend-nya bekerja tanpa kendala.',
            'rating' => 5,
        ]);

        // Seed Experiences (Perjalanan Karir Teknik Informatika)
        Experience::create([
            'title' => 'Full-Stack Software Engineer',
            'company' => 'Freelance & Kontrak Proyek Digital',
            'description' => 'Merancang dan mengembangkan aplikasi web skala produksi berbasis Laravel 11, Vue.js, TailwindCSS, dan database MySQL/PostgreSQL. Menerapkan REST API, Redis caching, dan automated testing.',
            'start_date' => '2023-01-01',
            'end_date' => null,
            'is_current' => true,
        ]);

        Experience::create([
            'title' => 'Asisten Laboratorium Komputer & Jaringan',
            'company' => 'Laboratorium Teknik Informatika Kampus',
            'description' => 'Memandu lebih dari 120 mahasiswa dalam praktikum Algoritma & Struktur Data, Pemrograman Berorientasi Objek (OOP), Basis Data Relasional, serta instalasi dan konfigurasi server Linux Ubuntu.',
            'start_date' => '2022-08-01',
            'end_date' => '2023-12-31',
            'is_current' => false,
        ]);

        Experience::create([
            'title' => 'Web Developer Intern',
            'company' => 'PT Solusi Teknologi Nusantara',
            'description' => 'Mengembangkan modul manajemen data master, optimalisasi query SQL query optimization, dan integrasi pelaporan otomatis berbasis Excel & PDF untuk software ERP internal perusahaan.',
            'start_date' => '2022-01-01',
            'end_date' => '2022-07-31',
            'is_current' => false,
        ]);
    }
}
