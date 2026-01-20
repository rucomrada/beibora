<!-- Footer -->
<div class="relative mt-auto">
    <!-- Wave Separator -->
    <div class="absolute top-0 left-0 w-full overflow-hidden leading-none rotate-180 transform -translate-y-full">
        <svg class="relative block w-[calc(110%+1.3px)] h-[60px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="#005020"></path>
        </svg>
    </div>
    
    <footer class="bg-brand-dark text-white pt-8 pb-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
          <!-- Brand Column -->
          <div>
              <h5 class="font-heading font-bold text-xl mb-4 text-brand-orange tracking-wider">BEI BORA</h5>
              <p class="text-gray-300 text-sm leading-relaxed mb-6">Leading distributor of foodstuffs and household products across Kenya. Delivering quality and reliability to your doorstep since 2014.</p>
              <div class="flex space-x-4">
                 <a href="https://www.linkedin.com" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-full bg-white bg-opacity-10 hover:bg-brand-orange transition-colors duration-300"><i class="fab fa-linkedin-in"></i></a>
                 <a href="https://www.facebook.com" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-full bg-white bg-opacity-10 hover:bg-brand-orange transition-colors duration-300"><i class="fab fa-facebook-f"></i></a>
                 <a href="https://www.x.com" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-full bg-white bg-opacity-10 hover:bg-brand-orange transition-colors duration-300"><i class="fab fa-twitter"></i></a>
                 <a href="https://www.instagram.com" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-full bg-white bg-opacity-10 hover:bg-brand-orange transition-colors duration-300"><i class="fab fa-instagram"></i></a>
              </div>
          </div>

          <!-- Quick Links -->
          <div>
              <h5 class="font-heading font-bold text-lg mb-4 text-white">Quick Links</h5>
              <ul class="space-y-2">
                  <li><a href="index.php" class="text-gray-400 hover:text-brand-orange transition-colors text-sm">Home</a></li>
                  <li><a href="products.php" class="text-gray-400 hover:text-brand-orange transition-colors text-sm">Our Products</a></li>
                  <li><a href="about.php" class="text-gray-400 hover:text-brand-orange transition-colors text-sm">About Us</a></li>
                  <li><a href="contact.php" class="text-gray-400 hover:text-brand-orange transition-colors text-sm">Contact Support</a></li>
              </ul>
          </div>

          <!-- Newsletter (Simplified for Footer) -->
          <div>
              <h5 class="font-heading font-bold text-lg mb-4 text-white">Stay Updated</h5>
              <p class="text-gray-300 text-sm mb-4">Subscribe to our newsletter for the latest product offers.</p>
              <form class="flex flex-col sm:flex-row gap-2">
                  <input type="email" placeholder="Your email" class="px-4 py-2 rounded-md bg-white bg-opacity-10 border border-transparent focus:border-brand-orange focus:bg-white focus:text-gray-900 focus:outline-none transition-all text-sm w-full">
                  <button class="px-4 py-2 bg-brand-orange text-white rounded-md font-semibold hover:bg-orange-600 transition-colors text-sm">Join</button>
              </form>
          </div>
      </div>

      <div class="border-t border-brand-green mt-12 pt-8 text-center">
          <p class="text-brand-orange text-sm">&copy; 2024 BEI BORA DISTRIBUTORS LIMITED. All rights reserved.</p>
      </div>
  </div>
  
  <?php 
	// Modals disabled during Tailwind migration to prevent display issues
	// if (file_exists("modals.php")) {
	// 	include_once("modals.php");
	// }
	?>
	
</footer>

	
<!-- Bootstrap and custom JavaScript libraries --> 
<script src="scripts.js"></script> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<!-- AOS Library for scroll animations --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> 
	
	
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script>
        // Initialize AOS for scroll animations
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true // Only once animation on scroll
        });
    </script> 
<!-- Initialize Bootstrap Carousel --> 
<script>
        $(document).ready(function(){
            $('#testimonialCarousel').carousel();
        });
    </script>
</body>
</html>
