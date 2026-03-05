<?php get_header(); ?> 
<!-- Pulling in the global header -->

<?php get_template_part('hero') ?>
<!-- Loading the hero section from a separate template file -->


<!-- Partners  -->
<section class="py-24 bg-slate-50/50">
    <!-- Main container for the partners section -->
    <div class="container mx-auto px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-20">
            <!-- Section intro with heading + subtext -->
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight mb-6">
                Trusted by Massachusetts' Leaders
            </h2>
            <p class="text-xl text-slate-600 font-medium leading-relaxed">
                We are honored to partner with premier law enforcement agencies, universities, and healthcare facilities across the Commonwealth.
            </p>
        </div>

        <!-- Grid of partner logos -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 lg:gap-8">
            
            <!-- Each logo card -->
            <div class="group relative bg-white p-8 rounded-2xl shadow-sm border border-slate-100 flex items-center justify-center transition-all duration-500 hover:shadow-xl hover:-translate-y-2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/hardvard.jpg" 
                     alt="Harvard" 
                     class="h-24 w-full object-contain transform transition-transform duration-500 group-hover:scale-110">
            </div>

            <div class="group relative bg-white p-8 rounded-2xl shadow-sm border border-slate-100 flex items-center justify-center transition-all duration-500 hover:shadow-xl hover:-translate-y-2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/wpi.webp" 
                     alt="WPI" 
                     class="h-24 w-full object-contain transform transition-transform duration-500 group-hover:scale-110">
            </div>

            <div class="group relative bg-white p-8 rounded-2xl shadow-sm border border-slate-100 flex items-center justify-center transition-all duration-500 hover:shadow-xl hover:-translate-y-2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/wpd.webp" 
                     alt="Worcester Police" 
                     class="h-28 w-full object-contain transform transition-transform duration-500 group-hover:scale-110">
            </div>

            <div class="group relative bg-white p-8 rounded-2xl shadow-sm border border-slate-100 flex items-center justify-center transition-all duration-500 hover:shadow-xl hover:-translate-y-2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/holycross.gif" 
                     alt="Holy Cross" 
                     class="h-24 w-full object-contain transform transition-transform duration-500 group-hover:scale-110">
            </div>

            <div class="group relative bg-white p-8 rounded-2xl shadow-sm border border-slate-100 flex items-center justify-center transition-all duration-500 hover:shadow-xl hover:-translate-y-2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/adCare.png" 
                     alt="AdCare" 
                     class="h-20 w-full object-contain transform transition-transform duration-500 group-hover:scale-110">
            </div>

        </div>
        
        <div class="mt-16 text-center">
            <!-- Small label under the logos -->
            <p class="text-sm font-bold text-slate-400 uppercase tracking-[0.3em]">Institutional Partners & Affiliates</p>
        </div>
    </div>
</section>


<!-- Making headlines -->
<section class="py-24 bg-slate-50 relative overflow-hidden">
    <!-- Decorative blurred background shapes -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 opacity-30">
        <div class="absolute -top-[20%] -left-[10%] w-[50%] h-[50%] rounded-full bg-gray-300 blur-3xl"></div>
        <div class="absolute top-[40%] right-[0%] w-[40%] h-[60%] rounded-full bg-slate-200 blur-3xl"></div>
    </div>

    <div class="container mx-auto px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row gap-12 items-center">
            
            <!-- Video embed section -->
            <div class="w-full lg:w-1/2">
                <div class="relative pb-[56.25%] h-0 rounded-2xl overflow-hidden shadow-2xl bg-black">
                    <iframe 
                        class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/wiU_ML-t8rw" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <!-- Headlines text + links -->
            <div class="w-full lg:w-1/2 space-y-8">
                <div>
                    <h2 class="text-4xl font-black text-slate-900 mb-4">Making Headlines & <br>Healing Hearts</h2>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        From viral moments on Good Morning America to deep community impact stories in local papers, our mission is resonating across the country. See how our canine companions are changing the face of therapy.
                    </p>
                </div>

                <!-- Article link cards -->
                <div class="space-y-4">
                    <a href="#" class="block p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow border border-slate-100 flex items-center gap-4 group">
                        <div class="w-12 h-12 bg-slate-100 rounded-lg flex items-center justify-center text-slate-400">
                            <!-- Icon -->
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 group-hover:text-orange-500 transition-colors">Worcester Telegram & Gazette Feature</h4>
                            <p class="text-sm text-slate-500">"Local heroes on four legs serve the community..."</p>
                        </div>
                    </a>
                    
                    <a href="#" class="block p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow border border-slate-100 flex items-center gap-4 group">
                        <div class="w-12 h-12 bg-slate-100 rounded-lg flex items-center justify-center text-slate-400">
                            <!-- Icon -->
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 group-hover:text-orange-500 transition-colors">Kim Fontaine's Therapy Dog Journey</h4>
                            <p class="text-sm text-slate-500">Watch the full interview on our channel.</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Support our mission or request a visit -->
