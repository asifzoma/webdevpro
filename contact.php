<?php
/**
 * SEO Boost Pro - Contact Page
 */

require_once __DIR__ . '/config/config.php';

$pageTitle = 'Contact Us | ' . SITE_NAME;
$metaDescription = 'Get in touch with SEOBoostPro. Request a free SEO audit, discuss your project, or ask us anything. We respond within 24 hours.';

include INCLUDES_PATH . '/header.php';
?>

<!-- Hero Section -->
<section class="bg-gradient-seo text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6 animate-fade-in">
            Get In Touch
        </h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
            Ready to boost your website's visibility? Contact us for a free consultation.
        </p>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="lg:flex gap-12">
                <div class="lg:w-1/2 mb-12 lg:mb-0">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Let's Talk About <span class="text-gradient">Your Project</span></h2>
                    <p class="text-lg text-gray-600 mb-8">Whether you're interested in one of our standard plans or have a large enterprise project, fill out the form and we'll get back to you within 24 hours.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-indigo-50 p-3 rounded-lg mr-4">
                                <i class="fas fa-map-marker-alt text-indigo-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">Our Office</h4>
                                <p class="text-gray-600"><?php echo OFFICE_ADDRESS; ?></p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-indigo-50 p-3 rounded-lg mr-4">
                                <i class="fas fa-envelope text-indigo-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">Email Us</h4>
                                <p class="text-gray-600"><?php echo SITE_EMAIL; ?></p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-indigo-50 p-3 rounded-lg mr-4">
                                <i class="fas fa-phone-alt text-indigo-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">Call Us</h4>
                                <p class="text-gray-600"><?php echo SITE_PHONE; ?></p>
                                <p class="text-gray-600 text-sm"><?php echo OFFICE_HOURS; ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-10">
                        <h4 class="font-bold text-gray-800 mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="<?php echo FACEBOOK_URL; ?>" class="bg-gray-200 w-10 h-10 rounded-full flex items-center justify-center hover:bg-indigo-600 hover:text-white transition duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="<?php echo TWITTER_URL; ?>" class="bg-gray-200 w-10 h-10 rounded-full flex items-center justify-center hover:bg-indigo-600 hover:text-white transition duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="<?php echo LINKEDIN_URL; ?>" class="bg-gray-200 w-10 h-10 rounded-full flex items-center justify-center hover:bg-indigo-600 hover:text-white transition duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="<?php echo INSTAGRAM_URL; ?>" class="bg-gray-200 w-10 h-10 rounded-full flex items-center justify-center hover:bg-indigo-600 hover:text-white transition duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2">
                    <form id="contactForm" method="POST" action="/includes/process-contact.php" class="bg-white p-8 rounded-xl shadow-md">
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Full Name *</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600" required>
                        </div>
                        
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email Address *</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600" required>
                        </div>
                        
                        <div class="mb-6">
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600">
                        </div>
                        
                        <div class="mb-6">
                            <label for="service" class="block text-gray-700 font-medium mb-2">Service Interested In</label>
                            <select id="service" name="service" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600">
                                <option value="">Select a service</option>
                                <option value="starter">Starter SEO (£249/month)</option>
                                <option value="growth">Growth SEO (£649/month)</option>
                                <option value="enterprise">Enterprise SEO (£1,599/month)</option>
                                <option value="custom">Custom Solution</option>
                                <option value="audit">Free SEO Audit</option>
                            </select>
                        </div>
                        
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message *</label>
                            <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600" required></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-3 rounded-lg hover:bg-indigo-700 transition duration-300">
                            <i class="fas fa-paper-plane mr-2"></i>Send Message
                        </button>
                        
                        <div id="formSuccess" class="hidden mt-4 p-4 bg-green-100 text-green-700 rounded-lg"></div>
                        <div id="formError" class="hidden mt-4 p-4 bg-red-100 text-red-700 rounded-lg"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo ASSETS_PATH; ?>/js/contact-form.js"></script>

<?php include INCLUDES_PATH . '/footer.php'; ?>

