<?php include 'header.php'; ?>

<!-- 1. Hero Section: High Impact -->
<section id="home" class="relative min-h-screen flex items-center justify-center text-center bg-fixed bg-center bg-cover" style="background-image: linear-gradient(rgba(0, 80, 32, 0.9), rgba(0, 37, 26, 0.8)), url('asset/img/hero-background.jpg');">
  <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
  <div class="relative z-10 px-4 max-w-6xl mx-auto pt-20">
    <div class="inline-block px-4 py-1 mb-6 border border-brand-orange rounded-full bg-black bg-opacity-30 backdrop-filter backdrop-blur-sm animate__animated animate__fadeInDown">
        <span class="text-brand-orange font-bold text-sm tracking-widest uppercase">Kenya's #1 FMCG Distributor</span>
    </div>
    <h1 class="text-5xl md:text-7xl lg:text-8xl font-heading font-extrabold text-white mb-6 animate__animated animate__fadeInDown leading-tight shadow-sm">
      POWERING <br> <span class="text-brand-orange">RETAIL SUCCESS</span>
    </h1>
    <p class="text-lg md:text-2xl text-gray-200 mb-10 font-light animate__animated animate__fadeInDown tracking-wide max-w-3xl mx-auto leading-relaxed">
      We bridge the gap between top manufacturers and your shelf. Reliable, efficient, and cost-effective distribution for wholesalers and retailers nationwide.
    </p>
    <div class="animate__animated animate__fadeInUp flex flex-col sm:flex-row justify-center gap-4">
        <a href="products.php" class="px-10 py-5 bg-brand-orange text-white font-bold rounded-full hover:bg-orange-600 transition-all shadow-xl transform hover:-translate-y-1 text-lg">Browse Inventory</a>
        <a href="#process" class="px-10 py-5 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-brand-green transition-all shadow-xl transform hover:-translate-y-1 text-lg">How We Work</a>
    </div>
  </div>
  
  <!-- Scroll Indicator -->
  <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
      <i class="fas fa-chevron-down text-white text-3xl opacity-50"></i>
  </div>
</section>

<!-- 2. Animated Stats Strip -->
<section class="relative z-20 bg-white shadow-lg -mt-20 mx-4 md:mx-auto max-w-7xl rounded-xl overflow-hidden animate__animated animate__fadeInUp">
    <div class="grid grid-cols-2 md:grid-cols-4 divide-x divide-gray-100">
        <div class="p-8 text-center group hover:bg-green-50 transition-colors">
            <i class="fas fa-truck-moving text-4xl text-brand-green mb-3 transform group-hover:scale-110 transition-transform"></i>
            <div class="text-3xl font-bold text-gray-900">10k+</div>
            <div class="text-xs uppercase tracking-widest text-gray-500 font-semibold">Deliveries/Year</div>
        </div>
        <div class="p-8 text-center group hover:bg-green-50 transition-colors">
            <i class="fas fa-box-open text-4xl text-brand-green mb-3 transform group-hover:scale-110 transition-transform"></i>
            <div class="text-3xl font-bold text-gray-900">500+</div>
            <div class="text-xs uppercase tracking-widest text-gray-500 font-semibold">Products Stocked</div>
        </div>
        <div class="p-8 text-center group hover:bg-green-50 transition-colors">
            <i class="fas fa-users text-4xl text-brand-green mb-3 transform group-hover:scale-110 transition-transform"></i>
            <div class="text-3xl font-bold text-gray-900">1,200+</div>
            <div class="text-xs uppercase tracking-widest text-gray-500 font-semibold">Happy Partners</div>
        </div>
        <div class="p-8 text-center group hover:bg-green-50 transition-colors">
            <i class="fas fa-clock text-4xl text-brand-green mb-3 transform group-hover:scale-110 transition-transform"></i>
            <div class="text-3xl font-bold text-gray-900">98%</div>
            <div class="text-xs uppercase tracking-widest text-gray-500 font-semibold">On-Time Delivery</div>
        </div>
    </div>
</section>

<!-- 3. Trusted Partners Ticker (Visual Proof) -->
<section class="py-12 bg-gray-50 overflow-hidden">
    <div class="text-center mb-6">
        <p class="text-gray-500 font-semibold uppercase tracking-widest text-xs">Distributing Top Brands Including</p>
    </div>
    <!-- Simple CSS Logo Slider Placeholder -->
    <div class="flex justify-center flex-wrap gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
        <div class="text-2xl font-bold text-gray-400 flex items-center gap-2"><i class="fas fa-tint"></i> UNILEVER</div>
        <div class="text-2xl font-bold text-gray-400 flex items-center gap-2"><i class="fas fa-soap"></i> P&G</div>
        <div class="text-2xl font-bold text-gray-400 flex items-center gap-2"><i class="fas fa-cookie-bite"></i> NESTLE</div>
        <div class="text-2xl font-bold text-gray-400 flex items-center gap-2"><i class="fas fa-wine-bottle"></i> COCA-COLA</div>
        <div class="text-2xl font-bold text-gray-400 flex items-center gap-2"><i class="fas fa-bread-slice"></i> UNGA LTD</div>
    </div>
