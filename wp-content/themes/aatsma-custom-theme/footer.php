<!-- Footer section -->
<footer class="bg-slate-900 text-slate-300 relative overflow-hidden" aria-labelledby="footer-heading">
    
    <!-- Screen-reader only heading for accessibility -->
    <h2 id="footer-heading" class="sr-only">Footer</h2>

    <!-- Subtle dotted background overlay -->
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 20px 20px;"></div>

    <!-- Main footer container -->
    <div class="container mx-auto px-6 lg:px-8 relative z-10 pt-16 pb-8">
        
        <!-- Footer grid layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8 mb-16">
            
            <!-- Brand + description + social links -->
            <div class="space-y-6">
                
                <!-- Logo / brand link -->
                <a href="<?php echo home_url(); ?>" class="flex items-center gap-2 text-white group">
                    <div class="w-8 h-8 bg-orange-500 rounded flex items-center justify-center text-white font-bold transition-transform group-hover:rotate-12">
                        K9
                    </div>
                    <span class="text-xl font-black tracking-tight">
                        Therapy<span class="text-orange-500">.org</span>
                    </span>
                </a>
                
                <!-- Short mission statement -->
                <p class="text-sm leading-relaxed text-slate-400">
                    Dedicated to healing hearts and building bridges through the unconditional love of trained therapy dogs.
                </p>

                <!-- Social media icons -->
                <div class="flex space-x-4">
                    
                    <!-- Facebook -->
                    <a href="#" class="text-slate-400 hover:text-white transition-colors">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="#" class="text-slate-400 hover:text-white transition-colors">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.468.99c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Organization links -->
            <div>
                <h3 class="text-sm font-bold text-white uppercase tracking-wider mb-6">Organization</h3>
                <ul role="list" class="space-y-4">
                    <li><a href="#" class="text-sm hover:text-orange-500 hover:translate-x-1 transition-all inline-block">About Us</a></li>
                    <li><a href="#" class="text-sm hover:text-orange-500 hover:translate-x-1 transition-all inline-block">Our Team</a></li>
                    <li><a href="#" class="text-sm hover:text-orange-500 hover:translate-x-1 transition-all inline-block">Financials & 990s</a></li>
                    <li><a href="#" class="text-sm hover:text-orange-500 hover:translate-x-1 transition-all inline-block">Careers</a></li>
                </ul>
            </div>

            <!-- Get involved links -->
            <div>
                <h3 class="text-sm font-bold text-white uppercase tracking-wider mb-6">Get Involved</h3>
                <ul role="list" class="space-y-4">
                    <li><a href="#" class="text-sm hover:text-orange-500 hover:translate-x-1 transition-all inline-block">Request a K9 Visit</a></li>
                    <li><a href="#" class="text-sm hover:text-orange-500 hover:translate-x-1 transition-all inline-block">Volunteer</a></li>
                    <li><a href="#" class="text-sm hover:text-orange-500 hover:translate-x-1 transition-all inline-block">Partner With Us</a></li>
                    <li><a href="#" class="text-sm hover:text-orange-500 hover:translate-x-1 transition-all inline-block">Donate Crypto/Stock</a></li>
                </ul>
            </div>

            <!-- Email signup section -->
            <div>
                <h3 class="text-sm font-bold text-white uppercase tracking-wider mb-6">Join the Pack</h3>
                <p class="text-sm text-slate-400 mb-4">
                    Receive heartwarming stories and impact updates. No spam, ever.
                </p>

                <!-- Newsletter form -->
                <form class="flex flex-col gap-3">
                    <label for="email-address" class="sr-only">Email address</label>

                    <!-- Email input -->
                    <input type="email" name="email-address" id="email-address" autocomplete="email" required 
                        class="w-full min-w-0 appearance-none rounded-lg border-0 bg-white/5 px-4 py-3 text-base text-white ring-1 ring-inset ring-white/10 placeholder:text-slate-500 focus:ring-2 focus:ring-inset focus:ring-orange-500 sm:text-sm sm:leading-6 transition-all" 
                        placeholder="Enter your email">

                    <!-- Subscribe button -->
                    <button type="submit" class="flex-none rounded-lg bg-orange-500 px-3.5 py-2.5 text-sm font-bold text-white shadow-sm hover:bg-orange-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-500 transition-colors">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>

        <!-- Bottom footer bar -->
        <div class="border-t border-white/10 pt-8 mt-12 md:flex md:items-center md:justify-between">
            
            <!-- Copyright + nonprofit info -->
            <div class="flex flex-col md:flex-row gap-4 md:gap-8 text-xs text-slate-500">
                <p>&copy; <?php echo date('Y'); ?> K9 Therapy Inc. All rights reserved.</p>
                <p>K9 Therapy Inc. is a registered 501(c)(3) non-profit organization.</p>
            </div>

            <!-- Legal links -->
            <div class="mt-4 md:order-1 md:mt-0">
                <div class="flex gap-6 text-xs text-slate-500">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                    <a href="#" class="hover:text-white transition-colors">Accessibility</a>
                </div>
            </div>
        </div>
        
    </div>
</footer>

</body>
</html>
