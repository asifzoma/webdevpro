<?php
/**
 * SEO Boost Pro - Configuration File
 * Contains all site-wide settings and constants
 */

// Error Reporting (Set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Site Configuration
define('SITE_NAME', 'SEOBoostPro');
define('SITE_TITLE', 'SEO Boost Pro | Professional SEO Services');
define('SITE_URL', 'https://www.seoboostpro.com');
define('SITE_EMAIL', 'info@seoboostpro.com');
define('SITE_PHONE', '(800) 555-1234');

// Database Configuration (when needed)
define('DB_HOST', 'localhost');
define('DB_NAME', 'seoboostpro');
define('DB_USER', 'root');
define('DB_PASS', '');

// SEO Meta Defaults
define('DEFAULT_META_DESCRIPTION', 'Boost your website\'s visibility with our professional SEO services. Affordable packages for businesses of all sizes.');
define('DEFAULT_META_KEYWORDS', 'SEO, search engine optimization, website ranking, digital marketing');

// Contact Information
define('OFFICE_ADDRESS', '123 SEO Street, Digital Valley, CA 90210');
define('OFFICE_HOURS', 'Mon-Fri, 9am-5pm PST');

// Social Media Links
define('FACEBOOK_URL', '#');
define('TWITTER_URL', '#');
define('LINKEDIN_URL', '#');
define('INSTAGRAM_URL', '#');

// Email Settings (for contact form)
define('CONTACT_EMAIL_TO', 'info@seoboostpro.com');
define('CONTACT_EMAIL_FROM', 'noreply@seoboostpro.com');

// Paths
define('ROOT_PATH', dirname(__DIR__));
define('INCLUDES_PATH', ROOT_PATH . '/includes');
define('ASSETS_PATH', '/assets');

// Timezone
date_default_timezone_set('America/Los_Angeles');

// Session Configuration
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

