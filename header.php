<!DOCTYPE html>
<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEI BORA - Distributor</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-green': '#009040',
                        'brand-orange': '#F58020',
                        'brand-dark': '#005020',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #F58020;
            transition: width 0.3s;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        /* Mobile menu transition */
        #mobile-menu {
            transition: max-height 0.3s ease-in-out;
            max-height: 0;
            overflow: hidden;
        }
        #mobile-menu.open {
            max-height: 400px;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans text-gray-800 antialiased flex flex-col min-h-screen">

<!-- Navbar -->
<nav class="fixed w-full z-50 transition-all duration-300 glass-effect border-b border-gray-100" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="index.php" class="flex items-center gap-2">
                     <!-- Assuming the logo image has a white background, we might need to adjust or use text if image looks bad on non-white -->
                    <img class="h-12 w-auto" src="asset/img/bb.png" alt="BEI BORA">
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="index.php" class="font-heading font-semibold <?php echo ($currentPage == 'index.php') ? 'text-brand-orange' : 'text-brand-dark'; ?> hover:text-brand-orange nav-link transition-colors">Home</a>
                <a href="products.php" class="font-heading font-semibold <?php echo ($currentPage == 'products.php') ? 'text-brand-orange' : 'text-brand-dark'; ?> hover:text-brand-orange nav-link transition-colors">Products</a>
                <a href="about.php" class="font-heading font-semibold <?php echo ($currentPage == 'about.php') ? 'text-brand-orange' : 'text-brand-dark'; ?> hover:text-brand-orange nav-link transition-colors">About</a>
                <a href="testimonials.php" class="font-heading font-semibold <?php echo ($currentPage == 'testimonials.php') ? 'text-brand-orange' : 'text-brand-dark'; ?> hover:text-brand-orange nav-link transition-colors">Testimonials</a>
                <a href="contact.php" class="font-heading font-semibold <?php echo ($currentPage == 'contact.php') ? 'text-brand-orange' : 'text-brand-dark'; ?> hover:text-brand-orange nav-link transition-colors">Contact</a>
                <a href="contact.php" class="ml-4 px-6 py-2 rounded-full bg-brand-orange text-white font-bold hover:bg-orange-600 transition shadow-md hover:shadow-lg transform hover:-translate-y-0.5">Order Now</a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-brand-dark hover:text-brand-orange focus:outline-none">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden bg-white shadow-lg">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 text-center">
            <a href="index.php" class="block px-3 py-2 rounded-md text-base font-medium <?php echo ($currentPage == 'index.php') ? 'text-brand-orange' : 'text-brand-dark'; ?> hover:text-brand-orange hover:bg-gray-50">Home</a>
            <a href="products.php" class="block px-3 py-2 rounded-md text-base font-medium <?php echo ($currentPage == 'products.php') ? 'text-brand-orange' : 'text-brand-dark'; ?> hover:text-brand-orange hover:bg-gray-50">Products</a>
            <a href="about.php" class="block px-3 py-2 rounded-md text-base font-medium <?php echo ($currentPage == 'about.php') ? 'text-brand-orange' : 'text-brand-dark'; ?> hover:text-brand-orange hover:bg-gray-50">About</a>
            <a href="testimonials.php" class="block px-3 py-2 rounded-md text-base font-medium <?php echo ($currentPage == 'testimonials.php') ? 'text-brand-orange' : 'text-brand-dark'; ?> hover:text-brand-orange hover:bg-gray-50">Testimonials</a>
            <a href="contact.php" class="block px-3 py-2 rounded-md text-base font-medium <?php echo ($currentPage == 'contact.php') ? 'text-brand-orange' : 'text-brand-dark'; ?> hover:text-brand-orange hover:bg-gray-50">Contact</a>
        </div>
    </div>
</nav>

<!-- Spacer -->
<div class="h-20"></div>

<script>
    // Mobile menu toggle
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('open');
    });
</script>
