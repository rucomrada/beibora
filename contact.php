<?php include 'header.php'; ?>

<!-- Page Header -->
<header class="pt-40 pb-32 bg-gradient-to-br from-brand-dark via-brand-green to-brand-dark text-center text-white relative overflow-hidden">
    <!-- Abstract Background Shapes -->
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 animate__animated animate__fadeInDown">
        <div class="inline-flex items-center px-3 py-1 rounded-full border border-orange-400 bg-orange-900 bg-opacity-30 text-orange-300 text-xs font-bold tracking-widest uppercase mb-6 backdrop-blur-sm">
            Contact Us
        </div>
        <h1 class="text-5xl md:text-6xl font-heading font-extrabold mb-6 tracking-tight">
            Get In <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-yellow-400">Touch</span>
        </h1>
        <p class="text-xl md:text-2xl text-green-100 font-light max-w-2xl mx-auto leading-relaxed">
            We'd love to hear from you. Here's how you can reach us.
        </p>
    </div>
</header>

<!-- Contact Info Grid -->
<div class="bg-gray-50 py-20 relative z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-32">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Address -->
            <div class="bg-white rounded-2xl p-10 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 text-center">
                 <div class="w-20 h-20 bg-green-50 rounded-full flex items-center justify-center mx-auto mb-8 border border-green-100">
                    <i class="fas fa-map-marker-alt text-3xl text-brand-green"></i>
                </div>
                <h4 class="text-xl font-heading font-bold text-gray-900 mb-4">Visit Us</h4>
                <p class="text-gray-600 leading-relaxed mb-6">Come say hello at our main office.</p>
                
                <a href="https://maps.app.goo.gl/nnC5X4FHiRdWXm2j9" target="_blank" class="text-brand-green font-bold hover:text-brand-orange transition-colors inline-flex items-center group">
                    View on Map <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
                <p class="mt-4 text-sm text-gray-500">Adjacent to Jacaranda Roundabout, Spine Road, Kayole, NRB</p>
            </div>

            <!-- Email -->
            <div class="bg-white rounded-2xl p-10 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 text-center border-t-4 border-brand-green">
                <div class="w-20 h-20 bg-green-50 rounded-full flex items-center justify-center mx-auto mb-8 border border-green-100">
                    <i class="fas fa-envelope text-3xl text-brand-green"></i>
                </div>
                <h4 class="text-xl font-heading font-bold text-gray-900 mb-4">Email Us</h4>
                <p class="text-gray-600 leading-relaxed mb-6">Drop us a line anytime.</p>
                <a href="mailto:info@beibora.co.ke" class="text-lg font-bold text-gray-900 hover:text-brand-orange transition-colors">
                    info@beibora.co.ke
                </a>
                <p class="mt-2 text-sm text-gray-500">We usually reply within 24 hours.</p>
            </div>

            <!-- Phone -->
             <div class="bg-white rounded-2xl p-10 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 text-center">
                <div class="w-20 h-20 bg-green-50 rounded-full flex items-center justify-center mx-auto mb-8 border border-green-100">
                    <i class="fas fa-phone-alt text-3xl text-brand-green"></i>
                </div>
                <h4 class="text-xl font-heading font-bold text-gray-900 mb-4">Call Us</h4>
                <p class="text-gray-600 leading-relaxed mb-6">Mon-Fri from 8am to 5pm.</p>
                <div class="space-y-2">
                    <a href="tel:+254714285993" class="block text-lg font-bold text-gray-900 hover:text-brand-orange transition-colors">+254 714 285 993</a>
                    <a href="tel:+254718005867" class="block text-lg font-bold text-gray-900 hover:text-brand-orange transition-colors">+254 718 005 867</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Form & Map Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-16">
            
            <!-- Contact Form -->
            <div class="lg:w-1/2">
                <div class="mb-10">
                    <h2 class="text-3xl font-heading font-bold text-brand-dark mb-4">Send us a Message</h2>
                    <div class="w-20 h-1 bg-brand-orange rounded-full mb-6"></div>
                    <p class="text-gray-600 leading-relaxed">Have a question about our products or services? Fill out the form below and our team will get back to you shortly.</p>
                </div>

                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">First Name</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-brand-green focus:ring-2 focus:ring-brand-green/20 outline-none transition-all bg-gray-50" placeholder="John">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Last Name</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-brand-green focus:ring-2 focus:ring-brand-green/20 outline-none transition-all bg-gray-50" placeholder="Kamau">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Email Address</label>
                        <input type="email" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-brand-green focus:ring-2 focus:ring-brand-green/20 outline-none transition-all bg-gray-50" placeholder="john@example.com">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Subject</label>
                        <select class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-brand-green focus:ring-2 focus:ring-brand-green/20 outline-none transition-all bg-gray-50">
                            <option>General Inquiry</option>
                            <option>Order Status</option>
                            <option>Wholesale/Bulk Order</option>
                            <option>Partnership</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Message</label>
                        <textarea rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-brand-green focus:ring-2 focus:ring-brand-green/20 outline-none transition-all bg-gray-50" placeholder="How can we help you?"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-brand-green text-white font-bold py-4 rounded-lg hover:bg-brand-dark transition-colors shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Map -->
            <div class="lg:w-1/2 h-full min-h-[500px] rounded-3xl overflow-hidden shadow-2xl relative group">
                <iframe src="https://maps.google.com/maps?q=-1.28768679149025,36.905728863974275&z=15&output=embed" width="100%" height="100%" style="border:0; position: absolute; inset: 0;" allowfullscreen="" loading="lazy"></iframe>
                
                <!-- Floating Info Card on Map -->
                <div class="absolute bottom-6 left-6 right-6 bg-white/90 backdrop-blur-md p-6 rounded-xl shadow-lg border border-white/50 animate__animated animate__fadeInUp">
                    <h5 class="font-bold text-brand-dark mb-1">Bei Bora Distributors</h5>
                    <p class="text-sm text-gray-600">Serving Nairobi and surrounding environments.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FAQs Section -->
