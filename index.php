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

<!-- Hero Section with Background Image -->
<section class="relative bg-gradient-seo text-white py-20 md:py-28 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 hero-pattern opacity-50"></div>
    
    <!-- Animated Background Shapes -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse-slow"></div>
    <div class="absolute top-40 right-10 w-72 h-72 bg-green-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse-slow animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-20 w-72 h-72 bg-indigo-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse-slow animation-delay-4000"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
            <!-- Left Content -->
            <div class="flex-1 text-center lg:text-left">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate-fade-in leading-tight">
                    Boost Your Online Visibility with 
                    <span class="block mt-2 text-green-300">Professional SEO Services</span>
                </h1>
                <p class="text-lg md:text-xl mb-8 text-gray-100 max-w-2xl mx-auto lg:mx-0">
                    We help businesses rank higher on search engines and attract more organic traffic to their websites. Get measurable results in 3-6 months.
                </p>
                <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                    <a href="/pricing" class="bg-white text-indigo-600 font-semibold px-8 py-4 rounded-lg shadow-lg hover:bg-gray-100 transition duration-300 flex items-center justify-center gap-2">
                        <i class="fas fa-rocket"></i>
                        View Pricing
                    </a>
                    <a href="/contact" class="bg-transparent border-2 border-white text-white font-semibold px-8 py-4 rounded-lg hover:bg-white hover:text-indigo-600 transition duration-300 flex items-center justify-center gap-2">
                        <i class="fas fa-chart-line"></i>
                        Get a Free Audit
                    </a>
                </div>
                
                <!-- Quick Stats -->
                <div class="flex flex-wrap justify-center lg:justify-start gap-6 mt-8">
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-green-300">450+</div>
                        <div class="text-sm text-gray-200">Happy Clients</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-green-300">96%</div>
                        <div class="text-sm text-gray-200">Success Rate</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-3xl font-bold text-green-300">4.9/5</div>
                        <div class="text-sm text-gray-200">Client Rating</div>
                    </div>
                </div>
            </div>
            
            <!-- Right Image -->
            <div class="flex-1 max-w-lg lg:max-w-none">
                <div class="relative">
                    <!-- AI Generated Image Placeholder - SEO Dashboard/Analytics -->
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=600&fit=crop" 
                         alt="SEO Analytics Dashboard" 
                         class="rounded-2xl shadow-2xl transform hover:scale-105 transition duration-500"
                         loading="lazy">
                    
                    <!-- Floating Card 1 -->
                    <div class="absolute -bottom-4 -left-4 bg-white text-gray-800 p-4 rounded-xl shadow-xl hidden md:block animate-bounce-slow">
                        <div class="flex items-center gap-3">
                            <div class="bg-green-100 p-2 rounded-lg">
                                <i class="fas fa-arrow-up text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-green-600">+300%</div>
                                <div class="text-xs text-gray-600">Traffic Growth</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Card 2 -->
                    <div class="absolute -top-4 -right-4 bg-white text-gray-800 p-3 rounded-xl shadow-xl hidden md:block animate-bounce-slow animation-delay-2000">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-search text-indigo-600 text-lg"></i>
                            <span class="font-semibold text-sm">Ranking #1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Indicators -->
