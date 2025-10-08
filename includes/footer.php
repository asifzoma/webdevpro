    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <i class="fas fa-chart-line text-3xl text-indigo-400"></i>
                        <h3 class="text-2xl font-bold text-white">SEO<span class="text-indigo-400">Boost</span>Pro</h3>
                    </div>
                    <p class="mb-6">Helping businesses grow through proven SEO strategies and expert optimization since 2010.</p>
                    <div class="flex space-x-4">
                        <a href="<?php echo FACEBOOK_URL; ?>" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="<?php echo TWITTER_URL; ?>" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="<?php echo LINKEDIN_URL; ?>" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="<?php echo INSTAGRAM_URL; ?>" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-white font-bold text-lg mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="/services" class="hover:text-white transition duration-300">Services</a></li>
                        <li><a href="/pricing" class="hover:text-white transition duration-300">Pricing</a></li>
                        <li><a href="/#process" class="hover:text-white transition duration-300">Our Process</a></li>
                        <li><a href="/contact" class="hover:text-white transition duration-300">Contact</a></li>
                        <li><a href="/blog" class="hover:text-white transition duration-300">Blog</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-bold text-lg mb-6">Services</h4>
                    <ul class="space-y-3">
                        <li><a href="/services#keyword-research" class="hover:text-white transition duration-300">Keyword Research</a></li>
                        <li><a href="/services#on-page" class="hover:text-white transition duration-300">On-Page SEO</a></li>
                        <li><a href="/services#technical" class="hover:text-white transition duration-300">Technical SEO</a></li>
                        <li><a href="/services#content" class="hover:text-white transition duration-300">Content Marketing</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-bold text-lg mb-6">Legal</h4>
                    <ul class="space-y-3">
                        <li><a href="/privacy" class="hover:text-white transition duration-300">Privacy Policy</a></li>
                        <li><a href="/terms" class="hover:text-white transition duration-300">Terms of Service</a></li>
                        <li><a href="/cookies" class="hover:text-white transition duration-300">Cookie Policy</a></li>
                        <li><a href="/gdpr" class="hover:text-white transition duration-300">GDPR Compliance</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 text-sm">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="/sitemap" class="hover:text-white transition duration-300">Sitemap</a>
                        <a href="/careers" class="hover:text-white transition duration-300">Careers</a>
                        <a href="/support" class="hover:text-white transition duration-300">Support</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="<?php echo ASSETS_PATH; ?>/js/main.js"></script>
</body>
</html>

