# 🛠️ Installation Guide - RasaBeauty Bar

## System Requirements

### Minimum Requirements
- **PHP**: 8.1 atau lebih tinggi
- **MySQL**: 5.7 atau MariaDB 10.3
- **Composer**: Latest version
- **Node.js**: 16.x atau lebih tinggi
- **NPM**: 8.x atau lebih tinggi

### Recommended Requirements
- **PHP**: 8.2+
- **MySQL**: 8.0+
- **Memory**: 512MB minimum, 1GB recommended
- **Storage**: 1GB free space

## Step-by-Step Installation

### 1. Environment Setup

#### Windows (XAMPP)
```bash
# Download dan install XAMPP
# Start Apache dan MySQL dari XAMPP Control Panel
```

#### Linux/Ubuntu
```bash
# Install PHP dan extensions
sudo apt update
sudo apt install php8.1 php8.1-cli php8.1-fpm php8.1-mysql php8.1-xml php8.1-curl php8.1-mbstring php8.1-zip

# Install MySQL
sudo apt install mysql-server

# Install Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```

#### macOS
```bash
# Install Homebrew jika belum ada
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"

# Install PHP
brew install php@8.1

# Install MySQL
brew install mysql

# Install Composer
brew install composer
```

### 2. Clone Repository

```bash
git clone https://github.com/LuthfiMirza/rasabeautybarsalon.git
cd rasabeautybarsalon
```

### 3. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### 4. Environment Configuration

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

Edit file `.env`:

```env
APP_NAME="RasaBeauty Bar"
APP_ENV=local
APP_KEY=base64:your-generated-key
APP_DEBUG=true
APP_URL=http://localhost:8000

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rasa_beauty_bar
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

### 5. Database Setup

#### Create Database
```sql
-- Login ke MySQL
mysql -u root -p

-- Create database
CREATE DATABASE rasa_beauty_bar CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Create user (optional)
CREATE USER 'rasa_user'@'localhost' IDENTIFIED BY 'your_password';
GRANT ALL PRIVILEGES ON rasa_beauty_bar.* TO 'rasa_user'@'localhost';
FLUSH PRIVILEGES;
```

#### Run Migrations
```bash
# Run database migrations
php artisan migrate

# Seed database (optional)
php artisan db:seed
```

### 6. Create Admin User

```bash
php artisan make:filament-user
```

Follow the prompts to create admin user:
- Name: Admin
- Email: admin@rasabeautybar.com
- Password: (your secure password)

### 7. Build Assets

```bash
# Development build
npm run dev

# Production build
npm run build
```

### 8. Set Permissions (Linux/macOS)

```bash
# Set proper permissions
sudo chown -R www-data:www-data storage bootstrap/cache
sudo chmod -R 775 storage bootstrap/cache
```

### 9. Start Development Server

```bash
php artisan serve
```

Your application will be available at:
- **Website**: http://localhost:8000
- **Admin Panel**: http://localhost:8000/admin

## Troubleshooting

### Common Issues

#### 1. Composer Install Fails
```bash
# Clear composer cache
composer clear-cache

# Install with verbose output
composer install -v
```

#### 2. Permission Denied (Linux/macOS)
```bash
# Fix storage permissions
sudo chmod -R 775 storage
sudo chmod -R 775 bootstrap/cache
```

#### 3. Database Connection Error
- Check MySQL service is running
- Verify database credentials in `.env`
- Ensure database exists

#### 4. NPM Install Fails
```bash
# Clear npm cache
npm cache clean --force

# Delete node_modules and reinstall
rm -rf node_modules package-lock.json
npm install
```

#### 5. Filament Admin Not Working
```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Republish Filament assets
php artisan filament:install --panels
```

### Performance Optimization

#### Development
```bash
# Enable query logging
php artisan tinker
DB::enableQueryLog();
```

#### Production
```bash
# Cache everything
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev
```

## Next Steps

After successful installation:

1. **Configure WhatsApp Integration**
   - Edit WhatsApp number in `resources/views/reservation/thankyou.blade.php`

2. **Customize Branding**
   - Replace logo in `public/images/rasa.png`
   - Update colors in CSS files

3. **Set Up Email**
   - Configure SMTP settings in `.env`
   - Test email functionality

4. **Add Content**
   - Update about page content
   - Add service descriptions
   - Upload salon photos

5. **Security**
   - Change default passwords
   - Set up SSL certificate for production
   - Configure firewall rules

## Support

If you encounter any issues during installation:

1. Check the [main README](../README.md)
2. Review [troubleshooting section](#troubleshooting)
3. Create an issue on GitHub
4. Contact the development team