<button id="scrollToTop" class="btn btn-primary" style="position: fixed; bottom: 20px; right: 20px; display: none; z-index: 1000;">
    ↑
</button>
<script>
    // Show or hide the button based on scroll position
    window.addEventListener('scroll', function () {
        const scrollToTopButton = document.getElementById('scrollToTop');
        if (window.scrollY > 200) {
            scrollToTopButton.style.display = 'block';
        } else {
            scrollToTopButton.style.display = 'none';
        }
    });

    // Smooth scroll to the top
    document.getElementById('scrollToTop').addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>