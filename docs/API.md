# 🔌 API Documentation - RasaBeauty Bar

## Overview

RasaBeauty Bar menggunakan Laravel sebagai backend dengan beberapa endpoint untuk mengelola reservasi dan data salon.

## Base URL

```
Local Development: http://localhost:8000
Production: https://your-domain.com
```

## Authentication

Admin panel menggunakan Filament authentication. Untuk API endpoints yang memerlukan authentication, gunakan Laravel Sanctum tokens.

## Endpoints

### 🏠 Public Endpoints

#### Get Homepage Data
```http
GET /
```

**Response:**
```html
Homepage dengan informasi salon
```

#### Get About Page
```http
GET /about
```

**Response:**
```html
Halaman tentang salon
```

### 📅 Reservation Endpoints

#### Create Reservation
```http
POST /reservation
```

**Headers:**
```
Content-Type: application/x-www-form-urlencoded
X-CSRF-TOKEN: {csrf_token}
```

**Body Parameters:**
| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| name | string | Yes | Nama pelanggan |
| phone | string | Yes | Nomor telepon |
| email | string | Yes | Email pelanggan |
| date | date | Yes | Tanggal reservasi (YYYY-MM-DD) |
| time | string | Yes | Waktu reservasi (HH:MM) |
| service | string | Yes | Jenis layanan |

**Available Services:**
- Nail Art
- Remove Nail
- Manicure
- Pedicure
- Eyelash Russian
- Eyelash Japanese
- Remove Eyelash
- Lashlift

**Available Times:**
- 09:00, 10:00, 11:00, 12:00, 13:00, 14:00, 15:00, 16:00, 17:00, 18:00

**Success Response (302):**
```
Redirect to: /reservation/thankyou/{id}
```

**Error Response (422):**
```json
{
    "message": "The given data was invalid.",
    "errors": {
        "name": ["The name field is required."],
        "email": ["The email must be a valid email address."]
    }
}
```

#### Get Thank You Page
```http
GET /reservation/thankyou/{id}
```

**Parameters:**
| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| id | integer | Yes | ID reservasi |

**Response:**
```html
Halaman terima kasih dengan detail reservasi dan link WhatsApp
```

### 🎛️ Admin Endpoints (Protected)

#### Admin Login
```http
GET /admin/login
```

#### Admin Dashboard
```http
GET /admin
```

**Response:**
```html
Dashboard admin dengan analytics dan widgets
```

#### Manage Reservations
```http
GET /admin/reservations
```

**Response:**
```html
Halaman manajemen reservasi dengan tabel data
```

## Data Models

### Reservation Model

```php
{
    "id": 1,
    "name": "John Doe",
    "phone": "081234567890",
    "email": "john@example.com",
    "date": "2024-01-15",
    "time": "14:00",
    "service": "Nail Art",
    "created_at": "2024-01-10T10:30:00.000000Z",
    "updated_at": "2024-01-10T10:30:00.000000Z"
}
```

### User Model (Admin)

```php
{
    "id": 1,
    "name": "Admin",
    "email": "admin@rasabeautybar.com",
    "email_verified_at": "2024-01-01T00:00:00.000000Z",
    "created_at": "2024-01-01T00:00:00.000000Z",
    "updated_at": "2024-01-01T00:00:00.000000Z"
}
```

## Validation Rules

### Reservation Validation

```php
[
    'name' => 'required|string|max:255',
    'phone' => 'required|string|max:20',
    'email' => 'required|email|max:255',
    'date' => 'required|date|after:today',
    'time' => 'required|string|in:09:00,10:00,11:00,12:00,13:00,14:00,15:00,16:00,17:00,18:00',
    'service' => 'required|string|in:Nail Art,Remove Nail,Manicure,Pedicure,Eyelash Russian,Eyelash Japanese,Remove Eyelash,Lashlift'
]
```

## Error Codes

| Code | Description |
|------|-------------|
| 200 | Success |
| 302 | Redirect (successful form submission) |
| 400 | Bad Request |
| 401 | Unauthorized |
| 403 | Forbidden |
| 404 | Not Found |
| 422 | Validation Error |
| 500 | Internal Server Error |

## Rate Limiting

- **Reservation Form**: 10 requests per minute per IP
- **Admin Panel**: 60 requests per minute per user

## CSRF Protection

Semua POST requests memerlukan CSRF token. Token dapat diperoleh dari:

```html
<meta name="csrf-token" content="{{ csrf_token() }}">
```

Atau dari form:
```html
@csrf
```

## WhatsApp Integration

### Generate WhatsApp Link

```php
$adminWhatsApp = '6287816658903';
$message = urlencode("Konfirmasi reservasi...");
$waLink = "https://wa.me/{$adminWhatsApp}?text={$message}";
```

### Message Format

```
Saya *{name}* ingin konfirmasi reservasi:

*Detail Reservasi:*
━━━━━━━━━━
📅 Tanggal: {date}
🕐 Jam: {time}
💅 Layanan: {service}
📱 No HP: {phone}
📧 Email: {email}

Mohon konfirmasi ketersediaan jadwal. Terima kasih! ✨
```

## Database Schema

### Reservations Table

```sql
CREATE TABLE reservations (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    time VARCHAR(5) NOT NULL,
    service VARCHAR(100) NOT NULL,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL
);
```

### Users Table

```sql
CREATE TABLE users (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    email_verified_at TIMESTAMP NULL DEFAULT NULL,
    password VARCHAR(255) NOT NULL,
    remember_token VARCHAR(100) NULL,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL
);
```

## Testing

### Test Reservation Creation

```bash
curl -X POST http://localhost:8000/reservation \
  -H "Content-Type: application/x-www-form-urlencoded" \
  -H "X-CSRF-TOKEN: your-csrf-token" \
  -d "name=Test User&phone=081234567890&email=test@example.com&date=2024-12-25&time=14:00&service=Nail Art"
```

### Test Admin Access

```bash
curl -X GET http://localhost:8000/admin \
  -H "Cookie: your-session-cookie"
```

## Security Considerations

1. **CSRF Protection**: Enabled untuk semua forms
2. **Input Validation**: Semua input divalidasi
3. **SQL Injection**: Protected dengan Eloquent ORM
4. **XSS Protection**: Blade templating auto-escape
5. **Rate Limiting**: Implemented untuk mencegah spam

## Performance

### Caching

```php
// Cache configuration
php artisan config:cache

// Cache routes
php artisan route:cache

// Cache views
php artisan view:cache
```

### Database Optimization

```sql
-- Index untuk performa
CREATE INDEX idx_reservations_date ON reservations(date);
CREATE INDEX idx_reservations_email ON reservations(email);
```

## Monitoring

### Logs

```bash
# View application logs
tail -f storage/logs/laravel.log

# View web server logs
tail -f /var/log/apache2/access.log
```

### Health Check

```http
GET /
```

Should return 200 status code with homepage content.

## Support

Untuk pertanyaan teknis atau bug reports:

1. Check existing issues di GitHub
2. Create new issue dengan detail lengkap
3. Contact development team

## Changelog

### v1.0.0
- Initial API implementation
- Reservation system
- Admin panel integration
- WhatsApp integration