</section>

<!-- 4. Detailed Service Pillars (Value Proposition) -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h5 class="text-brand-orange font-bold uppercase tracking-widest text-sm mb-2">Why Partner With Us</h5>
            <h2 class="text-4xl md:text-5xl font-heading font-bold text-brand-dark">More Than Just A Supplier</h2>
            <div class="w-32 h-1.5 bg-brand-green mx-auto mt-6 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Card 1 -->
            <div class="bg-white border border-gray-100 p-8 rounded-3xl shadow-lg hover:shadow-2xl hover:border-brand-orange transition-all duration-300 group">
                <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-orange transition-colors duration-300">
                    <i class="fas fa-shipping-fast text-3xl text-brand-green group-hover:text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Last-Mile Logistics</h3>
                <p class="text-gray-600 leading-relaxed mb-6">We don't just ship; we deliver to your doorstep. Our fleet navigates urban centers and rural outposts alike to ensure your shelves are never empty.</p>
                <ul class="space-y-2 text-sm text-gray-500">
                    <li class="flex items-center"><i class="fas fa-check text-brand-green mr-2"></i> Same-day Nairobi delivery</li>
                    <li class="flex items-center"><i class="fas fa-check text-brand-green mr-2"></i> Real-time tracking</li>
                </ul>
            </div>

            <!-- Card 2 -->
            <div class="bg-white border border-gray-100 p-8 rounded-3xl shadow-lg hover:shadow-2xl hover:border-brand-orange transition-all duration-300 group relative">
                <div class="absolute top-0 right-0 bg-brand-orange text-white text-xs font-bold px-3 py-1 rounded-bl-xl rounded-tr-3xl">POPULAR</div>
                <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-orange transition-colors duration-300">
                    <i class="fas fa-wallet text-3xl text-brand-green group-hover:text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Flexible Credit Terms</h3>
                <p class="text-gray-600 leading-relaxed mb-6">Cash flow matters. Qualify for our 30-day tiered credit facility designed to help small and medium retailers grow their inventory without pressure.</p>
                 <ul class="space-y-2 text-sm text-gray-500">
                    <li class="flex items-center"><i class="fas fa-check text-brand-green mr-2"></i> Zero interest for 14 days</li>
                    <li class="flex items-center"><i class="fas fa-check text-brand-green mr-2"></i> Easy application process</li>
                </ul>
            </div>

            <!-- Card 3 -->
            <div class="bg-white border border-gray-100 p-8 rounded-3xl shadow-lg hover:shadow-2xl hover:border-brand-orange transition-all duration-300 group">
                <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-orange transition-colors duration-300">
                    <i class="fas fa-chart-line text-3xl text-brand-green group-hover:text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Market Intelligence</h3>
                <p class="text-gray-600 leading-relaxed mb-6">Don't guess what sells. We share monthly reports on trending products and seasonal spikes so you stock the right items at the right time.</p>
                 <ul class="space-y-2 text-sm text-gray-500">
                    <li class="flex items-center"><i class="fas fa-check text-brand-green mr-2"></i> Monthly trend reports</li>
                    <li class="flex items-center"><i class="fas fa-check text-brand-green mr-2"></i> Free merchandising advice</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 5. Featured Categories (Visual Grid) -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12">
            <div>
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mb-2">Our Catalogue</h2>
                <p class="text-gray-500">Sourced directly from manufacturers for guaranteed authenticity.</p>
            </div>
            <a href="products.php" class="text-brand-orange font-bold hover:text-brand-green transition-colors mt-4 md:mt-0 flex items-center group">
                View All Categories <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Main Feature -->
            <div class="md:col-span-2 md:row-span-2 relative group rounded-2xl overflow-hidden shadow-xl h-96">
                <img src="asset/img/product1.jpg" alt="Oils" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80"></div>
                <div class="absolute bottom-6 left-6 text-white">
                    <span class="bg-brand-orange text-xs font-bold px-2 py-1 rounded mb-2 inline-block">BEST SELLERS</span>
                    <h3 class="text-3xl font-bold mb-1">Cookings Oils & Fats</h3>
                    <p class="text-gray-300 text-sm mb-4">Fresh Fri, Golden Fry, Cowboy & More</p>
                    <a href="products.php" class="text-white border-b border-white pb-1 hover:text-brand-orange hover:border-brand-orange transition-colors text-sm">Shop Now</a>
                </div>
            </div>

            <!-- Sub Feature 1 -->
            <div class="relative group rounded-2xl overflow-hidden shadow-xl h-48">
                <img src="asset/img/product2.jpg" alt="Rice" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-black bg-opacity-40 hover:bg-opacity-30 transition-all"></div>
                <div class="absolute bottom-4 left-4 text-white">
                     <h3 class="text-xl font-bold">Rice & Grains</h3>
                </div>
            </div>

            <!-- Sub Feature 2 -->
             <div class="relative group rounded-2xl overflow-hidden shadow-xl h-48">
                <img src="asset/img/product3.webp" alt="Detergents" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-black bg-opacity-40 hover:bg-opacity-30 transition-all"></div>
                <div class="absolute bottom-4 left-4 text-white">
                     <h3 class="text-xl font-bold">Cleaning</h3>
                </div>
            </div>

             <!-- Sub Feature 3 -->
             <div class="relative group rounded-2xl overflow-hidden shadow-xl h-48">
                <img src="asset/img/product4.jpg" alt="Dairy" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-black bg-opacity-40 hover:bg-opacity-30 transition-all"></div>
                <div class="absolute bottom-4 left-4 text-white">
                     <h3 class="text-xl font-bold">Dairy Products</h3>
                </div>
            </div>

             <!-- Sub Feature 4 -->
             <div class="relative group rounded-2xl overflow-hidden shadow-xl h-48 bg-brand-dark flex items-center justify-center">
                <div class="text-center p-6">
                    <h3 class="text-xl font-bold text-white mb-2">300+ More</h3>
                    <p class="text-gray-400 text-xs mb-4">Items waiting for you</p>
                    <a href="products.php" class="inline-block w-8 h-8 bg-brand-orange rounded-full text-white leading-8 hover:bg-white hover:text-brand-orange transition-colors"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. Process Section (How It Works) -->
