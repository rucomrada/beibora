<?php 
require_once 'config.php';

// Only update JSON if requested or if file doesn't exist
if (isset($_GET['refresh']) || !file_exists('products.json')) {
    include 'update_products.php';
}

// Load products data
$productsData = json_decode(file_get_contents('products.json'), true);
$categories = $productsData['categories'];
$allProducts = $productsData['products'];
$totalProducts = $productsData['total_products'];

// NOTE: For better UX (Search/Filter), we will pass ALL products to Javascript 
// and handle rendering on the client side. This fixes the issue where search
// only worked on the current page of results.

include 'header.php'; 
?>

<!-- Hero Header -->
<section class="relative pt-32 pb-20 bg-gradient-to-br from-brand-dark via-brand-green to-brand-dark text-white overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-block px-4 py-1 mb-4 border border-brand-orange rounded-full bg-black bg-opacity-30 backdrop-filter backdrop-blur-sm animate__animated animate__fadeInDown">
            <span class="text-brand-orange font-bold text-xs tracking-widest uppercase"><?php echo $totalProducts; ?>+ Premium Items</span>
        </div>
        <h1 class="text-4xl md:text-6xl font-heading font-extrabold mb-4 animate__animated animate__fadeInDown">Our Products</h1>
        <p class="text-xl text-green-100 font-light max-w-2xl mx-auto animate__animated animate__fadeInUp">From cooking oils to personal care - everything your shelf needs, sourced directly from trusted manufacturers.</p>
    </div>
</section>

<!-- Main Products Section -->
<section class="py-16 bg-gray-50 min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Filters & Search Bar -->
    <div class="mb-12">
        <!-- Search Bar -->
        <div class="relative mb-8 max-w-2xl mx-auto">
            <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                 <i class="fas fa-search text-gray-400 text-lg"></i>
            </div>
            <input type="text" id="productSearch" 
                   class="block w-full pl-14 pr-4 py-5 border-none text-gray-900 bg-white focus:ring-2 focus:ring-brand-green placeholder-gray-400 rounded-full shadow-lg text-lg" 
                   placeholder="Search products (e.g., 'Oil', 'Rice', 'Soap')...">
        </div>
        
        <!-- Category Filters -->
        <div class="flex flex-wrap justify-center gap-3" id="categoryFilters">
            <button class="category-filter active px-6 py-3 rounded-full font-semibold transition-all shadow-sm hover:shadow-md" data-filter="all">
                <i class="fas fa-th-large mr-2"></i> All Products
            </button>
            <?php foreach ($categories as $key => $category): ?>
            <button class="category-filter px-6 py-3 rounded-full font-semibold transition-all shadow-sm hover:shadow-md" data-filter="<?php echo $key; ?>">
                <i class="<?php echo $category['icon']; ?> mr-2"></i> <?php echo $category['name']; ?>
            </button>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Results Counter & Page Info -->
    <div class="mb-6 flex justify-between items-center">
        <p class="text-gray-600" id="resultsCounter">
            Showing <strong class="text-brand-green" id="visibleCount">0</strong> of <strong class="text-brand-green"><?php echo $totalProducts; ?></strong> products
        </p>
    </div>

    <!-- Products Grid (Client-Side Rendered) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12" id="productsGrid">
        <!-- Content injected via JS -->
    </div>

    <!-- Pagination Controls (JS Driven) -->
    <div class="flex flex-col sm:flex-row justify-between items-center gap-6" id="paginationControls">
        <button id="prevPageBtn" class="inline-flex items-center px-6 py-3 bg-white border-2 border-brand-green text-brand-green rounded-full hover:bg-brand-green hover:text-white transition-all font-semibold shadow-md disabled:opacity-50 disabled:cursor-not-allowed">
            <i class="fas fa-chevron-left mr-2"></i> Previous
        </button>
        
        <span class="text-gray-600 font-semibold" id="pageIndicator">Page 1</span>

        <button id="nextPageBtn" class="inline-flex items-center px-6 py-3 bg-brand-green text-white rounded-full hover:bg-green-700 transition-all font-semibold shadow-md disabled:opacity-50 disabled:cursor-not-allowed">
            Next <i class="fas fa-chevron-right ml-2"></i>
        </button>
    </div>

    <!-- No Results Message -->
    <div id="noResults" class="hidden text-center py-16">
        <div class="max-w-md mx-auto">
            <i class="fas fa-search text-6xl text-gray-300 mb-4"></i>
            <h3 class="text-2xl font-bold text-gray-400 mb-2">No Products Found</h3>
            <p class="text-gray-500">Try adjusting your search or filters</p>
        </div>
    </div>

  </div>
</section>

