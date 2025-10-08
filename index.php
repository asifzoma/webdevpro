<?php
/**
 * SEO Boost Pro - Home Page
 */

require_once __DIR__ . '/config/config.php';

// Page-specific meta data
$pageTitle = SITE_TITLE;
$metaDescription = DEFAULT_META_DESCRIPTION;

include INCLUDES_PATH . '/header.php';
?>

<!-- Hero Section -->
<section class="bg-gradient-seo text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 animate-fade-in">
            Boost Your Online Visibility with 
            <span class="block mt-2">Professional SEO Services</span>
        </h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
            We help businesses rank higher on search engines and attract more organic traffic to their websites.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="/pricing" class="bg-white text-indigo-600 font-semibold px-6 py-3 rounded-lg shadow-lg hover:bg-gray-100 transition duration-300">View Pricing</a>
            <a href="/contact" class="bg-transparent border-2 border-white text-white font-semibold px-6 py-3 rounded-lg hover:bg-white hover:text-indigo-600 transition duration-300">Get a Free Audit</a>
        </div>
    </div>
</section>

<!-- Trust Indicators -->
<section class="bg-gray-100 py-8">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
            <div class="flex items-center">
                <i class="fas fa-check-circle text-green-500 text-2xl mr-2"></i>
                <span class="font-medium">Google Certified Partners</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-star text-yellow-400 text-2xl mr-2"></i>
                <span class="font-medium">5.0 Rating on Trustpilot</span>
            </div>
            <div class="flex items-center">
                <i class="fas fa-trophy text-blue-500 text-2xl mr-2"></i>
                <span class="font-medium">Award Winning Service</span>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Comprehensive <span class="text-gradient">SEO Services</span></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">We offer a full range of SEO services to help your website climb search rankings and stay there.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php include INCLUDES_PATH . '/services-grid.php'; ?>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-indigo-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div class="bg-white p-8 rounded-xl shadow-sm">
                <h3 class="text-4xl font-bold text-indigo-600 mb-2">450+</h3>
                <p class="text-gray-600">Websites Optimized</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-sm">
                <h3 class="text-4xl font-bold text-indigo-600 mb-2">96%</h3>
                <p class="text-gray-600">Client Retention Rate</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-sm">
                <h3 class="text-4xl font-bold text-indigo-600 mb-2">4.9/5</h3>
                <p class="text-gray-600">Average Client Rating</p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-sm">
                <h3 class="text-4xl font-bold text-indigo-600 mb-2">3-6</h3>
                <p class="text-gray-600">Months to First Page</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Process Section -->
<section id="process" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Proven <span class="text-gradient">SEO Process</span></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">We follow a systematic approach to deliver measurable results for your business.</p>
        </div>
        
        <?php include INCLUDES_PATH . '/process-timeline.php'; ?>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">What Our <span class="text-gradient">Clients Say</span></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Don't just take our word for it. Here's what our clients have to say about our SEO services.</p>
        </div>
        
        <?php include INCLUDES_PATH . '/testimonials.php'; ?>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Frequently Asked <span class="text-gradient">Questions</span></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Find answers to common questions about our SEO services.</p>
        </div>
        
        <?php include INCLUDES_PATH . '/faq.php'; ?>
        
        <div class="mt-12 text-center">
            <p class="text-gray-600 mb-6">Have more questions? We're happy to answer them.</p>
            <a href="/contact" class="inline-block bg-indigo-600 text-white font-semibold px-8 py-3 rounded-lg hover:bg-indigo-700 transition duration-300">
                Contact Us
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-seo text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Boost Your Website's Visibility?</h2>
        <p class="text-xl mb-8 max-w-3xl mx-auto">Get a free SEO audit and consultation to discover how we can help grow your business through organic search.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="/contact" class="bg-white text-indigo-600 font-semibold px-6 py-3 rounded-lg shadow-lg hover:bg-gray-100 transition duration-300">Get Your Free Audit</a>
            <a href="tel:<?php echo str_replace(['(', ')', ' ', '-'], '', SITE_PHONE); ?>" class="bg-transparent border-2 border-white text-white font-semibold px-6 py-3 rounded-lg hover:bg-white hover:text-indigo-600 transition duration-300">
                <i class="fas fa-phone-alt mr-2"></i><?php echo SITE_PHONE; ?>
            </a>
        </div>
    </div>
</section>

<?php include INCLUDES_PATH . '/footer.php'; ?>

