<?php include 'header.php'; ?>

<!-- Page Header -->
<header class="pt-32 pb-16 bg-brand-dark text-center text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative z-10 max-w-4xl mx-auto px-4 animate__animated animate__fadeIn">
        <h1 class="text-4xl md:text-5xl font-heading font-extrabold mb-4">Testimonials</h1>
        <p class="text-xl text-green-100 font-light">See what our partners are saying.</p>
    </div>
</header>

<section id="testimonials" class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col lg:flex-row items-center gap-16">
      <div class="lg:w-1/2" data-aos="fade-right"> 
          <img src="asset/img/testimonial-image.jpg" alt="Testimonial Image" class="w-full rounded-2xl shadow-2xl"> 
      </div>
      
      <div class="lg:w-1/2" data-aos="fade-left">
          <div class="bg-white rounded-2xl p-10 shadow-xl relative">
              <!-- Quote Icon -->
              <div class="absolute -top-6 -left-6 w-12 h-12 bg-brand-orange rounded-full flex items-center justify-center text-white text-2xl">
                  <i class="fas fa-quote-left"></i>
              </div>
              
              <!-- Content Carousel (Standard Bootstrap JS relies on specific classes, we emulate visuals but might need JS adjustment or use simple CSS switching. For now, we simulate one static best view or use custom JS for slider if needed. Since we removed Bootstrap JS, we should implement a simple vanilla JS slider or stack them.) -->
              <!-- Simplification: Displaying static for now as replacing carousel logic requires more JS. Or better, let's make it a grid for Tailwind -->
              
              <div class="space-y-8">
                  <!-- Review 1 -->
                  <div class="border-b border-gray-100 pb-8 last:border-0 last:pb-0">
                      <div class="flex items-center gap-4 mb-4">
                          <img src="asset/img/user.png" class="w-12 h-12 rounded-full" alt="Customer 1">
                          <div>
                              <h5 class="font-bold text-gray-900">Mercy</h5>
                              <p class="text-sm text-gray-500">Shop Attendant</p>
                          </div>
                          <div class="ml-auto text-brand-orange text-sm">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                          </div>
                      </div>
                      <p class="text-gray-600 italic leading-relaxed">"BEI BORA has been our go-to supplier for years. Their products are top-notch and their customer service is outstanding!"</p>
                  </div>
                  
                   <!-- Review 2 -->
                   <div class="border-b border-gray-100 pb-8 last:border-0 last:pb-0">
                      <div class="flex items-center gap-4 mb-4">
                          <img src="asset/img/user.png" class="w-12 h-12 rounded-full" alt="Customer 1">
                          <div>
                              <h5 class="font-bold text-gray-900">Sarah</h5>
                              <p class="text-sm text-gray-500">Business Woman</p>
                          </div>
                           <div class="ml-auto text-brand-orange text-sm">
                              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                          </div>
                      </div>
                      <p class="text-gray-600 italic leading-relaxed">"Great experience working with BEI BORA. They always deliver on time and exceed our expectations!"</p>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
