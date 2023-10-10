document.addEventListener('DOMContentLoaded', function () {
    var carousels = document.querySelectorAll('.carousel');
    carousels.forEach(function (carousel) {
        new Flickity(carousel, {
            cellAlign: 'left',
            contain: true,
            autoPlay: 3000,
        });
    });

    // Function to animate the article rows when they come into the viewport
    function animateArticleRows(entries, observer) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                var row = entry.target;
                row.style.opacity = '1';
                row.style.transform = 'translateY(0)';
                observer.unobserve(row); // Stop observing after animation
            }
        });
    }

    // Create an Intersection Observer
    var options = {
        root: null, // Use the viewport as the root
        rootMargin: '0px', // No margin
        threshold: 0.8, // Trigger when 20% of the element is visible
    };

    var articleRows = document.querySelectorAll('.article-row');
    var observer = new IntersectionObserver(animateArticleRows, options);

    // Observe each article row
    articleRows.forEach(function (row) {
        observer.observe(row);
    });
});