<!-- Product Modal -->
<div id="productModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4 backdrop-blur-sm transition-opacity duration-300">
    <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl transform transition-all scale-95 opacity-0" id="modalContent">
        <div class="sticky top-0 bg-white border-b border-gray-100 px-6 py-4 flex justify-between items-center rounded-t-3xl z-10">
            <h3 id="modalTitle" class="text-2xl font-bold text-brand-dark"></h3>
            <button onclick="closeModal()" class="w-10 h-10 rounded-full hover:bg-gray-100 flex items-center justify-center transition-colors">
                <i class="fas fa-times text-gray-600 text-xl"></i>
            </button>
        </div>
        <div class="p-6">
            <div class="mb-6 bg-gray-50 rounded-2xl p-4 flex justify-center">
                <img id="modalImage" src="" alt="" class="max-h-80 object-contain rounded-xl shadow-sm">
            </div>
            <div class="mb-4">
                <span id="modalCategory" class="inline-block px-3 py-1 bg-green-100 text-brand-green text-xs font-bold uppercase rounded-full"></span>
            </div>
            <p id="modalDescription" class="text-gray-700 text-lg leading-relaxed mb-6"></p>
            <div class="bg-blue-50 border border-blue-100 rounded-2xl p-6 mb-6">
                <h4 class="font-bold text-blue-900 mb-3 flex items-center">
                    <i class="fas fa-info-circle text-blue-500 mr-2"></i> Product Information
                </h4>
                <ul class="space-y-2 text-blue-800 text-sm">
                    <li class="flex items-center"><i class="fas fa-check text-brand-green mr-2"></i> Genuine manufacturer products</li>
                    <li class="flex items-center"><i class="fas fa-check text-brand-green mr-2"></i> Bulk quantity discounts available</li>
                    <li class="flex items-center"><i class="fas fa-truck text-brand-green mr-2"></i> Fast delivery within Nairobi</li>
                </ul>
            </div>
            <div class="flex gap-4">
                <a href="contact.php" class="flex-1 px-6 py-3 bg-brand-orange text-white font-bold rounded-full hover:bg-orange-600 transition-colors text-center shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    <i class="fas fa-phone-alt mr-2"></i> Order Now
                </a>
                <button onclick="closeModal()" class="flex-1 px-6 py-3 border-2 border-gray-300 text-gray-700 font-bold rounded-full hover:bg-gray-50 transition-colors">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<section class="py-20 bg-brand-dark relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
    <div class="max-w-5xl mx-auto px-4 text-center relative z-10">
        <h2 class="text-3xl md:text-4xl font-heading font-bold text-white mb-6">Need Bulk Quantities?</h2>
        <p class="text-green-100 text-lg mb-10 max-w-2xl mx-auto">We offer special pricing for bulk orders. Our team can also help you source specific products not listed here.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="contact.php" class="px-8 py-4 bg-brand-orange text-white font-bold rounded-full shadow-xl hover:bg-orange-600 transition-colors flex items-center justify-center">
                <i class="fas fa-headset mr-3"></i> Talk to Sales
            </a>
            <a href="#" class="px-8 py-4 bg-white text-brand-green font-bold rounded-full shadow-xl hover:bg-gray-100 transition-colors flex items-center justify-center">
                <i class="fas fa-file-download mr-3"></i> Download Catalog
            </a>
        </div>
    </div>
</section>

<style>
    .category-filter {
        background: white;
        color: #005020;
        border: 1px solid #e5e7eb;
    }
    .category-filter.active {
        background: #009040;
        color: white;
        border-color: #009040;
        box-shadow: 0 4px 6px -1px rgba(0, 144, 64, 0.4);
    }
    .category-filter:hover:not(.active) {
        border-color: #009040;
        color: #009040;
        transform: translateY(-1px);
    }
    
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    /* Modal Animation */
    #productModal:not(.hidden) {
        display: flex;
        animation: fadeIn 0.3s forwards;
    }
    #productModal:not(.hidden) #modalContent {
        animation: scaleIn 0.3s forwards;
        opacity: 1;
        transform: scale(1);
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    @keyframes scaleIn {
        from { transform: scale(0.95); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }
</style>

<script>
// Pass PHP data to JS
const allProducts = <?php echo json_encode($allProducts); ?>;
const categories = <?php echo json_encode($categories); ?>;
const cdnBaseUrl = "<?php echo (defined('USE_CDN') && USE_CDN) ? CDN_BASE_URL : ''; ?>";

// Configuration
const ITEMS_PER_PAGE = 20;
let currentPage = 1;
let currentCategory = 'all';
let searchQuery = '';
let filteredProducts = [...allProducts];

// DOM Elements
const grid = document.getElementById('productsGrid');
const prevBtn = document.getElementById('prevPageBtn');
const nextBtn = document.getElementById('nextPageBtn');
const pageIndicator = document.getElementById('pageIndicator');
const visibleCountEl = document.getElementById('visibleCount');
const noResultsEl = document.getElementById('noResults');

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    filterAndRender();
});

