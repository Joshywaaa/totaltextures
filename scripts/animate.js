// Wait for the DOM content to be fully loaded
document.addEventListener('DOMContentLoaded', function () {
    // Initialize carousels using the Flickity library
    var carousels = document.querySelectorAll('.carousel');
    carousels.forEach(function (carousel) {
        new Flickity(carousel, {
            cellAlign: 'left',
            contain: true,
            autoPlay: 3000, // Auto-play with a 3-second interval
        });
    });

    // Function to animate the article rows when they come into the viewport
    function animateArticleRows(entries, observer) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                // Get the article row
                var row = entry.target;

                // Apply animation styles when it's in the viewport
                row.style.opacity = '1'; // Make the row visible
                row.style.transform = 'translateY(0)'; // Remove vertical translation
                observer.unobserve(row); // Stop observing after animation
            }
        });
    }

    // Create an Intersection Observer
    var options = {
        root: null, // Use the viewport as the root
        rootMargin: '0px', // No margin
        threshold: 0.4, // Trigger when 40% of the element is visible
    };

    // Get all the article rows
    var articleRows = document.querySelectorAll('.article-row');
    var observer = new IntersectionObserver(animateArticleRows, options);

    // Observe each article row to trigger animations when they become visible
    articleRows.forEach(function (row) {
        observer.observe(row);
    });
});
