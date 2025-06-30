# 💅 RasaBeauty Bar - Salon Reservation System

<div align="center">
  <img src="public/images/rasa.png" alt="RasaBeauty Bar Logo" width="120" height="120">
  
  [![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
  [![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
  [![Filament](https://img.shields.io/badge/Filament-3.x-F59E0B?style=for-the-badge&logo=laravel&logoColor=white)](https://filamentphp.com)
  [![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)](LICENSE)
</div>

## 📖 About

**RasaBeauty Bar** adalah sistem reservasi online modern untuk salon kecantikan yang mengkhususkan diri pada perawatan kuku dan bulu mata. Sistem ini dibangun dengan Laravel dan Filament Admin Panel untuk memberikan pengalaman yang seamless bagi pelanggan dan admin.

### ✨ Fitur Utama

- 🎨 **Website Responsif** - Design modern dengan tema pink yang elegan
- 📱 **Mobile-First Design** - Optimized untuk semua perangkat
- 📅 **Sistem Reservasi** - Booking online yang mudah dan intuitif
- 💬 **WhatsApp Integration** - Konfirmasi reservasi langsung via WhatsApp
- 🎛️ **Admin Dashboard** - Panel admin dengan analytics dan manajemen data
- 📊 **Real-time Analytics** - Dashboard dengan insights pelanggan dan reservasi
- 🔒 **Secure & Reliable** - Built dengan Laravel security best practices

## 🛠️ Tech Stack

- **Backend**: Laravel 10.x
- **Frontend**: HTML5, CSS3, JavaScript (Vanilla)
- **Admin Panel**: Filament 3.x
- **Database**: MySQL
- **Styling**: Custom CSS dengan responsive design
- **Icons & Fonts**: Google Fonts, Custom Icons

## 🚀 Installation

### Prerequisites

- PHP 8.1 atau lebih tinggi
- Composer
- Node.js & NPM
- MySQL/MariaDB
- Web server (Apache/Nginx)

### Step-by-Step Installation

1. **Clone Repository**
   ```bash
   git clone https://github.com/LuthfiMirza/rasabeautybarsalon.git
   cd rasabeautybarsalon
   ```

2. **Install Dependencies**
   ```bash
   # Install PHP dependencies
   composer install
   
   # Install Node dependencies
   npm install
   ```

3. **Environment Setup**
   ```bash
   # Copy environment file
   cp .env.example .env
   
   # Generate application key
   php artisan key:generate
   ```

4. **Database Configuration**
   
   Edit file `.env` dan sesuaikan konfigurasi database:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=rasa_beauty_bar
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Database Migration**
   ```bash
   # Create database
   php artisan migrate
   
   # Seed data (optional)
   php artisan db:seed
   ```

6. **Create Admin User**
   ```bash
   php artisan make:filament-user
   ```

7. **Build Assets**
   ```bash
   npm run build
   ```

8. **Start Development Server**
   ```bash
   php artisan serve
   ```

   Website akan tersedia di: `http://localhost:8000`
   
   Admin panel: `http://localhost:8000/admin`

## 📁 Project Structure

```
rasabeautybarsalon/
├── app/
│   ├── Filament/           # Admin panel components
│   │   ├── Pages/          # Custom admin pages
│   │   ├── Resources/      # Resource management
│   │   └── Widgets/        # Dashboard widgets
│   ├── Http/
│   │   └── Controllers/    # Application controllers
│   └── Models/             # Eloquent models
├── database/
│   ├── migrations/         # Database migrations
│   └── seeders/           # Database seeders
├── public/
│   ├── css/               # Stylesheets
│   ├── js/                # JavaScript files
│   └── images/            # Static images
├── resources/
│   └── views/             # Blade templates
└── routes/                # Application routes
```

## 🎨 Features Overview

### 🏠 Frontend Website

- **Homepage**: Hero section dengan informasi salon
- **About Page**: Informasi detail tentang RasaBeauty Bar
- **Services**: Daftar layanan yang tersedia
- **Reservation**: Form booking online
- **Contact**: Informasi kontak dan lokasi

### 🎛️ Admin Dashboard

- **Dashboard Analytics**: Overview statistik reservasi
- **Reservation Management**: Kelola semua reservasi
- **Customer Insights**: Analytics pelanggan
- **Service Analytics**: Popularitas layanan
- **Peak Hours Analysis**: Analisis jam sibuk

### 📱 Mobile Features

- **Responsive Design**: Optimized untuk mobile
- **Touch-Friendly**: Interface yang mudah digunakan
- **Mobile Navigation**: Hamburger menu yang smooth
- **WhatsApp Integration**: Quick contact via WhatsApp

## 🎯 Services Available

- 💅 **Nail Art** - Seni kuku kreatif
- 🧼 **Remove Nail** - Pembersihan kuku
- ✋ **Manicure** - Perawatan kuku tangan
- 🦶 **Pedicure** - Perawatan kuku kaki
- 👁️ **Eyelash Russian** - Ekstensi bulu mata Russian
- 👁️ **Eyelash Japanese** - Ekstensi bulu mata Japanese
- 🧹 **Remove Eyelash** - Pembersihan ekstensi
- 🌟 **Lashlift** - Perawatan angkat bulu mata

## 📞 Contact Information

- **📍 Alamat**: Ruko Alpiana No 21, Jalan Boulevard, Kota Depok, Jawa Barat
- **📱 Phone**: 087816658903
- **📸 Instagram**: [@rasabeautybar](https://www.instagram.com/rasabeautybar)
- **🕒 Jam Operasional**: 
  - Selasa - Minggu: 12:00 - 20:00
  - Senin: Tutup

## 🔧 Configuration

### WhatsApp Integration

Edit nomor WhatsApp admin di file `resources/views/reservation/thankyou.blade.php`:

```php
$adminWhatsApp = '6287816658903'; // Ganti dengan nomor admin
```

### Email Configuration

Untuk notifikasi email, konfigurasi SMTP di file `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
```

## 🚀 Deployment

### Production Deployment

1. **Server Requirements**
   - PHP 8.1+
   - MySQL 5.7+
   - Composer
   - Web server (Apache/Nginx)

2. **Environment Setup**
   ```bash
   # Set production environment
   APP_ENV=production
   APP_DEBUG=false
   
   # Configure database
   DB_CONNECTION=mysql
   DB_HOST=your-production-host
   DB_DATABASE=your-production-db
   ```

3. **Optimize for Production**
   ```bash
   # Cache configuration
   php artisan config:cache
   
   # Cache routes
   php artisan route:cache
   
   # Cache views
   php artisan view:cache
   
   # Optimize autoloader
   composer install --optimize-autoloader --no-dev
   ```

## 🤝 Contributing

Kontribusi sangat diterima! Silakan ikuti langkah berikut:

1. Fork repository ini
2. Buat branch fitur (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📝 License

Project ini menggunakan lisensi MIT. Lihat file [LICENSE](LICENSE) untuk detail.

## 👥 Team

- **Developer**: [LuthfiMirza](https://github.com/LuthfiMirza)
- **Designer**: RasaBeauty Bar Team

## 📸 Screenshots

### Homepage
![Homepage](docs/screenshots/homepage.png)

### Reservation Form
![Reservation](docs/screenshots/reservation.png)

### Admin Dashboard
![Admin Dashboard](docs/screenshots/admin-dashboard.png)

## 🆘 Support

Jika Anda mengalami masalah atau memiliki pertanyaan:

1. Cek [Issues](https://github.com/LuthfiMirza/rasabeautybarsalon/issues) yang sudah ada
2. Buat issue baru jika diperlukan
3. Hubungi tim development

## 🔄 Changelog

### Version 1.0.0 (Latest)
- ✅ Initial release
- ✅ Complete reservation system
- ✅ Admin dashboard with analytics
- ✅ WhatsApp integration
- ✅ Mobile responsive design
- ✅ Modern UI/UX

---

<div align="center">
  <p>Made with ❤️ for RasaBeauty Bar</p>
  <p>© 2024 RasaBeauty Bar. All rights reserved.</p>
</div>