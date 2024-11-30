// Initialize AOS
AOS.init({
    duration: 800,   // Animation duration
    once: true,      // Whether animation should happen only once - while scrolling down
    easing: 'ease-out',  // Easing function for smoother animations
    offset: 100,     // Start the animation a little earlier than default
    delay: 100,      // Delay before starting the animation
    disable: 'mobile', // Disable animations on mobile devices (optional for better performance)
});

// Refresh AOS on window resize to improve performance
window.addEventListener('resize', function() {
    AOS.refresh();
});
