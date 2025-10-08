# Installation Guide - SEO Boost Pro

## Quick Start Guide

Follow these steps to get your SEO Boost Pro website up and running.

## 📋 Prerequisites

Before you begin, ensure you have:

- ✅ Web server (Apache or Nginx)
- ✅ PHP 7.4 or higher
- ✅ MySQL 5.7+ (optional, for contact form storage)
- ✅ SSL certificate (recommended for production)

## 🚀 Installation Steps

### 1. Upload Files

Upload all files to your web server's document root directory:

```
/var/www/html/          (Linux)
/public_html/           (cPanel)
C:/xampp/htdocs/        (Windows/XAMPP)
```

### 2. Apache Configuration

**Enable Required Modules:**
```bash
sudo a2enmod rewrite
sudo systemctl restart apache2
```

**Update Apache Config** (if needed):
```apache
<Directory /var/www/html/WEBDEVPRO>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
```

### 3. Nginx Configuration (Alternative)

If using Nginx, add this to your server block:

```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /var/www/html/WEBDEVPRO;
    index index.php index.html;

    location / {
        try_files $uri $uri.php $uri/ =404;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
    }

    location ~ /\.ht {
        deny all;
    }
}
```

### 4. Configure Site Settings

Edit `config/config.php`:

```php
// Update these values
define('SITE_NAME', 'Your Company Name');
define('SITE_URL', 'https://www.yoursite.com');
define('SITE_EMAIL', 'info@yoursite.com');
define('SITE_PHONE', '(123) 456-7890');

// Update office information
define('OFFICE_ADDRESS', 'Your Address Here');
define('OFFICE_HOURS', 'Mon-Fri, 9am-5pm');

// Update social media
define('FACEBOOK_URL', 'https://facebook.com/yourpage');
define('TWITTER_URL', 'https://twitter.com/yourhandle');
define('LINKEDIN_URL', 'https://linkedin.com/company/yourcompany');
define('INSTAGRAM_URL', 'https://instagram.com/yourhandle');
```

### 5. Email Configuration

For contact form emails to work properly:

#### Option A: Using PHP mail() (Basic)

Already configured by default. Just ensure your server can send mail.

#### Option B: Using SMTP (Recommended)

Install PHPMailer:
```bash
composer require phpmailer/phpmailer
```

Update `includes/process-contact.php` to use SMTP:
```php
use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'your@email.com';
$mail->Password = 'your-password';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
```

### 6. Database Setup (Optional)

If you want to store contact submissions:

#### Create Database:
```sql
CREATE DATABASE seoboostpro CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

#### Create User:
```sql
CREATE USER 'seouser'@'localhost' IDENTIFIED BY 'secure_password';
GRANT ALL PRIVILEGES ON seoboostpro.* TO 'seouser'@'localhost';
FLUSH PRIVILEGES;
```

#### Create Table:
```sql
USE seoboostpro;

CREATE TABLE contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    service VARCHAR(50),
    message TEXT NOT NULL,
    ip_address VARCHAR(45),
    user_agent VARCHAR(255),
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_submitted (submitted_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

#### Update config.php:
```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'seoboostpro');
define('DB_USER', 'seouser');
define('DB_PASS', 'secure_password');
```

#### Enable in process-contact.php:
Uncomment the line:
```php
saveContactSubmission($name, $email, $phone, $service, $message);
```

### 7. File Permissions

Set correct permissions:

```bash
# Files
find . -type f -exec chmod 644 {} \;

# Directories
find . -type d -exec chmod 755 {} \;

# Secure config
chmod 600 config/config.php

# Make uploads directory if needed
mkdir uploads
chmod 755 uploads
```

### 8. Enable HTTPS (Production)

#### Update .htaccess:
Uncomment these lines:
```apache
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

#### Update config.php:
Change HTTP to HTTPS:
```php
define('SITE_URL', 'https://www.yoursite.com');
```

### 9. Test Your Installation

Visit these URLs to verify:

- ✅ Homepage: `https://yoursite.com/`
- ✅ Services: `https://yoursite.com/services`
- ✅ Pricing: `https://yoursite.com/pricing`
- ✅ Contact: `https://yoursite.com/contact`
- ✅ 404 Page: `https://yoursite.com/nonexistent`

Test the contact form:
1. Fill out the form
2. Check if email arrives
3. Verify database entry (if enabled)

## 🔒 Security Hardening

### 1. Update Production Settings

In `config/config.php`:
```php
error_reporting(0);
ini_set('display_errors', 0);
```

### 2. Add reCAPTCHA (Recommended)

1. Get keys from [Google reCAPTCHA](https://www.google.com/recaptcha)
2. Add to contact form
3. Verify on server side

### 3. Implement Rate Limiting

Add to `process-contact.php`:
```php
// Simple rate limiting
session_start();
if (isset($_SESSION['last_submit'])) {
    if (time() - $_SESSION['last_submit'] < 60) {
        die('Please wait before submitting again.');
    }
}
$_SESSION['last_submit'] = time();
```

### 4. CSRF Protection

Add to forms:
```php
$token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $token;
```

```html
<input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
```

### 5. Update Headers

Already configured in `.htaccess`, but verify:
```apache
Header set X-Content-Type-Options "nosniff"
Header set X-Frame-Options "SAMEORIGIN"
Header set X-XSS-Protection "1; mode=block"
```

## 🎨 Customization

### Update Pricing

Edit `pricing.php` and update the pricing cards.

### Update Services

Edit `includes/services-grid.php`.

### Update Testimonials

Edit `includes/testimonials.php`.

### Update FAQ

Edit `includes/faq.php`.

### Add New Pages

1. Create `page-name.php` in root
2. Follow existing page structure
3. Update navigation in `includes/navigation.php`

## 📊 Analytics Setup

### Google Analytics

Add to `includes/header.php` before `</head>`:

```html
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');
</script>
```

### Google Search Console

1. Verify ownership
2. Submit sitemap (create one or use plugin)
3. Monitor performance

## 🐛 Troubleshooting

### Issue: 404 Errors on all pages except index

**Solution:** Enable mod_rewrite
```bash
sudo a2enmod rewrite
sudo systemctl restart apache2
```

### Issue: Contact form not sending emails

**Solutions:**
1. Check PHP mail configuration
2. Verify email settings in config.php
3. Check spam folder
4. Use SMTP instead of mail()

### Issue: Blank page / PHP errors

**Solutions:**
1. Check error logs: `tail -f /var/log/apache2/error.log`
2. Enable error display temporarily
3. Check file permissions
4. Verify PHP version compatibility

### Issue: CSS/JS not loading

**Solutions:**
1. Check ASSETS_PATH in config.php
2. Verify file permissions
3. Clear browser cache
4. Check .htaccess rules

## 📞 Support

If you encounter issues:
1. Check error logs
2. Review this documentation
3. Contact support: info@seoboostpro.com

## ✅ Post-Installation Checklist

- [ ] All pages loading correctly
- [ ] Contact form working
- [ ] Database connected (if using)
- [ ] Emails sending properly
- [ ] HTTPS enabled
- [ ] Meta tags updated
- [ ] Social links updated
- [ ] Analytics installed
- [ ] Sitemap submitted
- [ ] Performance optimized
- [ ] Security hardened
- [ ] Backup system configured

## 🚀 Go Live!

Once everything is tested and configured:

1. Update DNS to point to your server
2. Clear all caches
3. Test thoroughly in incognito mode
4. Monitor error logs for 24 hours
5. Set up monitoring and backups

---

**Congratulations! Your SEO Boost Pro website is now live! 🎉**