// Category Filter
document.querySelectorAll('.category-filter').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.category-filter').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        currentCategory = btn.getAttribute('data-filter');
        currentPage = 1;
        filterAndRender();
    });
});

// Search Filter
document.getElementById('productSearch').addEventListener('input', (e) => {
    searchQuery = e.target.value.toLowerCase();
    currentPage = 1;
    filterAndRender();
});

// Pagination
prevBtn.addEventListener('click', () => {
    if (currentPage > 1) {
        currentPage--;
        renderGrid();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
});

nextBtn.addEventListener('click', () => {
    const totalPages = Math.ceil(filteredProducts.length / ITEMS_PER_PAGE);
    if (currentPage < totalPages) {
        currentPage++;
        renderGrid();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
});

function filterAndRender() {
    // 1. Filter Data
    filteredProducts = allProducts.filter(product => {
        const matchesCategory = currentCategory === 'all' || product.category === currentCategory;
        // Search matches name or description
        const searchTerms = (product.name + ' ' + product.description).toLowerCase();
        const matchesSearch = searchQuery === '' || searchTerms.includes(searchQuery);
        return matchesCategory && matchesSearch;
    });

    // 2. Render
    renderGrid();
}

function renderGrid() {
    // Prepare Data for Page
    const start = (currentPage - 1) * ITEMS_PER_PAGE;
    const end = start + ITEMS_PER_PAGE;
    const pageItems = filteredProducts.slice(start, end);
    const totalPages = Math.ceil(filteredProducts.length / ITEMS_PER_PAGE);

    // Update UI Counters
    visibleCountEl.textContent = filteredProducts.length;
    pageIndicator.textContent = `Page ${currentPage} of ${totalPages || 1}`;
    
    // Update Button States
    prevBtn.disabled = currentPage === 1;
    nextBtn.disabled = currentPage >= totalPages || totalPages === 0;
    
    // Grid Content
    grid.innerHTML = '';
    
    if (filteredProducts.length === 0) {
        grid.style.display = 'none';
        noResultsEl.classList.remove('hidden');
        document.getElementById('paginationControls').style.display = 'none';
        return;
    } else {
        grid.style.display = 'grid';
        noResultsEl.classList.add('hidden');
        document.getElementById('paginationControls').style.display = 'flex';
    }

    pageItems.forEach(product => {
        const categoryData = categories[product.category];
        const categoryName = categoryData ? categoryData.name : 'Product';
        const gradient = categoryData ? categoryData.gradient : 'from-gray-100 to-gray-200';
        
        // Handle Image URL (CDN or Local)
        let imageUrl = product.image;
        if (cdnBaseUrl && !imageUrl.startsWith('http')) {
            // Remove leading slash if exists to prevent double slash with base
            // But usually paths in JSON are relative like "asset/..."
            imageUrl = cdnBaseUrl + imageUrl.replace(/^\//, '');
        }

        const card = document.createElement('div');
        card.className = 'product-item h-full animate__animated animate__fadeIn';
        card.innerHTML = `
            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 h-full flex flex-col group border border-gray-100">
              <div class="relative h-56 overflow-hidden bg-gradient-to-br ${gradient} flex-shrink-0">
                 <img src="${imageUrl}" loading="lazy" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" alt="${product.name}">
                 <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
              </div>
              <div class="p-6 flex flex-col flex-grow">
                <span class="text-xs font-bold text-brand-green uppercase tracking-wider mb-1">${categoryName}</span>
                <h5 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-brand-green transition-colors line-clamp-2 min-h-[3.5rem]">${product.name}</h5>
                <p class="text-gray-500 text-sm mb-4 line-clamp-2 flex-grow">${product.description}</p>
                <button onclick='openModal(${JSON.stringify(product)}, ${JSON.stringify(categoryData)})' class="w-full px-4 py-2 border-2 border-brand-green text-brand-green rounded-full hover:bg-brand-green hover:text-white transition-all font-semibold text-sm mt-auto shadow-sm hover:shadow-md">
                    View Details
                </button>
              </div>
            </div>
        `;
        grid.appendChild(card);
    });
}

// Modal functions
function openModal(product, category) {
    document.getElementById('modalTitle').innerText = product.name;
    document.getElementById('modalCategory').innerText = category ? category.name : 'General';
    document.getElementById('modalDescription').innerText = product.description;
    
    // Handle Image Logic for Modal too
    let imageUrl = product.image;
    if (cdnBaseUrl && !imageUrl.startsWith('http')) {
        imageUrl = cdnBaseUrl + imageUrl.replace(/^\//, '');
    }
    document.getElementById('modalImage').src = imageUrl;
    
    document.getElementById('productModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    document.getElementById('productModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Close modal on outside click
document.getElementById('productModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});
</script>

<?php include 'footer.php'; ?>
