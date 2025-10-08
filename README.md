# SEO Boost Pro - Professional SEO Services Website

A modern, professional PHP-based website for SEO services with a clean architecture, reusable components, and best practices.

## 🚀 Features

- **Modern Design**: Beautiful, responsive UI built with Tailwind CSS
- **Component-Based Architecture**: Reusable PHP includes for maintainability
- **SEO Optimized**: Proper meta tags, semantic HTML, and performance optimizations
- **Contact Form**: Ajax-powered contact form with server-side validation
- **Mobile Responsive**: Fully responsive design for all devices
- **Clean Code**: Well-organized, documented, and maintainable codebase

## 📁 Project Structure

```
WEBDEVPRO/
├── assets/
│   ├── css/
│   │   ├── custom.css          # Custom styles and utilities
│   │   └── animations.css      # Animation definitions
│   ├── js/
│   │   ├── main.js            # Main JavaScript functionality
│   │   └── contact-form.js    # Contact form handler
│   └── images/                # Image assets
├── config/
│   ├── config.php             # Site configuration
│   └── database.php           # Database connection class
├── includes/
│   ├── header.php             # Site header
│   ├── footer.php             # Site footer
│   ├── navigation.php         # Navigation menu
│   ├── services-grid.php      # Services grid component
│   ├── process-timeline.php   # Process timeline component
│   ├── testimonials.php       # Testimonials component
│   ├── faq.php               # FAQ component
│   └── process-contact.php    # Contact form processor
├── index.php                  # Home page
├── services.php              # Services page
├── pricing.php               # Pricing page
├── contact.php               # Contact page
├── 404.php                   # 404 error page
├── .htaccess                 # Apache configuration
└── README.md                 # This file
```

## ⚙️ Installation

### Prerequisites

- PHP 7.4 or higher
- Apache/Nginx web server
- MySQL (optional, for contact form storage)

### Setup Steps

1. **Clone/Download the repository**
   ```bash
   git clone <repository-url>
   cd WEBDEVPRO
   ```

2. **Configure your web server**
   
   **For Apache:**
   - Ensure `mod_rewrite` is enabled
   - Point your document root to the WEBDEVPRO directory
   - The `.htaccess` file is already configured

   **For Nginx:**
   Add this to your server block:
   ```nginx
   location / {
       try_files $uri $uri.php $uri/ =404;
   }
   ```

3. **Update Configuration**
   
   Edit `config/config.php` and update:
   - Site information (name, URL, email, phone)
   - Database credentials (if using database)
   - Email settings for contact form
   - Social media URLs

4. **Set Permissions**
   ```bash
   chmod 755 -R .
   chmod 644 config/config.php
   ```

5. **Optional: Database Setup**
   
   If you want to store contact submissions in a database:
   ```sql
   CREATE DATABASE seoboostpro;
   
   CREATE TABLE contact_submissions (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       email VARCHAR(100) NOT NULL,
       phone VARCHAR(20),
       service VARCHAR(50),
       message TEXT NOT NULL,
       submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

## 🔧 Configuration

### Site Settings

Edit `config/config.php` to customize:

```php
define('SITE_NAME', 'SEOBoostPro');
define('SITE_URL', 'https://www.seoboostpro.com');
define('SITE_EMAIL', 'info@seoboostpro.com');
define('SITE_PHONE', '(800) 555-1234');
```

### Email Configuration

For the contact form to work, configure email settings:

```php
define('CONTACT_EMAIL_TO', 'info@seoboostpro.com');
define('CONTACT_EMAIL_FROM', 'noreply@seoboostpro.com');
```

**Note:** For production, consider using SMTP instead of PHP's `mail()` function.

## 📧 Contact Form

The contact form includes:
- ✅ Server-side validation
- ✅ XSS protection
- ✅ Email sanitization
- ✅ Ajax submission
- ✅ User feedback
- ✅ Optional database storage

To enable database storage, uncomment the function call in `includes/process-contact.php`.

## 🎨 Customization

### Colors & Branding

Main brand colors are defined in `assets/css/custom.css`:
- Primary: `#4f46e5` (Indigo)
- Secondary: `#10b981` (Green)