<section class="py-24 bg-slate-900 text-white relative">
    <!-- Dark section with two cards: donation + visit request -->
    <div class="container mx-auto px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8 lg:gap-16">
            
            <!-- Donation card -->
            <div class="bg-slate-800 rounded-3xl p-8 lg:p-12 border border-white/5 relative overflow-hidden group">
                <h3 class="text-3xl font-black mb-4">Support Our Mission</h3>
                <p class="text-slate-400 mb-8 text-lg">Your contributions help us train more dogs and reach more people in need across Massachusetts.</p>
                
                <!-- PayPal donation button -->
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="inline-block">
                    <button class="bg-orange-500 text-white font-bold py-4 px-8 rounded-xl shadow-lg hover:bg-orange-400 hover:scale-105 transition-all transform flex items-center gap-2">
                        <span>Make a Donation</span>
                        <!-- Dollar Icon -->
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </button>
                </form>
            </div>

            <!-- Visit request card -->
            <div class="bg-white rounded-3xl p-8 lg:p-12 text-slate-900 border border-slate-200 shadow-xl relative overflow-hidden">
                <h3 class="text-3xl font-black mb-4">Request a Visit</h3>
                <p class="text-slate-600 mb-8 text-lg">Interested in having a therapy dog visit your school, hospital, or police department?</p>
                <a href="/contact" class="inline-flex items-center bg-slate-900 text-white justify-center w-full sm:w-auto py-4 px-8 border-2 border-slate-900 rounded-xl font-bold hover:scale-105 hover:bg-slate-950 transition-all">
                    Schedule a Visit
                </a>
                <p class="mt-4 text-xs text-slate-400 text-center sm:text-left">*Subject to availability and location</p>
            </div>

        </div>
    </div>
</section>


<!-- Data numbers to attract -->
<section class="py-12 bg-white">
    <!-- Quick stats section -->
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 border-y border-slate-100 py-12">
            <div class="text-center">
                <div class="text-4xl font-black text-slate-900">500+</div>
                <div class="text-sm font-bold text-orange-500 uppercase tracking-widest mt-2">Visits Conducted</div>
            </div>
            <div class="text-center border-x border-slate-100">
                <div class="text-4xl font-black text-slate-900">45+</div>
                <div class="text-sm font-bold text-orange-500 uppercase tracking-widest mt-2">Active K9 Heroes</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-black text-slate-900">12k</div>
                <div class="text-sm font-bold text-orange-500 uppercase tracking-widest mt-2">Hearts Touched</div>
            </div>
            <div class="text-center border-l border-slate-100">
                <div class="text-4xl font-black text-slate-900">100%</div>
                <div class="text-sm font-bold text-orange-500 uppercase tracking-widest mt-2">Safety Record</div>
            </div>
        </div>
    </div>
</section>


<!-- Testimonials from people -->
<section class="py-24 bg-slate-50 overflow-hidden relative">
    
    <!-- Background blur effects -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full z-0 pointer-events-none">
        <div class="absolute top-20 left-10 w-96 h-96 bg-orange-200/20 rounded-full blur-[100px]"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-slate-200/40 rounded-full blur-[100px]"></div>
    </div>

    <div class="container mx-auto px-6 lg:px-8 relative z-10">
        
        <!-- Testimonials header -->
        <div class="text-center max-w-2xl mx-auto mb-20">
            <span class="text-orange-500 font-bold tracking-widest uppercase text-xs mb-3 block">Community Feedback</span>
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight leading-tight mb-6">
                The Impact of a Paw.
            </h2>
            <p class="text-lg md:text-xl text-slate-600 font-medium leading-relaxed">
                Real stories from the frontline of community wellness, proving that sometimes the best medicine has four legs.
            </p>
        </div>
</section>


<?php get_footer(); ?>
