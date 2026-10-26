# Craftman Portfolio

Website portfolio untuk tukang kayu / craftsman profesional, dibangun dengan **Laravel**.

## 📁 Struktur Proyek

```
craftman-portfolio/
│
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   └── Admin/
│   │       ├── ProjectController.php
│   │       ├── TestimonialController.php
│   │       └── ExperienceController.php
│   └── Models/
│       ├── Project.php
│       ├── Testimonial.php
│       └── Experience.php
│
├── database/
│   ├── migrations/
│   │   ├── create_projects_table.php
│   │   ├── create_testimonials_table.php
│   │   └── create_experiences_table.php
│   └── seeders/
│       └── DatabaseSeeder.php
│
├── public/assets/
│   ├── css/style.css
│   ├── js/app.js
│   └── images/
│       ├── hero.png
│       ├── tools-projects.png
│       ├── experience.png
│       └── testimonials-footer.png
│
├── resources/views/
│   ├── layouts/app.blade.php
│   ├── home/index.blade.php
│   └── admin/
│       ├── projects/
│       ├── testimonials/
│       └── experiences/
│
├── routes/web.php
└── README.md
```

## 🚀 Fitur

- **Home Page** - Landing page dengan hero section, projects, experience timeline, dan testimonials
- **Admin CRUD** - Panel admin untuk mengelola Projects, Testimonials, dan Experiences
- **Responsive Design** - Tampilan optimal di semua ukuran layar
- **Scroll Animations** - Animasi smooth saat scroll menggunakan Intersection Observer

## ⚙️ Instalasi

1. Clone repository ini
2. Jalankan `composer install`
3. Copy `.env.example` ke `.env` dan konfigurasi database
4. Jalankan `php artisan key:generate`
5. Jalankan `php artisan migrate --seed`
6. Jalankan `php artisan storage:link`
7. Jalankan `php artisan serve`

## 🛠️ Tech Stack

- **Backend**: Laravel (PHP)
- **Frontend**: Blade Templates, Vanilla CSS, Vanilla JavaScript
- **Database**: MySQL / SQLite
