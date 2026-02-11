<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' | Venttraffic' : 'Venttraffic - Premium Digital Growth'; ?></title>
    <meta name="description" content="<?php echo isset($pageDesc) ? $pageDesc : 'Venttraffic Media & Labs - Accelerating digital growth through performance marketing and AI innovation.'; ?>">
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark: '#0B0C10',
                            gray: '#1F2833',
                            blue: '#66FCF1',
                            cyan: '#45A29E',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-950 text-white font-sans antialiased selection:bg-blue-500 selection:text-white">
    <header class="fixed w-full z-50 glass transition-all duration-300" id="navbar">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="index.php" class="text-2xl font-bold tracking-wider hover:opacity-80 transition">
                VENT<span class="text-blue-500">TRAFFIC</span>
            </a>
            
            <!-- Desktop Nav -->
            <nav class="hidden md:flex space-x-8">
                <a href="index.php" class="hover:text-blue-400 transition font-medium">Media</a>
                <a href="labs.php" class="hover:text-green-400 transition font-medium">Labs</a>
                <a href="#contact" class="hover:text-white transition font-medium">Contact</a>
            </nav>
            <a href="#contact" class="hidden md:inline-block bg-white text-brand-dark font-bold py-2 px-6 rounded-full hover:bg-gray-200 transition">
                Get Started
            </a>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>
        </div>

        <!-- Mobile Nav Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-gray-900 border-t border-gray-800">
            <div class="px-6 py-4 flex flex-col space-y-4">
                <a href="index.php" class="text-gray-300 hover:text-blue-400 transition">Media</a>
                <a href="labs.php" class="text-gray-300 hover:text-green-400 transition">Labs</a>
                <a href="#contact" class="text-gray-300 hover:text-white transition">Contact</a>
                <a href="#contact" class="bg-white text-gray-900 font-bold py-3 px-6 rounded-full text-center hover:bg-gray-200 transition">Get Started</a>
            </div>
        </div>
    </header>
