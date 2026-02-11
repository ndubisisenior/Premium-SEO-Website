<?php
// index.php
$pageTitle = "Media";
$pageDesc = "Data-driven performance marketing agency. We scale businesses with paid media, SEO, and conversion optimization.";
include 'includes/header.php';
?>

<main class="bg-brand-dark min-h-screen">
    <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
            <div class="absolute top-[-10%] right-[-5%] w-[500px] h-[500px] bg-brand-cyan/20 rounded-full blur-[128px]"></div>
            <div class="absolute bottom-[-10%] left-[-5%] w-[500px] h-[500px] bg-purple-600/20 rounded-full blur-[128px]"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-brand-gray border border-gray-700 text-brand-blue text-sm font-semibold mb-6 animate-fade-in-up">
                🚀 Elevate Your Digital Presence
            </span>
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 leading-tight animate-fade-in-up delay-100">
                Data-Driven <br>
                <span class="text-gradient-media">Performance Marketing</span>
            </h1>
            <p class="text-xl text-gray-400 mb-10 max-w-2xl mx-auto animate-fade-in-up delay-200">
                We blend creativity with analytics to drive measurable growth. Stop guessing, start scaling with Venttraffic Media.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-4 animate-fade-in-up delay-300">
                <a href="#contact" class="bg-brand-blue text-brand-dark font-bold py-4 px-8 rounded-full hover:shadow-[0_0_20px_rgba(102,252,241,0.5)] transition duration-300">
                    Start Your Growth
                </a>
                <a href="labs.php" class="border border-gray-700 hover:border-brand-cyan text-white font-bold py-4 px-8 rounded-full hover:bg-white/5 transition duration-300">
                    Explore Innovation &rarr;
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-brand-dark relative">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Expertise</h2>
                <div class="h-1 w-24 bg-gradient-to-r from-brand-blue to-purple-600 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="glass p-8 rounded-2xl hover:bg-gray-800/50 transition duration-300 group">
                    <div class="w-14 h-14 bg-blue-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition duration-300">
                        <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-brand-blue transition">Performance SEO</h3>
                    <p class="text-gray-400 leading-relaxed">Dominate search rankings with data-backed strategies that target high-intent traffic.</p>
                </div>

                <!-- Service 2 -->
                <div class="glass p-8 rounded-2xl hover:bg-gray-800/50 transition duration-300 group">
                    <div class="w-14 h-14 bg-purple-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition duration-300">
                        <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-purple-400 transition">Paid Media Buying</h3>
                    <p class="text-gray-400 leading-relaxed">Maximize ROI with precision-targeted campaigns across Google, Meta, and LinkedIn.</p>
                </div>

                <!-- Service 3 -->
                <div class="glass p-8 rounded-2xl hover:bg-gray-800/50 transition duration-300 group">
                    <div class="w-14 h-14 bg-pink-500/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition duration-300">
                        <svg class="w-8 h-8 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-pink-400 transition">Conversion Optimization</h3>
                    <p class="text-gray-400 leading-relaxed">Turn more visitors into customers with UX audits, A/B testing, and funnel optimization.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us / Stats -->
    <section class="py-20 border-y border-gray-800 bg-brand-gray/30">
        <div class="container mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-bold text-white mb-2">$50M+</div>
                <div class="text-gray-400 text-sm uppercase tracking-wider">Ad Spend Managed</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-white mb-2">300%</div>
                <div class="text-gray-400 text-sm uppercase tracking-wider">Avg. ROI Increase</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-white mb-2">50+</div>
                <div class="text-gray-400 text-sm uppercase tracking-wider">Active Clients</div>
            </div>
             <div>
                <div class="text-4xl font-bold text-white mb-2">24/7</div>
                <div class="text-gray-400 text-sm uppercase tracking-wider">Support & Monitoring</div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section id="contact" class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-brand-blue/5"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-4xl font-bold mb-8">Ready to Scale Your Business?</h2>
            <p class="text-xl text-gray-400 mb-10 max-w-2xl mx-auto">
                Let's discuss how Venttraffic Media can accelerate your growth.
            </p>
            <a href="mailto:hello@venttraffic.com" class="inline-block bg-white text-brand-dark font-bold py-4 px-10 rounded-full hover:bg-gray-200 transition duration-300 transform hover:scale-105">
                Get a Free Proposal
            </a>
        </div>
    </section>
</main>


<?php include 'includes/footer.php'; ?>