<section class="bg-white border-y border-gray-200 py-6">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center items-center gap-6 md:gap-12">
            <div class="flex items-center gap-3 group cursor-pointer">
                <div class="bg-green-100 p-3 rounded-lg group-hover:bg-green-200 transition">
                    <i class="fas fa-check-circle text-green-600 text-xl"></i>
                </div>
                <span class="font-semibold text-gray-700">Google Certified</span>
            </div>
            <div class="flex items-center gap-3 group cursor-pointer">
                <div class="bg-yellow-100 p-3 rounded-lg group-hover:bg-yellow-200 transition">
                    <i class="fas fa-star text-yellow-600 text-xl"></i>
                </div>
                <span class="font-semibold text-gray-700">5.0 on Trustpilot</span>
            </div>
            <div class="flex items-center gap-3 group cursor-pointer">
                <div class="bg-blue-100 p-3 rounded-lg group-hover:bg-blue-200 transition">
                    <i class="fas fa-trophy text-blue-600 text-xl"></i>
                </div>
                <span class="font-semibold text-gray-700">Award Winning</span>
            </div>
            <div class="flex items-center gap-3 group cursor-pointer">
                <div class="bg-indigo-100 p-3 rounded-lg group-hover:bg-indigo-200 transition">
                    <i class="fas fa-shield-alt text-indigo-600 text-xl"></i>
                </div>
                <span class="font-semibold text-gray-700">Money-Back Guarantee</span>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="section-compact bg-gradient-to-br from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-3">Our Comprehensive <span class="text-gradient">SEO Services</span></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">We offer a full range of SEO services to help your website climb search rankings and stay there.</p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php include INCLUDES_PATH . '/services-grid.php'; ?>
        </div>
    </div>
</section>

<!-- Stats Section with Visual Elements -->
<section class="section-compact bg-gradient-to-br from-indigo-600 to-green-500 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full filter blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-3">Proven Results That <span class="text-green-200">Speak for Themselves</span></h2>
            <p class="text-lg text-indigo-100 max-w-2xl mx-auto">Join hundreds of satisfied clients who've achieved remarkable growth</p>
        </div>
        
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/20 transition duration-300">
                <div class="flex items-center justify-center mb-3">
                    <i class="fas fa-rocket text-4xl text-green-300"></i>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold mb-2">450+</h3>
                <p class="text-sm text-indigo-100">Websites Optimized</p>
            </div>
            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/20 transition duration-300">
                <div class="flex items-center justify-center mb-3">
                    <i class="fas fa-users text-4xl text-green-300"></i>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold mb-2">96%</h3>
                <p class="text-sm text-indigo-100">Client Retention</p>
            </div>
            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/20 transition duration-300">
                <div class="flex items-center justify-center mb-3">
                    <i class="fas fa-star text-4xl text-yellow-300"></i>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold mb-2">4.9/5</h3>
                <p class="text-sm text-indigo-100">Client Rating</p>
            </div>
            <div class="bg-white/10 backdrop-blur-sm p-6 rounded-xl border border-white/20 hover:bg-white/20 transition duration-300">
                <div class="flex items-center justify-center mb-3">
                    <i class="fas fa-clock text-4xl text-green-300"></i>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold mb-2">3-6</h3>
                <p class="text-sm text-indigo-100">Months to Page 1</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Process Section -->
