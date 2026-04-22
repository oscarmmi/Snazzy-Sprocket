<?php
/**
 * Template Name: About Page
 * 
 * Template for displaying the About page.
 */
get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="bg-[#0B0F1A] text-white pt-24 pb-20 md:pt-32 md:pb-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-3xl">
                <span class="font-['DM_Sans'] font-bold text-[11px] leading-[18.15px] tracking-[2.2px] uppercase text-[#00D4AA] mb-4 block">About Us</span>
                <h1 class="font-['Syne'] font-extrabold text-5xl md:text-6xl lg:text-[72px] leading-[1.1] tracking-[-1.86px] text-white mb-6">
                    We're the team behind your next big launch
                </h1>
                <p class="font-['DM_Sans'] font-normal text-[18px] leading-[30px] tracking-[0px] text-[#9BA3C2] max-w-2xl">
                    It started with a simple idea: the web should be fast, beautiful, and accessible to everyone. Eight years later, we're still proving it — one project at a time.
                </p>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="bg-white py-24">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="font-['DM_Sans'] font-bold text-[11px] leading-[18.15px] tracking-[2.2px] uppercase text-[#009B7D] mb-4 block">Our Story</span>
                    <h2 class="font-['Syne'] font-extrabold text-[44px] leading-[48.4px] tracking-[-1.32px] text-[#0B0F1A] mb-6">
                        From side project to full-service agency
                    </h2>
                    <div class="space-y-6 font-['DM_Sans'] font-normal text-[16px] leading-[28px] tracking-[0px] text-[#6B7394]">
                        <p>What started as two developers freelancing out of a co-working space has grown into a team of 15 specialists spanning design, engineering, and strategy.</p>
                        <p>We've worked with YC-backed product startups, mid-market companies scaling their digital presence, and enterprise organizations modernizing legacy platforms.</p>
                        <p>Our approach is simple: understand the business problem first, then build the right solution using the right tools. No silver bullets, no shiny object syndrome, just solid engineering and design.</p>
                    </div>
                </div>
                <div>
                    <div class="bg-gray-100 aspect-[4/3] w-full rounded flex items-center justify-center text-gray-400">
                        <span class="font-['DM_Sans'] text-sm">Image placeholder</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="bg-gray-50 py-24 border-t border-gray-200">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="font-['DM_Sans'] font-bold text-[11px] leading-[18.15px] tracking-[2.2px] uppercase text-[#009B7D] mb-4 block text-center">Our Values</span>
                <h2 class="font-['Syne'] font-extrabold text-[44px] leading-[48.4px] tracking-[-1.32px] text-[#0B0F1A] mb-6 text-center">
                    What drives every decision
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 border border-gray-200 rounded">
                    <h3 class="font-['Syne'] font-bold text-[20px] leading-[22px] tracking-[-0.4px] text-[#0B0F1A] mb-3">Ship with Purpose</h3>
                    <p class="font-['DM_Sans'] font-normal text-[14px] leading-[23.8px] tracking-[0px] text-[#6B7394]">Every line of code should exist to solve a business problem for our users. If it doesn't move the needle, we don't build it.</p>
                </div>
                <div class="bg-white p-8 border border-gray-200 rounded">
                    <h3 class="font-['Syne'] font-bold text-[20px] leading-[22px] tracking-[-0.4px] text-[#0B0F1A] mb-3">Radical Candor</h3>
                    <p class="font-['DM_Sans'] font-normal text-[14px] leading-[23.8px] tracking-[0px] text-[#6B7394]">We tell clients what they need to hear, not just what they want to hear. Honest collaboration builds better products.</p>
                </div>
                <div class="bg-white p-8 border border-gray-200 rounded">
                    <h3 class="font-['Syne'] font-bold text-[20px] leading-[22px] tracking-[-0.4px] text-[#0B0F1A] mb-3">Craft Over Hype</h3>
                    <p class="font-['DM_Sans'] font-normal text-[14px] leading-[23.8px] tracking-[0px] text-[#6B7394]">We prioritize solid, maintainable code over chasing the latest frameworks. Quality always outlasts trends.</p>
                </div>
                <div class="bg-white p-8 border border-gray-200 rounded">
                    <h3 class="font-['Syne'] font-bold text-[20px] leading-[22px] tracking-[-0.4px] text-[#0B0F1A] mb-3">Access for All</h3>
                    <p class="font-['DM_Sans'] font-normal text-[14px] leading-[23.8px] tracking-[0px] text-[#6B7394]">The web is for everyone. Accessibility isn't an add-on or a checklist — it's a baseline requirement.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- The Team Section -->
    <section class="bg-white py-24">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="font-['DM_Sans'] font-bold text-[11px] leading-[18.15px] tracking-[2.2px] uppercase text-[#009B7D] mb-4 block text-center">The Team</span>
                <h2 class="font-['Syne'] font-extrabold text-[44px] leading-[48.4px] tracking-[-1.32px] text-[#0B0F1A] mb-4 text-center">
                    Meet the people behind the pixels
                </h2>
                <p class="font-['DM_Sans'] font-normal text-[16px] leading-[28px] tracking-[0px] text-[#6B7394] text-center">
                    A tight-knit crew of designers, developers, and strategists who care deeply about the work.
                </p>
            </div>

            <!-- Team Grid: ACF Individual Groups Loop -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 border-t border-l border-gray-200 text-center">
                <?php 
                $avatar_colors = [
                    'bg-[#00D4AA] text-[#0B0F1A]', 
                    'bg-[#4A5278] text-white', 
                    'bg-[#6B7394] text-white', 
                    'bg-[#009B7D] text-white', 
                    'bg-[#0B0F1A] text-white', 
                    'bg-[#1F2937] text-white'
                ];

                $has_members = false;
                
                // Bucle para iterar sobre los 10 grupos (Ej: 'team_member_1' hasta 'team_member_10')
                for ( $i = 1; $i <= 10; $i++ ) {
                    // Intenta buscar con prefijo 'team_member_' o solo 'member_'
                    $member_group = get_field('team_member_' . $i);
                    if ( !$member_group ) {
                        $member_group = get_field('member_' . $i);
                    }

                    // Si el grupo existe y tiene al menos un nombre
                    if ( $member_group && !empty($member_group['name']) ) {
                        $has_members = true;
                        
                        $name = $member_group['name'];
                        $role = $member_group['role'];
                        $photo = isset($member_group['photo']) ? $member_group['photo'] : '';
                        $bio = isset($member_group['bio']) ? $member_group['bio'] : '';
                        
                        // Extraer URL de la foto (ACF puede devolver un Array, una URL o un ID)
                        $photo_url = '';
                        if ( is_array($photo) && isset($photo['url']) ) {
                            $photo_url = $photo['url'];
                        } elseif ( is_string($photo) && filter_var($photo, FILTER_VALIDATE_URL) ) {
                            $photo_url = $photo;
                        } elseif ( is_numeric($photo) ) {
                            $photo_url = wp_get_attachment_url($photo);
                        }

                        // Lógica de Iniciales por si no hay foto
                        $words = explode(' ', $name);
                        $initials = '';
                        foreach( $words as $w ) {
                            if(!empty($w)) $initials .= strtoupper($w[0]);
                        }
                        $initials = substr($initials, 0, 2);

                        $color_class = $avatar_colors[ ($i - 1) % count($avatar_colors) ];
                ?>
                    <div class="p-8 border-r border-b border-gray-200">
                        
                        <?php if ( $photo_url ) : ?>
                            <!-- Mostrar Foto de ACF -->
                            <div class="w-16 h-16 mx-auto mb-4 rounded overflow-hidden">
                                <img src="<?php echo esc_url($photo_url); ?>" alt="<?php echo esc_attr($name); ?>" class="w-full h-full object-cover">
                            </div>
                        <?php else : ?>
                            <!-- Fallback: Mostrar Iniciales si no hay foto -->
                            <div class="w-16 h-16 mx-auto <?php echo $color_class; ?> flex items-center justify-center text-xl font-bold rounded mb-4">
                                <?php echo esc_html( $initials ); ?>
                            </div>
                        <?php endif; ?>
                        
                        <h3 class="font-['Syne'] font-bold text-[18px] text-[#0B0F1A] mb-1">
                            <?php echo esc_html( $name ); ?>
                        </h3>
                        <span class="font-['DM_Sans'] font-bold text-[10px] tracking-widest uppercase text-[#009B7D] block mb-3">
                            <?php echo esc_html( $role ); ?>
                        </span>
                        <?php if ( $bio ) : ?>
                        <p class="font-['DM_Sans'] text-[13px] text-[#6B7394] leading-relaxed">
                            <?php echo esc_html( $bio ); ?>
                        </p>
                        <?php endif; ?>
                    </div>
                <?php 
                    }
                }

                if ( !$has_members ) : 
                ?>
                    <div class="col-span-full p-8 text-center text-[#6B7394] font-['DM_Sans'] border-r border-b border-gray-200">
                        No team members found. Check your ACF Group field names (they should be named 'team_member_1', 'team_member_2', etc.)
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="container mx-auto px-4 lg:px-8 py-20 mb-10">
        <div class="bg-[#0B0F1A] text-center py-24 px-4 rounded-[4px] shadow-2xl">
            <h2 class="font-['Syne'] font-extrabold text-[36px] leading-[39.6px] tracking-[-0.72px] text-white text-center mb-4">Want to join the team?</h2>
            <p class="font-['DM_Sans'] font-normal text-[16px] leading-[26.4px] tracking-[0px] text-[#6B7394] text-center mb-10 max-w-xl mx-auto">We're always looking for talented people with a passion for craft. Check out our open roles.</p>
            <a href="/careers" class="inline-block bg-[#00D4AA] text-[#0B0F1A] font-['DM_Sans'] font-bold text-[13px] leading-[21.45px] tracking-[0.39px] uppercase px-8 py-4 rounded-[2px] transition-colors hover:bg-white hover:text-[#0B0F1A]">
                VIEW OPEN POSITIONS &rarr;
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
