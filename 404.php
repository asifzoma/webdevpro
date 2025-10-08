<?php
/**
 * SEO Boost Pro - 404 Error Page
 */

require_once __DIR__ . '/config/config.php';

$pageTitle = '404 - Page Not Found | ' . SITE_NAME;
$metaDescription = 'The page you are looking for could not be found.';

http_response_code(404);

include INCLUDES_PATH . '/header.php';
?>

<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-2xl mx-auto">
            <div class="mb-8">
                <i class="fas fa-exclamation-triangle text-8xl text-indigo-600 mb-6"></i>
            </div>
            
            <h1 class="text-6xl font-bold mb-4 text-gray-800">404</h1>
            <h2 class="text-3xl font-bold mb-6 text-gray-700">Page Not Found</h2>
            
            <p class="text-xl text-gray-600 mb-8">
                Oops! The page you're looking for doesn't exist. It might have been moved or deleted.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4 mb-12">
                <a href="/" class="bg-indigo-600 text-white font-semibold px-8 py-3 rounded-lg hover:bg-indigo-700 transition duration-300">
                    <i class="fas fa-home mr-2"></i>Go Home
                </a>
                <a href="/contact" class="bg-gray-200 text-gray-800 font-semibold px-8 py-3 rounded-lg hover:bg-gray-300 transition duration-300">
                    <i class="fas fa-envelope mr-2"></i>Contact Us
                </a>
            </div>
            
            <div class="bg-white p-8 rounded-xl shadow-md">
                <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-left">
                    <a href="/services" class="text-indigo-600 hover:underline">
                        <i class="fas fa-chevron-right mr-2"></i>Our Services
                    </a>
                    <a href="/pricing" class="text-indigo-600 hover:underline">
                        <i class="fas fa-chevron-right mr-2"></i>Pricing Plans
                    </a>
                    <a href="/#testimonials" class="text-indigo-600 hover:underline">
                        <i class="fas fa-chevron-right mr-2"></i>Testimonials
                    </a>
                    <a href="/#process" class="text-indigo-600 hover:underline">
                        <i class="fas fa-chevron-right mr-2"></i>Our Process
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include INCLUDES_PATH . '/footer.php'; ?>