<section class="py-20 bg-gray-50 border-t border-gray-100">
    <div class="max-w-3xl mx-auto px-4">
        <div class="text-center mb-12">
            <span class="text-brand-orange font-bold uppercase tracking-widest text-xs">Help Center</span>
            <h2 class="text-3xl md:text-4xl font-heading font-bold text-gray-900 mt-2 mb-6">Frequently Asked Questions</h2>
            <p class="text-gray-600">Can't find what you're looking for? Contact us directly.</p>
        </div>
        
        <div class="space-y-4">
          <!-- FAQ Item 1 -->
          <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden" x-data="{ open: true }">
            <button class="w-full px-6 py-5 text-left bg-white hover:bg-gray-50 flex justify-between items-center focus:outline-none transition-colors" onclick="this.parentElement.querySelector('.faq-content').classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180')">
              <span class="font-bold text-gray-800 text-lg">What payment methods do you accept?</span>
              <i class="fas fa-chevron-down text-brand-green transition-transform duration-300"></i>
            </button>
            <div class="faq-content px-6 pb-6 pt-2 text-gray-600 border-t border-gray-50">
              We accept MPESA payments for security and efficiency. This ensures quick processing of your orders.
            </div>
          </div>
          
          <!-- FAQ Item 2 -->
          <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <button class="w-full px-6 py-5 text-left bg-white hover:bg-gray-50 flex justify-between items-center focus:outline-none transition-colors" onclick="this.parentElement.querySelector('.faq-content').classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180')">
              <span class="font-bold text-gray-800 text-lg">Do you offer bulk discounts?</span>
              <i class="fas fa-chevron-down text-brand-green transition-transform duration-300"></i>
            </button>
            <div class="faq-content hidden px-6 pb-6 pt-2 text-gray-600 border-t border-gray-50">
              Yes, we offer competitive pricing for bulk orders. Please contact our sales team using the form above or call us to discuss your specific requirements.
            </div>
          </div>
          
          <!-- FAQ Item 3 -->
          <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
             <button class="w-full px-6 py-5 text-left bg-white hover:bg-gray-50 flex justify-between items-center focus:outline-none transition-colors" onclick="this.parentElement.querySelector('.faq-content').classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180')">
              <span class="font-bold text-gray-800 text-lg">Do you offer delivery?</span>
              <i class="fas fa-chevron-down text-brand-green transition-transform duration-300"></i>
            </button>
            <div class="faq-content hidden px-6 pb-6 pt-2 text-gray-600 border-t border-gray-50">
              Yes! Delivery is free for Nairobi and its environs.
            </div>
          </div>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-24 bg-gradient-to-br from-brand-dark via-brand-green to-brand-dark text-white text-center relative overflow-hidden">
  <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>  
  <div class="max-w-4xl mx-auto px-4 relative z-10">
    <div class="inline-block p-4 rounded-full bg-white/10 mb-6 backdrop-blur-sm">
        <i class="fas fa-paper-plane text-3xl text-brand-orange"></i>
    </div>
    <h2 class="text-4xl font-heading font-bold mb-6">Stay in the Loop</h2>
    <p class="text-green-100 mb-10 max-w-2xl mx-auto text-lg">Subscribe to our newsletter for exclusive offers, new product announcements, and wholesale deals.</p>
    <form class="flex flex-col sm:flex-row justify-center gap-4 max-w-lg mx-auto">
       <input class="w-full px-8 py-4 rounded-full text-brand-dark font-medium focus:outline-none focus:ring-4 focus:ring-brand-orange/50 shadow-xl" type="email" placeholder="Enter your email address..." aria-label="Email">
       <button class="w-full sm:w-auto px-10 py-4 bg-brand-orange hover:bg-orange-600 text-white font-bold rounded-full transition-all shadow-xl hover:shadow-2xl hover:scale-105" type="submit">Subscribe</button>
    </form>
  </div>
</section>

<?php include 'footer.php'; ?>