<section id="process" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
         <div class="mb-16">
            <h5 class="text-brand-green font-bold uppercase tracking-widest text-sm mb-2">Seamless Experience</h5>
            <h2 class="text-4xl font-heading font-bold text-brand-dark">How To Order</h2>
        </div>
        
        <div class="relative">
            <!-- Connecting Line -->
            <div class="hidden md:block absolute top-1/2 left-0 w-full h-1 bg-gray-100 -z-10 transform -translate-y-1/2"></div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="bg-white p-6 relative">
                    <div class="w-16 h-16 bg-brand-orange text-white rounded-full text-2xl font-bold flex items-center justify-center mx-auto mb-6 shadow-lg border-4 border-white">1</div>
                    <h4 class="text-xl font-bold mb-3">Browse Catalog</h4>
                    <p class="text-gray-500 text-sm">Explore our Products page or download our PDF list.</p>
                </div>
                 <!-- Step 2 -->
                <div class="bg-white p-6 relative">
                    <div class="w-16 h-16 bg-brand-green text-white rounded-full text-2xl font-bold flex items-center justify-center mx-auto mb-6 shadow-lg border-4 border-white">2</div>
                    <h4 class="text-xl font-bold mb-3">Place Order</h4>
                    <p class="text-gray-500 text-sm">Call, WhatsApp, or email your list to our sales team.</p>
                </div>
                 <!-- Step 3 -->
                <div class="bg-white p-6 relative">
                    <div class="w-16 h-16 bg-gray-800 text-white rounded-full text-2xl font-bold flex items-center justify-center mx-auto mb-6 shadow-lg border-4 border-white">3</div>
                    <h4 class="text-xl font-bold mb-3">Processing</h4>
                    <p class="text-gray-500 text-sm">We pack and verify your goods instantly.</p>
                </div>
                 <!-- Step 4 -->
                <div class="bg-white p-6 relative">
                    <div class="w-16 h-16 bg-brand-orange text-white rounded-full text-2xl font-bold flex items-center justify-center mx-auto mb-6 shadow-lg border-4 border-white"><i class="fas fa-check"></i></div>
                    <h4 class="text-xl font-bold mb-3">Delivery</h4>
                    <p class="text-gray-500 text-sm">Receive goods at your shop and pay via M-Pesa.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. Core Pillars (The Bei Bora Standard) -->