<section id="process" class="section-compact bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 items-center mb-12">
            <div class="flex-1">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Proven <span class="text-gradient">SEO Process</span></h2>
                <p class="text-lg text-gray-600">We follow a systematic approach to deliver measurable results for your business in just 6 simple steps.</p>
            </div>
            <div class="flex-1 max-w-md">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop" 
                     alt="SEO Process Analytics" 
                     class="rounded-xl shadow-lg"
                     loading="lazy">
            </div>
        </div>
        
        <?php include INCLUDES_PATH . '/process-timeline.php'; ?>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="section-compact bg-gradient-to-br from-gray-50 to-indigo-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-3">What Our <span class="text-gradient">Clients Say</span></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">Don't just take our word for it. Here's what our clients have to say about our SEO services.</p>
        </div>
        
        <?php include INCLUDES_PATH . '/testimonials.php'; ?>
        
        <!-- Client Logos Section -->
        <div class="mt-12 pt-8 border-t border-gray-200">
            <p class="text-center text-gray-600 mb-6 font-semibold">Trusted by Leading Brands</p>
            <div class="flex flex-wrap justify-center items-center gap-8 opacity-60">
                <div class="text-2xl font-bold text-gray-400">TechCorp</div>
                <div class="text-2xl font-bold text-gray-400">DigitalBiz</div>
                <div class="text-2xl font-bold text-gray-400">GrowthHub</div>
                <div class="text-2xl font-bold text-gray-400">WebPro</div>
                <div class="text-2xl font-bold text-gray-400">E-Connect</div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section-compact bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
            <!-- Left - FAQ Content -->
            <div class="flex-1">
                <div class="mb-8">
                    <h2 class="text-3xl md:text-4xl font-bold mb-3">Frequently Asked <span class="text-gradient">Questions</span></h2>
                    <p class="text-lg text-gray-600">Find answers to common questions about our SEO services.</p>
                </div>
                
                <?php include INCLUDES_PATH . '/faq.php'; ?>
                
                <div class="mt-8 bg-indigo-50 p-6 rounded-xl border border-indigo-100">
                    <div class="flex items-start gap-4">
                        <div class="bg-indigo-600 p-3 rounded-lg">
                            <i class="fas fa-headset text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800 mb-2">Still have questions?</h3>
                            <p class="text-gray-600 mb-3">Can't find the answer you're looking for? Our friendly team is here to help.</p>
                            <a href="/contact" class="inline-flex items-center gap-2 bg-indigo-600 text-white font-semibold px-6 py-2 rounded-lg hover:bg-indigo-700 transition duration-300">
                                <i class="fas fa-envelope"></i>
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right - Support Image -->
            <div class="flex-1 max-w-md mx-auto lg:mx-0">
                <div class="sticky top-24">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&h=800&fit=crop" 
                         alt="Customer Support Team" 
                         class="rounded-2xl shadow-xl"
                         loading="lazy">
                    <div class="mt-6 grid grid-cols-2 gap-4">
                        <div class="bg-green-50 p-4 rounded-lg text-center">
                            <i class="fas fa-clock text-green-600 text-2xl mb-2"></i>
                            <p class="text-sm font-semibold text-gray-700">24/7 Support</p>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-lg text-center">
                            <i class="fas fa-phone text-blue-600 text-2xl mb-2"></i>
                            <p class="text-sm font-semibold text-gray-700">Expert Help</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="relative bg-gradient-seo text-white py-16 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 right-0 w-96 h-96 bg-green-500 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-500 rounded-full filter blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
            <div class="flex-1 text-center lg:text-left">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Boost Your Website's Visibility?</h2>
                <p class="text-lg md:text-xl mb-6 text-gray-100">Get a free SEO audit and consultation to discover how we can help grow your business through organic search.</p>
                <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                    <a href="/contact" class="bg-white text-indigo-600 font-semibold px-8 py-4 rounded-lg shadow-lg hover:bg-gray-100 transition duration-300 flex items-center justify-center gap-2">
                        <i class="fas fa-chart-bar"></i>
                        Get Your Free Audit
                    </a>
                    <a href="tel:<?php echo str_replace(['(', ')', ' ', '-'], '', SITE_PHONE); ?>" class="bg-transparent border-2 border-white text-white font-semibold px-8 py-4 rounded-lg hover:bg-white hover:text-indigo-600 transition duration-300 flex items-center justify-center gap-2">
                        <i class="fas fa-phone-alt"></i>
                        <?php echo SITE_PHONE; ?>
                    </a>
                </div>
            </div>
            <div class="flex-1 max-w-md">
                <div class="bg-white/10 backdrop-blur-sm p-6 rounded-2xl border border-white/20">
                    <h3 class="text-xl font-bold mb-4">What You'll Get:</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-300 text-xl"></i>
                            <span>Complete Website SEO Audit</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-300 text-xl"></i>
                            <span>Competitor Analysis Report</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-300 text-xl"></i>
                            <span>Custom Growth Strategy</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-green-300 text-xl"></i>
                            <span>No Obligation Consultation</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include INCLUDES_PATH . '/footer.php'; ?>

