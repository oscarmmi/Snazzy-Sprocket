<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700&display=swap" rel="stylesheet">
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
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-teal-400 font-medium text-sm transition-colors">Home</a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-white font-medium text-sm transition-colors">About</a></li>
                        <li><a href="<?php echo esc_url( get_post_type_archive_link( 'case_study' ) ); ?>" class="text-gray-400 hover:text-white font-medium text-sm transition-colors">Case Studies</a></li>
                    </ul>
                    <?php
                }
                ?>
                
                <!-- CTA Button -->
                <a href="/contact" class="bg-teal-400 hover:bg-teal-300 text-gray-950 font-bold px-6 py-2 rounded-[2px] text-xs tracking-widest uppercase transition-colors ml-4">
                    Get in touch
                </a>
            </nav>

            <!-- Mobile Menu Toggle (Hamburger) -->
            <div class="md:hidden">
                <button class="text-gray-400 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

        </div>
    </div>
</header>
