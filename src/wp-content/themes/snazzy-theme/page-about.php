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

            <!-- Team Grid: Using border merge layout similar to services on front-page -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 border-t border-l border-gray-200 text-center">
                <!-- Team Member 1 -->
                <div class="p-8 border-r border-b border-gray-200">
                    <div class="w-16 h-16 mx-auto bg-[#00D4AA] text-[#0B0F1A] flex items-center justify-center text-xl font-bold rounded mb-4">JK</div>
                    <h3 class="font-['Syne'] font-bold text-[18px] text-[#0B0F1A] mb-1">Jordan Klein</h3>
                    <span class="font-['DM_Sans'] font-bold text-[10px] tracking-widest uppercase text-[#009B7D] block mb-3">Founder & CTO</span>
                    <p class="font-['DM_Sans'] text-[13px] text-[#6B7394] leading-relaxed">Full-stack developer with 12 years of experience building high-performance systems.</p>
                </div>
                <!-- Team Member 2 -->
                <div class="p-8 border-r border-b border-gray-200">
                    <div class="w-16 h-16 mx-auto bg-[#4A5278] text-white flex items-center justify-center text-xl font-bold rounded mb-4">SP</div>
                    <h3 class="font-['Syne'] font-bold text-[18px] text-[#0B0F1A] mb-1">Sarah Patel</h3>
                    <span class="font-['DM_Sans'] font-bold text-[10px] tracking-widest uppercase text-[#009B7D] block mb-3">Creative Director</span>
                    <p class="font-['DM_Sans'] text-[13px] text-[#6B7394] leading-relaxed">Award-winning designer with a focus on intuitive user experiences and brand identity.</p>
                </div>
                <!-- Team Member 3 -->
                <div class="p-8 border-r border-b border-gray-200">
                    <div class="w-16 h-16 mx-auto bg-[#6B7394] text-white flex items-center justify-center text-xl font-bold rounded mb-4">MC</div>
                    <h3 class="font-['Syne'] font-bold text-[18px] text-[#0B0F1A] mb-1">Marcus Chen</h3>
                    <span class="font-['DM_Sans'] font-bold text-[10px] tracking-widest uppercase text-[#009B7D] block mb-3">Lead Developer</span>
                    <p class="font-['DM_Sans'] text-[13px] text-[#6B7394] leading-relaxed">WordPress core contributor. Turns complex requirements into elegant code solutions.</p>
                </div>
                <!-- Team Member 4 -->
                <div class="p-8 border-r border-b border-gray-200">
                    <div class="w-16 h-16 mx-auto bg-[#009B7D] text-white flex items-center justify-center text-xl font-bold rounded mb-4">AR</div>
                    <h3 class="font-['Syne'] font-bold text-[18px] text-[#0B0F1A] mb-1">Aisha Rahman</h3>
                    <span class="font-['DM_Sans'] font-bold text-[10px] tracking-widest uppercase text-[#009B7D] block mb-3">SEO Strategist</span>
                    <p class="font-['DM_Sans'] text-[13px] text-[#6B7394] leading-relaxed">Data nerd who helps our clients dominate search results and maximize their ROI.</p>
                </div>
                <!-- Team Member 5 -->
                <div class="p-8 border-r border-b border-gray-200">
                    <div class="w-16 h-16 mx-auto bg-[#0B0F1A] text-white flex items-center justify-center text-xl font-bold rounded mb-4">TN</div>
                    <h3 class="font-['Syne'] font-bold text-[18px] text-[#0B0F1A] mb-1">Tomás Navarro</h3>
                    <span class="font-['DM_Sans'] font-bold text-[10px] tracking-widest uppercase text-[#009B7D] block mb-3">Frontend Developer</span>
                    <p class="font-['DM_Sans'] text-[13px] text-[#6B7394] leading-relaxed">Obsessed with Web Core Vitals and smooth animations. CSS wizard.</p>
                </div>
                
                <!-- Second Row -->
                <!-- Team Member 6 -->
                <div class="p-8 border-r border-b border-gray-200">
                    <div class="w-16 h-16 mx-auto bg-[#1F2937] text-white flex items-center justify-center text-xl font-bold rounded mb-4">LW</div>
                    <h3 class="font-['Syne'] font-bold text-[18px] text-[#0B0F1A] mb-1">Lily Wall-Rust</h3>
                    <span class="font-['DM_Sans'] font-bold text-[10px] tracking-widest uppercase text-[#009B7D] block mb-3">Project Manager</span>
                    <p class="font-['DM_Sans'] text-[13px] text-[#6B7394] leading-relaxed">Keeps projects on track and stakeholders happy. Certified Scrum Master.</p>
                </div>
                <!-- Team Member 7 -->
                <div class="p-8 border-r border-b border-gray-200">
                    <div class="w-16 h-16 mx-auto bg-[#00D4AA] text-[#0B0F1A] flex items-center justify-center text-xl font-bold rounded mb-4">DG</div>
                    <h3 class="font-['Syne'] font-bold text-[18px] text-[#0B0F1A] mb-1">David Glass</h3>
                    <span class="font-['DM_Sans'] font-bold text-[10px] tracking-widest uppercase text-[#009B7D] block mb-3">Backend Developer</span>
                    <p class="font-['DM_Sans'] text-[13px] text-[#6B7394] leading-relaxed">Database architect and API integrations expert. Loves complex logic.</p>
                </div>
                <!-- Team Member 8 -->
                <div class="p-8 border-r border-b border-gray-200">
                    <div class="w-16 h-16 mx-auto bg-[#4A5278] text-white flex items-center justify-center text-xl font-bold rounded mb-4">RJ</div>
                    <h3 class="font-['Syne'] font-bold text-[18px] text-[#0B0F1A] mb-1">Riley Jones</h3>
                    <span class="font-['DM_Sans'] font-bold text-[10px] tracking-widest uppercase text-[#009B7D] block mb-3">UI/UX Designer</span>
                    <p class="font-['DM_Sans'] text-[13px] text-[#6B7394] leading-relaxed">Turns wireframes into beautiful, accessible interfaces. Figma enthusiast.</p>
                </div>
                <!-- Team Member 9 -->
                <div class="p-8 border-r border-b border-gray-200">
                    <div class="w-16 h-16 mx-auto bg-[#6B7394] text-white flex items-center justify-center text-xl font-bold rounded mb-4">EF</div>
                    <h3 class="font-['Syne'] font-bold text-[18px] text-[#0B0F1A] mb-1">Elena Fang</h3>
                    <span class="font-['DM_Sans'] font-bold text-[10px] tracking-widest uppercase text-[#009B7D] block mb-3">Content Strategist</span>
                    <p class="font-['DM_Sans'] text-[13px] text-[#6B7394] leading-relaxed">Wordsmith who ensures every message resonates with the target audience.</p>
                </div>
                <!-- Team Member 10 -->
                <div class="p-8 border-r border-b border-gray-200">
                    <div class="w-16 h-16 mx-auto bg-[#009B7D] text-white flex items-center justify-center text-xl font-bold rounded mb-4">NB</div>
                    <h3 class="font-['Syne'] font-bold text-[18px] text-[#0B0F1A] mb-1">Niko Brooks</h3>
                    <span class="font-['DM_Sans'] font-bold text-[10px] tracking-widest uppercase text-[#009B7D] block mb-3">Support Engineer</span>
                    <p class="font-['DM_Sans'] text-[13px] text-[#6B7394] leading-relaxed">Ensures everything runs smoothly post-launch. Master of debugging.</p>
                </div>
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