<section class="py-20 bg-gray-50">
     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
             <h5 class="text-brand-green font-bold uppercase tracking-widest text-sm mb-2">Our Philosophy</h5>
             <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900">The Bei Bora Standard</h2>
             <div class="w-24 h-1 bg-brand-orange mx-auto mt-4 rounded-full"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Pillar 1: Quality -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-8 text-center group">
                <div class="w-24 h-24 bg-green-50 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-brand-green transition-colors duration-300">
                    <i class="fas fa-medal text-4xl text-brand-green group-hover:text-white transition-colors duration-300"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Uncompromising Quality</h3>
                <p class="text-gray-500 text-sm mb-6 leading-relaxed">Quality isn't just a promise; it's our guiding principle. We enforce rigorous testing on every product to ensure your customers keep coming back.</p>
                <div class="w-full h-1 bg-gray-100 rounded-full overflow-hidden">
                    <div class="w-0 h-full bg-brand-orange group-hover:w-full transition-all duration-700"></div>
                </div>
            </div>

             <!-- Pillar 2: Innovation -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-8 text-center group">
                <div class="w-24 h-24 bg-orange-50 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-brand-orange transition-colors duration-300">
                    <i class="fas fa-lightbulb text-4xl text-brand-orange group-hover:text-white transition-colors duration-300"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Market Innovation</h3>
                <p class="text-gray-500 text-sm mb-6 leading-relaxed">We stay ahead of the curve. By analyzing consumer trends, we bring you the latest, high-demand products before the competition does.</p>
                <div class="w-full h-1 bg-gray-100 rounded-full overflow-hidden">
                    <div class="w-0 h-full bg-brand-green group-hover:w-full transition-all duration-700"></div>
                </div>
            </div>

             <!-- Pillar 3: Partnership -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-8 text-center group">
                <div class="w-24 h-24 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-brand-dark transition-colors duration-300">
                    <i class="fas fa-handshake text-4xl text-brand-dark group-hover:text-white transition-colors duration-300"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900">Lasting Partnership</h3>
                <p class="text-gray-500 text-sm mb-6 leading-relaxed">Your growth is our growth. We believe in building strong, transparent, and supportive relationships with every retailer we serve.</p>
                <div class="w-full h-1 bg-gray-100 rounded-full overflow-hidden">
                    <div class="w-0 h-full bg-brand-orange group-hover:w-full transition-all duration-700"></div>
                </div>
            </div>
        </div>
     </div>
</section>

<!-- 8. FAQ Accordion -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-3xl font-heading font-bold text-center mb-10">Common Questions</h2>
        <div class="space-y-4">
            <details class="group bg-gray-50 rounded-xl p-6 [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h2 class="font-bold text-gray-900">Do you offer bulk discounts?</h2>
                    <span class="ml-1.5 flex-shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3 shadow-sm group-open:bg-brand-orange group-open:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </summary>
                <p class="mt-4 leading-relaxed text-gray-700">Yes, we offer tiered pricing for bulk purchases. The more you buy, the more you save. Contact our sales team for a custom quote.</p>
            </details>
            <details class="group bg-gray-50 rounded-xl p-6 [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h2 class="font-bold text-gray-900">What payment methods do you accept?</h2>
                    <span class="ml-1.5 flex-shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3 shadow-sm group-open:bg-brand-orange group-open:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </summary>
                <p class="mt-4 leading-relaxed text-gray-700">We accept M-Pesa, Bank Transfer, and Cheques for verified accounts. All payments are secure and instant.</p>
            </details>
             <details class="group bg-gray-50 rounded-xl p-6 [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex items-center justify-between cursor-pointer">
                    <h2 class="font-bold text-gray-900">Can I schedule a delivery?</h2>
                    <span class="ml-1.5 flex-shrink-0 rounded-full bg-white p-1.5 text-gray-900 sm:p-3 shadow-sm group-open:bg-brand-orange group-open:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </summary>
                <p class="mt-4 leading-relaxed text-gray-700">Absolutely! You can choose a delivery window that suits your business hours when placing your order.</p>
            </details>
        </div>
    </div>
</section>

<!-- 9. Final CTA (Lead Logic) -->
<section class="py-24 bg-brand-green relative overflow-hidden">
    <!-- Abstract Decoration -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-white rounded-full opacity-10 blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-60 h-60 bg-brand-orange rounded-full opacity-20 blur-3xl"></div>
    
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
        <h2 class="text-4xl md:text-5xl font-heading font-extrabold text-white mb-6">Partner with Kenya's Leading Distributor</h2>
        <p class="text-green-100 text-xl mb-10 max-w-2xl mx-auto">Join the network of successful retailers who trust Bei Bora for their inventory needs. Browse our full catalog online or talk to an agent today.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="products.php" class="px-8 py-4 bg-white text-brand-green font-bold rounded-full shadow-xl hover:bg-gray-100 transition-colors flex items-center justify-center">
                <i class="fas fa-box-open mr-3 text-brand-green"></i> Browse Products
            </a>
            <a href="contact.php" class="px-8 py-4 bg-brand-orange text-white font-bold rounded-full shadow-xl hover:bg-orange-600 transition-colors flex items-center justify-center">
                <i class="fas fa-phone-alt mr-3"></i> Contact Sales
            </a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