Update the gradient:
```css
.bg-gradient-seo {
    background: linear-gradient(135deg, #4f46e5 0%, #10b981 100%);
}
```

### Adding New Pages

1. Create a new PHP file in the root directory
2. Include config and header:
   ```php
   <?php
   require_once __DIR__ . '/config/config.php';
   $pageTitle = 'Your Page Title | ' . SITE_NAME;
   include INCLUDES_PATH . '/header.php';
   ?>
   ```
3. Add your content
4. Include footer:
   ```php
   <?php include INCLUDES_PATH . '/footer.php'; ?>
   ```

### Adding Reusable Components

Create PHP files in the `includes/` directory and include them:
```php
<?php include INCLUDES_PATH . '/your-component.php'; ?>
```

## 🔒 Security

- ✅ XSS protection via input sanitization
- ✅ SQL injection prevention (PDO prepared statements)
- ✅ CSRF protection recommended for production
- ✅ Secure headers via .htaccess
- ✅ Config file protection
- ✅ Form validation

### Production Checklist

- [ ] Disable error display in `config.php`
- [ ] Enable HTTPS redirect in `.htaccess`
- [ ] Update all placeholder URLs and emails
- [ ] Add CSRF tokens to forms
- [ ] Implement rate limiting on contact form
- [ ] Setup proper SMTP email service
- [ ] Add Google reCAPTCHA to contact form
- [ ] Regular security updates

## 🚀 Performance

- Tailwind CSS via CDN (consider self-hosting for production)
- Font Awesome via CDN
- Lazy loading images (utility included)
- Minimal JavaScript
- Optimized animations

### Production Optimization

1. **Self-host CSS/JS libraries**
2. **Minify assets**
3. **Enable caching** (update .htaccess)
4. **Optimize images** (use WebP format)
5. **Enable Gzip compression**

## 📱 Browser Support

- ✅ Chrome (latest)
- ✅ Firefox (latest)
- ✅ Safari (latest)
- ✅ Edge (latest)
- ✅ Mobile browsers

## 🛠️ Development

### File Naming Conventions

- PHP files: `kebab-case.php`
- CSS/JS files: `kebab-case.css/js`
- Classes: `PascalCase`
- Functions: `camelCase`

### Code Style

- Indentation: 4 spaces
- PHP: PSR-12 standard
- JavaScript: ES6+
- Comments: PHPDoc style

## 📞 Support

For questions or issues:
- Email: info@seoboostpro.com
- Phone: (800) 555-1234

## 📄 License

Copyright © 2024 SEOBoostPro. All rights reserved.

## 🔄 Updates & Maintenance

### Regular Tasks

- Update pricing information in `pricing.php`
- Update testimonials in `includes/testimonials.php`
- Monitor contact form submissions
- Update meta descriptions for SEO
- Backup database regularly

### Adding Blog Functionality

To add a blog:
1. Create `blog/` directory
2. Add blog template files
3. Update navigation in `includes/navigation.php`
4. Consider using a CMS or custom blog system

## 🎯 SEO Features

- ✅ Semantic HTML5 markup
- ✅ Meta descriptions and keywords
- ✅ Open Graph tags
- ✅ Clean URL structure (via .htaccess)
- ✅ Mobile-friendly design
- ✅ Fast loading times
- ✅ Structured data ready

## 🔗 Useful Links

- [Tailwind CSS Docs](https://tailwindcss.com/docs)
- [Font Awesome Icons](https://fontawesome.com/icons)
- [PHP Documentation](https://www.php.net/docs.php)

---

**Built with ❤️ by World-Class Web Developers**

