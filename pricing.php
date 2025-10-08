<?php
/**
 * SEO Boost Pro - Pricing Page
 */

require_once __DIR__ . '/config/config.php';

$pageTitle = 'SEO Pricing Plans | ' . SITE_NAME;
$metaDescription = 'Simple, transparent SEO pricing for businesses of all sizes. Choose from Starter (£249/mo), Growth (£649/mo), or Enterprise (£1,599/mo) plans.';

include INCLUDES_PATH . '/header.php';
?>

<!-- Hero Section -->
<section class="bg-gradient-seo text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 animate-fade-in">
            Simple, Transparent Pricing
        </h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
            Choose the plan that fits your business needs. All plans include a free SEO audit.
        </p>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row justify-center gap-8">
            <!-- Basic Plan -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col hover-scale">
                <div class="px-8 py-6 bg-white">
                    <h3 class="text-2xl font-bold mb-2">Starter</h3>
                    <p class="text-gray-600 mb-4">Ideal for small businesses getting started with SEO</p>
                    <p class="text-4xl font-bold mb-6">£249<span class="text-lg text-gray-500">/month</span></p>
                    <a href="/contact" class="block text-center bg-indigo-100 text-indigo-700 font-semibold px-6 py-3 rounded-lg hover:bg-indigo-200 transition duration-300">Get Started</a>
                </div>
                <div class="border-t border-gray-200 px-8 py-6 bg-gray-50 flex-grow">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Keyword Research (10 keywords)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>On-Page Optimization (5 pages)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Basic Technical Audit</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Monthly Progress Report</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-times text-gray-400 mr-2"></i>
                            <span>No Content Creation</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Pro Plan (Featured) -->
            <div class="bg-white rounded-xl shadow-2xl overflow-hidden flex flex-col transform scale-105 relative hover-scale">
                <div class="absolute top-0 right-0 bg-indigo-600 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">MOST POPULAR</div>
                <div class="px-8 py-6 bg-indigo-600 text-white">
                    <h3 class="text-2xl font-bold mb-2">Growth</h3>
                    <p class="text-indigo-100 mb-4">Perfect for businesses serious about SEO growth</p>
                    <p class="text-4xl font-bold mb-6">£649<span class="text-lg text-indigo-100">/month</span></p>
                    <a href="/contact" class="block text-center bg-white text-indigo-600 font-semibold px-6 py-3 rounded-lg hover:bg-gray-100 transition duration-300">Get Started</a>
                </div>
                <div class="border-t border-gray-200 px-8 py-6 bg-gray-50 flex-grow">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Keyword Research (30 keywords)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Full Site Optimization</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Comprehensive Technical SEO</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>2 Blog Posts/Month</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Link Building Campaign</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Enterprise Plan -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col hover-scale">
                <div class="px-8 py-6 bg-white">
                    <h3 class="text-2xl font-bold mb-2">Enterprise</h3>
                    <p class="text-gray-600 mb-4">For large businesses with competitive markets</p>
                    <p class="text-4xl font-bold mb-6">£1,599<span class="text-lg text-gray-500">/month</span></p>
                    <a href="/contact" class="block text-center bg-indigo-100 text-indigo-700 font-semibold px-6 py-3 rounded-lg hover:bg-indigo-200 transition duration-300">Get Started</a>
                </div>
                <div class="border-t border-gray-200 px-8 py-6 bg-gray-50 flex-grow">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Comprehensive Keyword Strategy</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Full Site Optimization + UX</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Advanced Technical SEO</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>5 Premium Content Pieces/Month</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            <span>Dedicated Account Manager</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Custom Plan CTA -->
        <div class="mt-12 bg-white rounded-xl shadow-md p-8 max-w-4xl mx-auto text-center">
            <h3 class="text-2xl font-bold text-indigo-600 mb-4">Have a large project or unique needs?</h3>
            <p class="text-gray-600 mb-6">We offer custom SEO solutions tailored specifically to your business goals and requirements.</p>
            <a href="/contact" class="inline-block bg-gradient-seo text-white font-semibold px-8 py-3 rounded-lg hover:opacity-90 transition duration-300">
                Request a Custom Quote
            </a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Pricing <span class="text-gradient">FAQs</span></h2>
        </div>
        
        <?php include INCLUDES_PATH . '/faq.php'; ?>
    </div>
</section>

<?php include INCLUDES_PATH . '/footer.php'; ?>

