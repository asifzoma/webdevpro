<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $metaDescription ?? DEFAULT_META_DESCRIPTION; ?>">
    <meta name="keywords" content="<?php echo $metaKeywords ?? DEFAULT_META_KEYWORDS; ?>">
    <meta name="author" content="<?php echo SITE_NAME; ?>">
    
    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:title" content="<?php echo $pageTitle ?? SITE_TITLE; ?>">
    <meta property="og:description" content="<?php echo $metaDescription ?? DEFAULT_META_DESCRIPTION; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/seo-og-image.jpg">
    
    <title><?php echo $pageTitle ?? SITE_TITLE; ?></title>
    
    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>/css/custom.css">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>/css/animations.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo ASSETS_PATH; ?>/images/favicon.ico">
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-50">
    <?php include INCLUDES_PATH . '/navigation.php'; ?>

