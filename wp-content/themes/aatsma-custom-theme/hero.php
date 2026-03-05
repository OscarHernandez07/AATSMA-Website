<?php
// Debug helper to confirm the hero image path is correct
// This logs the full image URL to the browser console
$image_url = get_template_directory_uri() . '/images/hero.jpg';
echo "<script>console.log('Hero Image Path: " . $image_url . "');</script>";
?>

<!-- Hero section -->
<section class="relative min-h-[90vh] flex items-center overflow-hidden bg-slate-900">

    <!-- Background image wrapper -->
    <div class="absolute inset-0 overflow-hidden">

        <!-- Hero background image -->
        <img
            src="<?php echo esc_url($image_url); ?>"
            alt="Animal Assisted Therapy"
            class="w-full h-full object-cover object-center scale-105 animate-subtle-zoom"
        >

        <!-- Dark gradient overlay for readability -->
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/85 via-slate-900/40 to-transparent"></div>
    </div>

    <!-- Main hero content container -->
    <div class="container mx-auto px-6 lg:px-8 relative z-20">
        <div class="max-w-3xl">

            <!-- Main headline -->
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white leading-[0.9] tracking-tighter mb-8 animate-slide-up">
                Healing <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-orange-600">
                    Unconditional.
                </span>
            </h1>

            <!-- Hero description text -->
            <p class="text-lg md:text-xl text-white/70 max-w-xl mb-10 leading-relaxed font-medium animate-slide-up-delayed">
                We bridge the gap between human connection and animal empathy. Proudly serving Massachusetts as a premier 501(c)3 non-profit organization dedicated to therapeutic excellence.
            </p>

            <!-- Call-to-action buttons -->
            <div class="flex flex-wrap items-center gap-5 animate-slide-up-delayed-more">

                <!-- Primary CTA button -->
                <a href="#services" class="group relative px-8 py-4 bg-orange-500 overflow-hidden rounded-xl transition-all shadow-2xl shadow-orange-500/40">
                    <span class="relative z-10 text-slate-900 font-black uppercase tracking-widest text-sm">
                        Explore Services
                    </span>
                </a>

                <!-- Secondary CTA link -->
                <a href="/contact" class="flex relative px-8 py-4 bg-orange-500 overflow-hidden rounded-xl transition-all shadow-2xl shadow-orange-500/40">
                    <span class="relative z-10 text-slate-900 font-black uppercase tracking-widest text-sm">

                    </span>
                    Contact Us
                </a>

            </div>
        </div>
    </div>
</section>
