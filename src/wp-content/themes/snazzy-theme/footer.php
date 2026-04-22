<?php
/**
 * The template for displaying the footer
 */
?>
    <footer class="bg-[#0B0F1A] text-white py-20 mt-auto font-['DM_Sans']">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 mb-16">
                
                <div class="lg:col-span-2">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-3 group mb-6">
                        <!-- Site Icon -->
                        <?php if ( has_site_icon() ) : ?>
                            <img src="<?php echo esc_url( get_site_icon_url( 32 ) ); ?>" alt="<?php bloginfo( 'name' ); ?> Logo" class="w-8 h-8 rounded-[2px] object-cover">
                        <?php else : ?>
                            <div class="w-8 h-8 bg-[#00D4AA] flex items-center justify-center rounded-[2px]">
                                <span class="text-[#0B0F1A] font-black text-lg tracking-tighter">S</span>
                            </div>
                        <?php endif; ?>
                        <!-- Site Title -->
                        <span class="inline-block text-[#FFFFFF] font-bold text-[17px] leading-[28.05px] tracking-[-0.17px] font-['Syne']">
                            <?php bloginfo( 'name' ); ?>
                        </span>
                    </a>
                    <p class="font-['DM_Sans'] font-normal text-[14px] leading-[23.8px] tracking-[0px] text-[#4A5278] max-w-sm">
                        High-performance digital experiences for ambitious brands. Based in Philadelphia, working worldwide.
                    </p>
                </div>
                
                <div>
                    <h4 class="font-bold text-[11px] leading-[18.15px] tracking-[2.2px] uppercase text-white mb-6">Company</h4>
                    <ul class="flex flex-col gap-3">
                        <li><a href="/about" class="text-[#6B7394] text-[14px] hover:text-[#00D4AA] transition-colors">About</a></li>
                        <li><a href="/case-studies" class="text-[#6B7394] text-[14px] hover:text-[#00D4AA] transition-colors">Case Studies</a></li>
                        <li><a href="/contact" class="text-[#6B7394] text-[14px] hover:text-[#00D4AA] transition-colors">Contact</a></li>
                        <li><a href="/careers" class="text-[#6B7394] text-[14px] hover:text-[#00D4AA] transition-colors">Careers</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold text-[11px] leading-[18.15px] tracking-[2.2px] uppercase text-white mb-6">Services</h4>
                    <ul class="flex flex-col gap-3">
                        <li><a href="/services/web-design" class="text-[#6B7394] text-[14px] hover:text-[#00D4AA] transition-colors">Web Design</a></li>
                        <li><a href="/services/development" class="text-[#6B7394] text-[14px] hover:text-[#00D4AA] transition-colors">Development</a></li>
                        <li><a href="/services/seo" class="text-[#6B7394] text-[14px] hover:text-[#00D4AA] transition-colors">SEO</a></li>
                        <li><a href="/services/hosting" class="text-[#6B7394] text-[14px] hover:text-[#00D4AA] transition-colors">Hosting</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold text-[11px] leading-[18.15px] tracking-[2.2px] uppercase text-white mb-6">Connect</h4>
                    <ul class="flex flex-col gap-3">
                        <li><a href="#" class="text-[#6B7394] text-[14px] hover:text-[#00D4AA] transition-colors">Twitter / X</a></li>
                        <li><a href="#" class="text-[#6B7394] text-[14px] hover:text-[#00D4AA] transition-colors">LinkedIn</a></li>
                        <li><a href="#" class="text-[#6B7394] text-[14px] hover:text-[#00D4AA] transition-colors">Dribbble</a></li>
                        <li><a href="#" class="text-[#6B7394] text-[14px] hover:text-[#00D4AA] transition-colors">GitHub</a></li>
                    </ul>
                </div>
                
            </div>
            
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-[#6B7394] text-[13px]">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
                <div class="flex gap-4">
                    <a href="/privacy" class="text-[#6B7394] text-[13px] hover:text-[#00D4AA] transition-colors">Privacy Policy</a>
                    <span class="text-[#6B7394] text-[13px]">&middot;</span>
                    <a href="/terms" class="text-[#6B7394] text-[13px] hover:text-[#00D4AA] transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
</body>
</html>
