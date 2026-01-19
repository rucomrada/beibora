<?php include 'header.php'; ?>

<!-- Page Header -->
<header class="pt-32 pb-16 bg-brand-dark text-center text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 animate__animated animate__fadeIn">
        <h1 class="text-4xl md:text-5xl font-heading font-extrabold mb-4">Get In Touch</h1>
        <p class="text-xl text-green-100 font-light">We'd love to hear from you.</p>
    </div>
</header>

<section class="py-20 bg-gray-50" id="contact">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
      
      <!-- Address -->
      <div class="bg-white rounded-2xl p-8 text-center shadow-md hover:shadow-xl transition-all duration-300" data-aos="fade-up">
           <div class="w-16 h-16 bg-green-50 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-map-marker-alt text-2xl text-brand-green"></i>
            </div>
            <h4 class="text-lg font-bold text-gray-900 uppercase tracking-wider mb-4">Address</h4>
            <div class="w-12 h-1 bg-brand-orange mx-auto mb-4 rounded-full"></div>
            <p class="text-gray-600 text-sm"><a href="https://maps.app.goo.gl/nnC5X4FHiRdWXm2j9" target="_blank" class="hover:text-brand-orange transition-colors">Adjacent to Jacaranda Roundabout, Spine Road, Kayole, NRB</a></p>
      </div>

      <!-- Email -->
      <div class="bg-white rounded-2xl p-8 text-center shadow-md hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
            <div class="w-16 h-16 bg-green-50 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-envelope text-2xl text-brand-green"></i>
            </div>
            <h4 class="text-lg font-bold text-gray-900 uppercase tracking-wider mb-4">Email</h4>
            <div class="w-12 h-1 bg-brand-orange mx-auto mb-4 rounded-full"></div>
            <p class="text-gray-600 text-sm"><a href="mailto:info@beibora.com" class="hover:text-brand-orange transition-colors">info@beibora.com</a></p>
      </div>

      <!-- Phone -->
      <div class="bg-white rounded-2xl p-8 text-center shadow-md hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
            <div class="w-16 h-16 bg-green-50 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-phone-alt text-2xl text-brand-green"></i>
            </div>
            <h4 class="text-lg font-bold text-gray-900 uppercase tracking-wider mb-4">Phone</h4>
            <div class="w-12 h-1 bg-brand-orange mx-auto mb-4 rounded-full"></div>
            <p class="text-gray-600 text-sm">
                <a href="tel:+254714285993" class="hover:text-brand-orange transition-colors block mb-1">+254 714 285 993</a>
                <a href="tel:+254718005867" class="hover:text-brand-orange transition-colors block">+254 718 005 867</a>
            </p>
      </div>
    </div>
    
    <!-- Map -->
    <div class="mb-20 rounded-2xl overflow-hidden shadow-2xl h-96" data-aos="zoom-in">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.16644365768!2d36.905274!3d-1.287990!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f13f1c65440ed%3A0x629524021798319e!2sJacaranda%20Roundabout!5e0!3m2!1sen!2ske!4v1625648554785!5m2!1sen!2ske" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    
    <!-- FAQs Section -->
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-heading font-bold text-center text-gray-900 mb-10">Frequently Asked Questions</h2>
        
        <div class="space-y-4">
          <!-- FAQ Item 1 -->
          <div class="bg-white rounded-xl shadow-sm overflow-hidden" x-data="{ open: true }">
            <button class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 flex justify-between items-center focus:outline-none" onclick="document.getElementById('faq1').classList.toggle('hidden')">
              <span class="font-bold text-gray-800">What payment methods do you accept?</span>
              <i class="fas fa-chevron-down text-brand-green"></i>
            </button>
            <div id="faq1" class="px-6 py-4 text-gray-600">
              We accept MPESA payments for security and efficiency. Till Number: XXXXXX.
            </div>
          </div>
          
          <!-- FAQ Item 2 -->
          <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <button class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 flex justify-between items-center focus:outline-none" onclick="document.getElementById('faq2').classList.toggle('hidden')">
              <span class="font-bold text-gray-800">What is your return policy?</span>
              <i class="fas fa-chevron-down text-brand-green"></i>
            </button>
            <div id="faq2" class="hidden px-6 py-4 text-gray-600">
              Our return policy allows for returns within 30 days of purchase for damaged or incorrect goods.
            </div>
          </div>
          
          <!-- FAQ Item 3 -->
          <div class="bg-white rounded-xl shadow-sm overflow-hidden">
             <button class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 flex justify-between items-center focus:outline-none" onclick="document.getElementById('faq3').classList.toggle('hidden')">
              <span class="font-bold text-gray-800">Do you offer delivery?</span>
              <i class="fas fa-chevron-down text-brand-green"></i>
            </button>
            <div id="faq3" class="hidden px-6 py-4 text-gray-600">
              Yes! We offer free delivery within Kayole and affordable rates for the greater Nairobi area.
            </div>
          </div>
        </div>
    </div>

  </div>
</section>

<!-- Newsletter -->
<section class="py-16 bg-brand-dark text-white text-center">
  <div class="max-w-4xl mx-auto px-4">
    <i class="far fa-paper-plane text-4xl text-brand-orange mb-4 inline-block"></i>
    <h2 class="text-3xl font-heading font-bold mb-8">Subscribe for Updates!</h2>
    <form class="flex flex-col sm:flex-row justify-center gap-4 max-w-lg mx-auto">
       <input class="w-full px-6 py-3 rounded-full text-gray-900 focus:outline-none focus:ring-2 focus:ring-brand-orange" type="email" placeholder="Enter your email address..." aria-label="Email">
       <button class="w-full sm:w-auto px-8 py-3 bg-brand-orange hover:bg-orange-600 text-white font-bold rounded-full transition-colors shadow-lg" type="submit">Notify Me</button>
    </form>
  </div>
</section>

<?php include 'footer.php'; ?>
