<?php
/**
 * Template Name: Contact Page
 * 
 * Template for displaying the Contact page.
 */
get_header(); ?>

<main>
    
    <!-- Hero Section -->
    <section class="bg-[#0B0F1A] text-white pt-24 pb-20 md:pt-32 md:pb-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-3xl">
                <span class="font-['DM_Sans'] font-bold text-[11px] leading-[18.15px] tracking-[2.2px] uppercase text-[#00D4AA] mb-4 block">About Us</span>
                <h1 class="font-['Syne'] font-extrabold text-5xl md:text-6xl lg:text-[72px] leading-[1.1] tracking-[-1.86px] text-white mb-6">
                    Let's build something together
                </h1>
                <p class="font-['DM_Sans'] font-normal text-[18px] leading-[30px] tracking-[0px] text-[#9BA3C2] max-w-2xl">
                    Have a project in mind? Fill out the form below and we'll get back to you within one business day.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="bg-gray-50 py-24">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12 lg:gap-8">
                
                <!-- Left Container (70% width) -->
                <div class="w-full lg:w-[70%]">
                    <div class="bg-white p-8 lg:p-12 rounded border border-gray-200 h-full">
                        <form action="#" method="POST" class="space-y-6">
                            <!-- Name fields -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="first_name" class="font-['DM_Sans'] font-bold text-[11px] leading-[18.15px] tracking-[1.5px] uppercase text-[#0B0F1A] mb-2 block">First Name</label>
                                    <input type="text" id="first_name" name="first_name" placeholder="Jane" class="w-full border border-gray-200 rounded-[2px] px-4 py-3 font-['DM_Sans'] text-[15px] text-[#0B0F1A] placeholder-gray-400 focus:outline-none focus:border-[#00D4AA] transition-colors">
                                </div>
                                <div>
                                    <label for="last_name" class="font-['DM_Sans'] font-bold text-[11px] leading-[18.15px] tracking-[1.5px] uppercase text-[#0B0F1A] mb-2 block">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" placeholder="Smith" class="w-full border border-gray-200 rounded-[2px] px-4 py-3 font-['DM_Sans'] text-[15px] text-[#0B0F1A] placeholder-gray-400 focus:outline-none focus:border-[#00D4AA] transition-colors">
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div>
                                <label for="email" class="font-['DM_Sans'] font-bold text-[11px] leading-[18.15px] tracking-[1.5px] uppercase text-[#0B0F1A] mb-2 block">Email Address</label>
                                <input type="email" id="email" name="email" placeholder="jane@company.com" class="w-full border border-gray-200 rounded-[2px] px-4 py-3 font-['DM_Sans'] text-[15px] text-[#0B0F1A] placeholder-gray-400 focus:outline-none focus:border-[#00D4AA] transition-colors">
                            </div>

                            <!-- Company -->
                            <div>
                                <label for="company" class="font-['DM_Sans'] font-bold text-[11px] leading-[18.15px] tracking-[1.5px] uppercase text-[#0B0F1A] mb-2 block">Company</label>
                                <input type="text" id="company" name="company" placeholder="Acme Corp" class="w-full border border-gray-200 rounded-[2px] px-4 py-3 font-['DM_Sans'] text-[15px] text-[#0B0F1A] placeholder-gray-400 focus:outline-none focus:border-[#00D4AA] transition-colors">
                            </div>

                            <!-- Project Budget -->
                            <div>
                                <label for="budget" class="font-['DM_Sans'] font-bold text-[11px] leading-[18.15px] tracking-[1.5px] uppercase text-[#0B0F1A] mb-2 block">Project Budget</label>
                                <input type="text" id="budget" name="budget" placeholder="" class="w-full border border-gray-200 rounded-[2px] px-4 py-3 font-['DM_Sans'] text-[15px] text-[#0B0F1A] placeholder-gray-400 focus:outline-none focus:border-[#00D4AA] transition-colors">
                            </div>

                            <!-- Project Details -->
                            <div>
                                <label for="details" class="font-['DM_Sans'] font-bold text-[11px] leading-[18.15px] tracking-[1.5px] uppercase text-[#0B0F1A] mb-2 block">Tell us about your project</label>
                                <textarea id="details" name="details" rows="5" placeholder="Describe your project goals, timeline, and any specific requirements..." class="w-full border border-gray-200 rounded-[2px] px-4 py-3 font-['DM_Sans'] text-[15px] text-[#0B0F1A] placeholder-gray-400 focus:outline-none focus:border-[#00D4AA] transition-colors resize-none"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-4">
                                <button type="submit" class="w-full bg-[#00D4AA] text-[#0B0F1A] font-['DM_Sans'] font-bold text-[13px] leading-[21.45px] tracking-[0.52px] uppercase py-4 rounded-[2px] transition-colors hover:bg-[#0B0F1A] hover:text-[#00D4AA] flex justify-center items-center gap-2">
                                    Send Message &rarr;
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right Container (30% width) -->
                <div class="w-full lg:w-[30%]">
                    <div class="bg-[#0B0F1A] rounded p-8 text-white h-full shadow-2xl">
                        <h3 class="font-['Syne'] font-extrabold text-[36px] leading-[1.1] text-white mb-3">Get in touch</h3>
                        <p class="font-['DM_Sans'] text-[#6B7394] text-[16px] leading-relaxed mb-10">Prefer to reach out directly? Here's how to find us.</p>
                        
                        <div class="space-y-8">
                            <!-- Email -->
                            <div class="flex gap-4 items-start">
                                <div class="w-12 h-12 bg-teal-900/30 rounded flex items-center justify-center flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-300">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                    </svg>
                                </div>
                                <div>
                                    <span class="block font-['DM_Sans'] font-bold text-[11px] tracking-[2px] uppercase text-[#6B7394] mb-1">Email</span>
                                    <a href="mailto:hello@snazzysprocket.com" class="font-['DM_Sans'] text-[16px] text-white hover:text-[#00D4AA] transition-colors">hello@snazzysprocket.com</a>
                                </div>
                            </div>
                            
                            <!-- Phone -->
                            <div class="flex gap-4 items-start">
                                <div class="w-12 h-12 bg-teal-900/30 rounded flex items-center justify-center flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-300">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.896-1.596-5.48-4.18-7.076-7.076l1.293-.97c.362-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                    </svg>
                                </div>
                                <div>
                                    <span class="block font-['DM_Sans'] font-bold text-[11px] tracking-[2px] uppercase text-[#6B7394] mb-1">Phone</span>
                                    <a href="tel:2155550147" class="font-['DM_Sans'] text-[16px] text-white hover:text-[#00D4AA] transition-colors">(215) 555-0147</a>
                                </div>
                            </div>
                            
                            <!-- Office -->
                            <div class="flex gap-4 items-start">
                                <div class="w-12 h-12 bg-teal-900/30 rounded flex items-center justify-center flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-300">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                </div>
                                <div>
                                    <span class="block font-['DM_Sans'] font-bold text-[11px] tracking-[2px] uppercase text-[#6B7394] mb-1">Office</span>
                                    <span class="block font-['DM_Sans'] text-[16px] text-white">1247 Market Street, Suite 400<br>Philadelphia, PA 19107</span>
                                </div>
                            </div>

                            <!-- Hours -->
                            <div class="flex gap-4 items-start">
                                <div class="w-12 h-12 bg-teal-900/30 rounded flex items-center justify-center flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-300">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </div>
                                <div>
                                    <span class="block font-['DM_Sans'] font-bold text-[11px] tracking-[2px] uppercase text-[#6B7394] mb-1">Hours</span>
                                    <span class="block font-['DM_Sans'] text-[16px] text-white">Monday &ndash; Friday<br>9:00 AM &ndash; 6:00 PM EST</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Follow Us -->
                        <div class="mt-10 pt-8 border-t border-gray-800">
                            <span class="block font-['DM_Sans'] font-bold text-[11px] tracking-[2px] uppercase text-[#6B7394] mb-4">Follow Us</span>
                            <div class="flex gap-3">
                                <a href="#" class="w-10 h-10 bg-teal-900/30 rounded flex items-center justify-center text-gray-400 hover:text-[#00D4AA] transition-colors">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
                                </a>
                                <a href="#" class="w-10 h-10 bg-teal-900/30 rounded flex items-center justify-center text-gray-400 hover:text-[#00D4AA] transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                                </a>
                                <a href="#" class="w-10 h-10 bg-teal-900/30 rounded flex items-center justify-center text-gray-400 hover:text-[#00D4AA] transition-colors">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
