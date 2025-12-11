/**
 * Script Utama Triverse
 * Fitur: Smooth Scroll & Shortcut Search
 */

document.addEventListener('DOMContentLoaded', () => {
    console.log('Triverse App Ready! 🚀');

    // 1. Logic Shortcut Ctrl + K
    const searchInput = document.getElementById('searchInput');

    document.addEventListener('keydown', (e) => {
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            if (searchInput) {
                searchInput.focus();
            }
        }
    });

    // 2. Logic Smooth Scroll Logo
    const brandLink = document.getElementById('brandLink');
    if (brandLink) {
        brandLink.addEventListener('click', (e) => {
            const currentPath = window.location.pathname;
            
            // Logika scroll jika di homepage
            if (currentPath === '/' || currentPath.includes('/public/') || currentPath.includes('index.php')) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    left: 0,
                    behavior: 'smooth'
                });
            }
        });
    }

    // 3. Interaction Placeholder
    const ctaButton = document.getElementById('ctaButton');
    if (ctaButton) {
        ctaButton.addEventListener('click', () => {
            alert('Fitur Login Triverse akan segera hadir!');
        });
    }
});