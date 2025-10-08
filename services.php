<?php
/**
 * SEO Boost Pro - Services Page
 */

require_once __DIR__ . '/config/config.php';

$pageTitle = 'Our SEO Services | ' . SITE_NAME;
$metaDescription = 'Comprehensive SEO services including keyword research, on-page optimization, technical SEO, content marketing, and more. Custom solutions for businesses of all sizes.';

include INCLUDES_PATH . '/header.php';
?>

<!-- Hero Section -->
<section class="bg-gradient-seo text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 animate-fade-in">
            Professional SEO Services
        </h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
            Comprehensive search engine optimization solutions tailored to your business needs.
        </p>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Comprehensive <span class="text-gradient">SEO Services</span></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">We offer a full range of SEO services to help your website climb search rankings and stay there.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php include INCLUDES_PATH . '/services-grid.php'; ?>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Choose <span class="text-gradient">SEOBoostPro</span>?</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-award text-indigo-600 text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Proven Track Record</h3>
                <p class="text-gray-600">Over 450 successful projects with measurable results and happy clients.</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-green-600 text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Expert Team</h3>
                <p class="text-gray-600">Google-certified SEO specialists with years of industry experience.</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chart-line text-purple-600 text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Data-Driven Approach</h3>
                <p class="text-gray-600">Every decision backed by analytics and performance data.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-seo text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Let's discuss how our SEO services can help grow your business.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="/contact" class="bg-white text-indigo-600 font-semibold px-8 py-3 rounded-lg shadow-lg hover:bg-gray-100 transition duration-300">Contact Us Today</a>
            <a href="/pricing" class="bg-transparent border-2 border-white text-white font-semibold px-8 py-3 rounded-lg hover:bg-white hover:text-indigo-600 transition duration-300">View Pricing</a>
        </div>
    </div>
</section>

<?php include INCLUDES_PATH . '/footer.php'; ?>

