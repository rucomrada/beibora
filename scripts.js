// Initialize and customize the interactive map
function initMap() {
    // Replace with your business coordinates
    var myLatLng = { lat: 34.052235, lng: -118.243683 };

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: myLatLng,
        disableDefaultUI: true, // Disable default map UI
        styles: [
            {
                "featureType": "poi",
                "stylers": [
                    { "visibility": "off" }
                ]
            }
        ]
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Your Business Name'
    });
}

// Form validation using jQuery
$(document).ready(function() {
    $('#contactForm').submit(function(event) {
        event.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();

        // Simple validation
        if (name.trim() == '' || email.trim() == '' || message.trim() == '') {
            $('#formStatus').html('<div class="alert alert-danger" role="alert">Please fill in all fields.</div>');
            return;
        }

        // Assuming AJAX form submission for this example
        // You would replace the AJAX call with your own form submission logic
        // Simulating a successful form submission
        $('#formStatus').html('<div class="alert alert-success" role="alert">Your message has been sent successfully!</div>');

        // Clear form fields after successful submission
        $('#name').val('');
        $('#email').val('');
        $('#message').val('');
    });
});


const textContainer = document.getElementsByClassName('prod-desc');
const originalText = textContainer.innerHTML;

// Function to check text height and add <br> if necessary
function checkText() {
	textContainer.innerHTML = originalText; // Reset to original text
	const singleLineHeight = textContainer.offsetHeight;

	textContainer.innerHTML = originalText + '<br>'; // Add break tag
	const doubleLineHeight = textContainer.offsetHeight;

	if (singleLineHeight < doubleLineHeight) {
		// If it originally occupied less height, it is a single line
		textContainer.innerHTML = originalText + '<br>'; // Add break tag
	}
}


// Product Filtering and Search
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('#categoryFilters button');
    const products = document.querySelectorAll('.product-item');
    const searchInput = document.getElementById('productSearch');
    const noResults = document.getElementById('noResults');

    // Filter by Category
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active to current
            button.classList.add('active');
            
            const filterValue = button.getAttribute('data-filter');
            filterProducts(filterValue, searchInput.value);
        });
    });

    // Search Functionality
    if(searchInput){
        searchInput.addEventListener('keyup', () => {
            const activeBtn = document.querySelector('#categoryFilters button.active');
            const filterValue = activeBtn ? activeBtn.getAttribute('data-filter') : 'all';
            filterProducts(filterValue, searchInput.value);
        });
    }

    function filterProducts(category, searchText) {
        let visibleCount = 0;
        const lowerSearch = searchText.toLowerCase();

        products.forEach(product => {
            const productCategory = product.getAttribute('data-category');
            const productTitle = product.querySelector('.card-title').innerText.toLowerCase();
            const productDesc = product.querySelector('.card-text').innerText.toLowerCase();
            
            const matchesCategory = category === 'all' || productCategory === category;
            const matchesSearch = productTitle.includes(lowerSearch) || productDesc.includes(lowerSearch);

            if (matchesCategory && matchesSearch) {
                product.style.display = 'block';
                // Trigger animation reset
                product.classList.remove('aos-animate');
                setTimeout(() => product.classList.add('aos-animate'), 50);
                visibleCount++;
            } else {
                product.style.display = 'none';
            }
        });

        // Show/Hide No Results
        if (visibleCount === 0) {
            noResults.classList.remove('d-none');
        } else {
            noResults.classList.add('d-none');
        }
    }
});
