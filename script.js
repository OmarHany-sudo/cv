// Simple scroll animation for sections
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('.fade-in');
    const windowHeight = window.innerHeight;

    sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;
        if (sectionTop < windowHeight - 100) {
            section.classList.remove('fade-in');
        }
    });
});
