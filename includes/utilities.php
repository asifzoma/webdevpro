<?php
/**
 * Utility Functions
 * Helper functions used throughout the application
 */

/**
 * Sanitize string input
 */
function sanitizeString($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

/**
 * Validate email address
 */
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Validate phone number
 */
function validatePhone($phone) {
    return preg_match('/^[\d\s\-\+\(\)]+$/', $phone);
}

/**
 * Format phone number for display
 */
function formatPhone($phone) {
    $cleaned = preg_replace('/[^0-9]/', '', $phone);
    if (strlen($cleaned) === 10) {
        return '(' . substr($cleaned, 0, 3) . ') ' . substr($cleaned, 3, 3) . '-' . substr($cleaned, 6);
    }
    return $phone;
}

/**
 * Generate CSRF token
 */
function generateCSRFToken() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Verify CSRF token
 */
function verifyCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Get client IP address
 */
function getClientIP() {
    $ip = '';
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'] ?? '';
    }
    return filter_var($ip, FILTER_VALIDATE_IP) ? $ip : 'Unknown';
}

/**
 * Log activity to file
 */
function logActivity($message, $level = 'INFO') {
    $logFile = ROOT_PATH . '/logs/activity.log';
    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] [$level] $message" . PHP_EOL;
    
    if (!file_exists(dirname($logFile))) {
        mkdir(dirname($logFile), 0755, true);
    }
    
    file_put_contents($logFile, $logMessage, FILE_APPEND);
}

/**
 * Redirect to URL
 */
function redirect($url, $statusCode = 302) {
    header("Location: $url", true, $statusCode);
    exit;
}

/**
 * Check if user is logged in (for future admin area)
 */
function isLoggedIn() {
    return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
}

/**
 * Format currency
 */
function formatCurrency($amount, $currency = 'GBP') {
    $symbols = [
        'GBP' => '£',
        'USD' => '$',
        'EUR' => '€'
    ];
    
    $symbol = $symbols[$currency] ?? '$';
    return $symbol . number_format($amount, 2);
}

/**
 * Time ago function
 */
function timeAgo($timestamp) {
    $time = time() - strtotime($timestamp);
    
    $tokens = [
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    ];
    
    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits . ' ' . $text . (($numberOfUnits > 1) ? 's' : '') . ' ago';
    }
    
    return 'just now';
}

/**
 * Generate slug from string
 */
function generateSlug($string) {
    $string = strtolower($string);
    $string = preg_replace('/[^a-z0-9-]/', '-', $string);
    $string = preg_replace('/-+/', '-', $string);
    return trim($string, '-');
}

/**
 * Truncate text
 */
function truncateText($text, $length = 100, $suffix = '...') {
    if (strlen($text) <= $length) {
        return $text;
    }
    return substr($text, 0, $length) . $suffix;
}

/**
 * Get meta description from content
 */
function extractMetaDescription($content, $length = 160) {
    $text = strip_tags($content);
    return truncateText($text, $length);
}

/**
 * Check if request is AJAX
 */
function isAjaxRequest() {
    return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
           strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
}

/**
 * JSON response helper
 */
function jsonResponse($data, $statusCode = 200) {
    http_response_code($statusCode);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

/**
 * Rate limiting check
 */
function checkRateLimit($key, $limit = 5, $period = 60) {
    $cacheFile = ROOT_PATH . '/cache/ratelimit_' . md5($key) . '.json';
    
    if (!file_exists(dirname($cacheFile))) {
        mkdir(dirname($cacheFile), 0755, true);
    }
    
    $data = file_exists($cacheFile) ? json_decode(file_get_contents($cacheFile), true) : [];
    
    // Clean old entries
    $data = array_filter($data, function($timestamp) use ($period) {
        return (time() - $timestamp) < $period;
    });
    
    if (count($data) >= $limit) {
        return false;
    }
    
    $data[] = time();
    file_put_contents($cacheFile, json_encode($data));
    
    return true;
}

/**
 * Send email helper
 */
function sendEmail($to, $subject, $body, $replyTo = null) {
    $headers = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: ' . CONTACT_EMAIL_FROM,
        'X-Mailer: PHP/' . phpversion()
    ];
    
    if ($replyTo) {
        $headers[] = 'Reply-To: ' . $replyTo;
    }
    
    return mail($to, $subject, $body, implode("\r\n", $headers));
}

/**
 * Breadcrumb generator
 */
function generateBreadcrumbs() {
    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    $segments = $path ? explode('/', $path) : [];
    
    $breadcrumbs = ['<a href="/">Home</a>'];
    $url = '';
    
    foreach ($segments as $segment) {
        $url .= '/' . $segment;
        $breadcrumbs[] = '<a href="' . $url . '">' . ucwords(str_replace(['-', '_'], ' ', $segment)) . '</a>';
    }
    
    return implode(' &raquo; ', $breadcrumbs);
}

