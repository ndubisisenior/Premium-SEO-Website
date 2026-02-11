<?php
// labs.php
$pageTitle = "Labs";
$pageDesc = "Venttraffic Labs - Experimenting with AI, Machine Learning, and Future Interfaces.";
include 'includes/header.php';
?>

<main class="bg-black min-h-screen text-gray-300">
    <!-- Labs Hero -->
    <section class="min-h-[80vh] flex items-center justify-center relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
             <div class="absolute top-[-20%] left-[20%] w-[600px] h-[600px] bg-brand-cyan/10 rounded-full blur-[100px]"></div>
             <div class="absolute bottom-[-10%] right-[-10%] w-[600px] h-[600px] bg-green-500/10 rounded-full blur-[100px]"></div>
             <!-- Grid Pattern Overlay -->
             <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0wIDQwaDQwVjBIMHY0MHptMS0xaDM4VjFHMXYzOHoiIGZpbGw9IiMzMzMiIGZpbGwtb3BhY2l0eT0iMC4yIi8+PC9nPjwvc3ZnPg==')] opacity-20"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block py-1 px-3 rounded-full border border-green-500/30 text-green-400 text-sm font-mono mb-6 animate-fade-in-up">
                // SYSTEM.INIT_LABS
            </span>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 tracking-tight animate-fade-in-up delay-100">
                Building <br>
                <span class="text-gradient-labs">The Future</span>
            </h1>
            <p class="text-xl text-gray-400 mb-12 max-w-2xl mx-auto font-light animate-fade-in-up delay-200">
                Where we experiment with AI, Machine Learning, and Next-Gen Interface Design.
            </p>
            
            <div class="animate-fade-in-up delay-300">
                 <a href="#experiments" class="text-sm font-mono text-green-400 hover:text-white transition">
                    SCROLL_DOWN &darr;
                 </a>
            </div>
        </div>
    </section>

    <!-- Experiments Grid -->
    <section id="experiments" class="py-24 border-t border-gray-900 bg-gray-950/50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16">
                 <div>
                    <h2 class="text-3xl font-bold text-white mb-2">Active Experiments</h2>
                    <p class="text-gray-500 font-mono text-sm">/root/labs/projects</p>
                 </div>
                 <div class="mt-4 md:mt-0">
                    <span class="text-green-500 text-sm font-mono flex items-center gap-2">
                        <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                        ALL SYSTEMS OPERATIONAL
                    </span>
                 </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Experiment 1 -->
                <div class="group relative bg-gray-900 border border-gray-800 hover:border-green-500/50 rounded-xl overflow-hidden transition-all duration-300 hover:shadow-[0_0_30px_rgba(74,222,128,0.1)]">
                    <div class="h-48 bg-gray-800 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-tr from-green-900/40 to-transparent"></div>
                        <span class="text-5xl">🧠</span>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-white group-hover:text-green-400 transition">Project Alpha</h3>
                            <span class="text-xs font-mono bg-green-900/30 text-green-400 px-2 py-1 rounded">v0.9.2</span>
                        </div>
                        <p class="text-sm text-gray-400 mb-6 font-light">AI-powered analytics dashboard that predicts conversion trends before they happen.</p>
                        <a href="#" class="text-sm font-bold text-white flex items-center gap-2 group-hover:gap-3 transition-all">
                            View Case Study <span class="text-green-500">&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Experiment 2 -->
                <div class="group relative bg-gray-900 border border-gray-800 hover:border-cyan-500/50 rounded-xl overflow-hidden transition-all duration-300 hover:shadow-[0_0_30px_rgba(6,182,212,0.1)]">
                    <div class="h-48 bg-gray-800 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-tr from-cyan-900/40 to-transparent"></div>
                        <span class="text-5xl">🕸️</span>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-white group-hover:text-cyan-400 transition">Neural Net v2</h3>
                            <span class="text-xs font-mono bg-cyan-900/30 text-cyan-400 px-2 py-1 rounded">BETA</span>
                        </div>
                        <p class="text-sm text-gray-400 mb-6 font-light">Experimental generative design tool for rapid UI prototyping using simple text prompts.</p>
                        <a href="#" class="text-sm font-bold text-white flex items-center gap-2 group-hover:gap-3 transition-all">
                            Request Access <span class="text-cyan-500">&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Experiment 3 -->
                <div class="group relative bg-gray-900 border border-gray-800 hover:border-purple-500/50 rounded-xl overflow-hidden transition-all duration-300 hover:shadow-[0_0_30px_rgba(168,85,247,0.1)]">
                    <div class="h-48 bg-gray-800 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-tr from-purple-900/40 to-transparent"></div>
                        <span class="text-5xl">🔮</span>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-xl font-bold text-white group-hover:text-purple-400 transition">Quantum UI</h3>
                            <span class="text-xs font-mono bg-purple-900/30 text-purple-400 px-2 py-1 rounded">CONCEPT</span>
                        </div>
                        <p class="text-sm text-gray-400 mb-6 font-light">Next-generation interface components that react to user focus and intent.</p>
                        <a href="#" class="text-sm font-bold text-white flex items-center gap-2 group-hover:gap-3 transition-all">
                            Learn More <span class="text-purple-500">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back Link -->
       <div class="py-12 text-center border-t border-gray-900">
        <a href="index.php" class="text-gray-500 hover:text-white transition duration-300 flex items-center justify-center gap-2">
            &larr; Return to Main Site
        </a>
    </div>
</main>


<?php include 'includes/footer.php'; ?>