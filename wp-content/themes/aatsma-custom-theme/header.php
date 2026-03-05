<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Character encoding from WordPress settings -->
    <meta charset="<?php bloginfo('charset'); ?>">

    <!-- Makes the site responsive on all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Google Fonts preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Plus Jakarta Sans font family -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js for lightweight interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind custom config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    // Custom font family
                    fontFamily: { sans: ['"Plus Jakarta Sans"', 'sans-serif'] },

                    // Brand color palette
                    colors: {
                        brand: {
                            dark: '#0f172a', // Deep slate background
                            accent: '#fb923c' // Accent orange
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- WordPress head hook (plugins, styles, scripts) -->
    <?php wp_head(); ?>

    <style>
        /* Hide Alpine elements until JS loads */
        [x-cloak] { display: none !important; }

        /* Remove default WP admin margin */
        html { margin-top: 0 !important; }
        
        /* Animated underline for nav links */
        .nav-link-item { position: relative; padding: 0.5rem 0; }
        .nav-link-item::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #fb923c;
            transition: width 0.3s ease;
        }
        .nav-link-item:hover::after, 
        .current-menu-item > a::after { width: 100%; }

        /* Slim custom scrollbar for mobile menu */
        #mobile-drawer::-webkit-scrollbar { width: 4px; }
        #mobile-drawer::-webkit-scrollbar-thumb { background: #334155; border-radius: 10px; }
    </style>
</head>

<body <?php body_class("bg-gray-50 antialiased font-sans"); ?>>

<!-- Alpine.js state for mobile menu + scroll detection -->
<div x-data="{ mobileMenu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)">

    <!-- Fixed header / navbar -->
    <header 
        :class="scrolled ? 'bg-brand-dark/95 backdrop-blur-md py-3 shadow-2xl' : 'bg-brand-dark py-5'"
        class="fixed top-0 w-full z-50 transition-all duration-300 border-b border-white/5"
    >
        <div class="max-w-7xl mx-auto px-6 lg:px-8 flex items-center justify-between">
            
            <!-- Logo / home link -->
            <a href="<?php echo home_url(); ?>" class="shrink-0 group">
                <span class="text-2xl font-black tracking-tighter text-white uppercase group-hover:text-brand-accent transition-colors">
                    AATS
                </span>
            </a>

            <!-- Desktop navigation menu -->
            <nav class="hidden lg:block ml-10">
                <ul class="flex items-center space-x-8 text-[13px] font-bold tracking-widest uppercase text-white/80">
                    <?php 
                    // Pulls the Primary Menu from WordPress admin
                    wp_nav_menu([
                        'theme_location' => 'primary_menu',
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                        'fallback_cb'    => false,
                        'link_before'    => '<span class="nav-link-item hover:text-white transition-all">',
                        'link_after'     => '</span>',
                    ]); 
                    ?>
                </ul>
            </nav>

            <!-- Right-side header actions -->
            <div class="flex items-center gap-4 flex-1 justify-end">
                
                <!-- Search form (desktop only) -->
                <form action="<?php echo home_url('/'); ?>" method="get" class="relative hidden md:block group">
                    <input type="text" name="s" placeholder="Search..." 
                        class="bg-white/5 border border-white/10 text-white text-sm rounded-full py-2 px-5 pl-10 w-40 lg:w-56 focus:w-72 focus:bg-white focus:text-brand-dark focus:outline-none transition-all duration-500 placeholder:text-white/30">
                    
                    <!-- Search icon -->
                    <svg class="w-4 h-4 absolute left-3.5 top-2.5 text-white/30 group-focus-within:text-brand-dark transition-colors" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                        <path d="M21 21l-4.35-4.35M19 11a8 8 0 11-16 0 8 8 0 0116 0z"/>
                    </svg>
                </form>

                <!-- CTA button -->
                <a href="/courses" class="hidden sm:block bg-brand-accent hover:bg-orange-500 text-brand-dark text-[11px] font-black uppercase tracking-[0.15em] px-6 py-2.5 rounded-full transition-all active:scale-95 shadow-lg shadow-orange-500/20">
                    Enroll Now
                </a>

                <!-- Mobile menu button -->
                <button @click="mobileMenu = true" class="lg:hidden text-white p-2">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile menu (teleported to body) -->
    <template x-teleport="body">
        <div>
            <!-- Dark overlay -->
            <div x-show="mobileMenu" x-cloak class="fixed inset-0 bg-brand-dark/60 backdrop-blur-sm z-[60] lg:hidden" @click="mobileMenu = false" x-transition.opacity></div>

            <!-- Slide-in drawer -->
            <div x-show="mobileMenu" x-cloak id="mobile-drawer"
                class="fixed inset-y-0 right-0 w-[300px] bg-brand-dark z-[70] shadow-2xl lg:hidden p-8 flex flex-col"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full">
                
                <!-- Mobile menu header -->
                <div class="flex justify-between items-center mb-10">
                    <span class="text-white font-black tracking-tighter text-xl uppercase">Menu</span>
                    <button @click="mobileMenu = false" class="text-white/50 hover:text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <!-- Mobile navigation links -->
                <nav class="flex-1">
                    <ul class="flex flex-col space-y-6 text-xl font-bold text-white">
                        <?php wp_nav_menu([
                            'theme_location' => 'primary_menu',
                            'container'      => false,
                            'items_wrap'     => '%3$s'
                        ]); ?>
                    </ul>
                </nav>

                <!-- Mobile CTA -->
                <div class="mt-10 pt-6 border-t border-white/10">
                    <a href="/courses" class="block w-full text-center bg-brand-accent text-brand-dark font-black py-4 rounded-xl uppercase tracking-widest text-sm">
                        Enroll Now
                    </a>
                </div>
            </div>
        </div>
    </template>

</div>

<!-- WordPress footer hook -->
<?php wp_footer(); ?>
</body>
</html>
