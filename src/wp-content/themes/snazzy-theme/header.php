<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Syne:wght@700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-50 text-gray-900 antialiased'); ?>>
<?php wp_body_open(); ?>

<header class="bg-[#111827] border-b border-gray-800">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Logo area -->
            <div class="flex items-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-3 group">
                    <!-- Site Icon -->
                    <?php if ( has_site_icon() ) : ?>
                        <img src="<?php echo esc_url( get_site_icon_url( 32 ) ); ?>" alt="<?php bloginfo( 'name' ); ?> Logo" class="w-8 h-8 rounded-[2px] object-cover">
                    <?php else : ?>
                        <div class="w-8 h-8 bg-teal-400 flex items-center justify-center rounded-[2px]">
                            <span class="text-gray-950 font-black text-lg tracking-tighter">S</span>
                        </div>
                    <?php endif; ?>
                    <!-- Site Title -->
                    <span class="inline-block text-[#FFFFFF] font-bold text-[17px] leading-[28.05px] tracking-[-0.17px] font-['Syne']">
                        <?php bloginfo( 'name' ); ?>
                    </span>
                </a>
            </div>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center gap-8">
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'flex items-center gap-8',
                        'fallback_cb'    => false,
                    ) );
                } else {
                    // Fallback menu when no menu is assigned to 'primary'
                    ?>
                    <ul class="flex items-center gap-8">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="font-['DM_Sans'] font-medium text-[14px] leading-[23.1px] tracking-[0.28px] text-[#00D4AA] transition-colors">Home</a></li>
                        <li><a href="/about" class="font-['DM_Sans'] font-medium text-[14px] leading-[23.1px] tracking-[0.28px] text-[#9BA3C2] hover:text-[#00D4AA] transition-colors">About</a></li>
                        <li><a href="<?php echo esc_url( get_post_type_archive_link( 'case_study' ) ); ?>" class="font-['DM_Sans'] font-medium text-[14px] leading-[23.1px] tracking-[0.28px] text-[#9BA3C2] hover:text-[#00D4AA] transition-colors">Case Studies</a></li>
                    </ul>
                    <?php
                }
                ?>
                
                <!-- CTA Button -->
                <a href="/contact" class="bg-[#00D4AA] text-[#0B0F1A] font-['DM_Sans'] font-bold text-[13px] leading-[21.45px] tracking-[0.52px] uppercase px-6 py-2 rounded-[2px] transition-colors ml-4 border border-gray-800 hover:bg-[#0B0F1A] hover:text-[#00D4AA]">
                    Get in touch
                </a>
            </nav>

            <!-- Mobile Menu Toggle (Hamburger) -->
            <div class="md:hidden">
                <button id="mobile-menu-btn" aria-expanded="false" aria-controls="mobile-menu" class="text-gray-400 hover:text-white focus:outline-none transition-colors p-1">
                    <!-- Hamburger icon -->
                    <svg id="icon-hamburger" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <!-- Close (X) icon — hidden by default -->
                    <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Menu Panel -->
    <div id="mobile-menu" class="md:hidden hidden bg-[#111827] border-t border-gray-800">
        <nav class="container mx-auto px-4 py-4 flex flex-col gap-2">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'flex flex-col gap-2',
                    'fallback_cb'    => false,
                    'depth'          => 1,
                ) );
            } else {
                ?>
                <ul class="flex flex-col gap-2">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block font-['DM_Sans'] font-medium text-[14px] text-[#00D4AA] py-2 border-b border-gray-800">Home</a></li>
                    <li><a href="/about" class="block font-['DM_Sans'] font-medium text-[14px] text-[#9BA3C2] hover:text-[#00D4AA] transition-colors py-2 border-b border-gray-800">About</a></li>
                    <li><a href="<?php echo esc_url( get_post_type_archive_link( 'case_study' ) ); ?>" class="block font-['DM_Sans'] font-medium text-[14px] text-[#9BA3C2] hover:text-[#00D4AA] transition-colors py-2 border-b border-gray-800">Case Studies</a></li>
                </ul>
                <?php
            }
            ?>
            <a href="/contact" class="mt-3 inline-block text-center bg-[#00D4AA] text-[#0B0F1A] font-['DM_Sans'] font-bold text-[13px] uppercase px-6 py-2 rounded-[2px] hover:bg-[#0B0F1A] hover:text-[#00D4AA] border border-gray-800 transition-colors">
                Get in touch
            </a>
        </nav>
    </div>
</header>

<script>
(function () {
    var btn  = document.getElementById('mobile-menu-btn');
    var menu = document.getElementById('mobile-menu');
    var iconHamburger = document.getElementById('icon-hamburger');
    var iconClose     = document.getElementById('icon-close');

    if (!btn || !menu) return;

    btn.addEventListener('click', function () {
        var isOpen = !menu.classList.contains('hidden');

        if (isOpen) {
            menu.classList.add('hidden');
            iconHamburger.classList.remove('hidden');
            iconClose.classList.add('hidden');
            btn.setAttribute('aria-expanded', 'false');
        } else {
            menu.classList.remove('hidden');
            iconHamburger.classList.add('hidden');
            iconClose.classList.remove('hidden');
            btn.setAttribute('aria-expanded', 'true');
        }
    });
})();
</script>

