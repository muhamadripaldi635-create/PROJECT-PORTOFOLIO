/**
 * PORTFOLIO VIEW — Modern Dynamic Application Script
 */

document.addEventListener('DOMContentLoaded', function () {

    // -----------------------------------------------------------------------
    // 1. Hero Title Dynamic Typewriter Animation
    // -----------------------------------------------------------------------
    const typewriterElement = document.getElementById('typewriterText');
    if (typewriterElement) {
        const roles = [
            "A Web Designer",
            "A Web Developer",
            "A Software Engineer",
            "A UI/UX Specialist",
            "A Full-Stack Creator"
        ];
        let roleIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let typingSpeed = 100;

        function typeLoop() {
            const currentRole = roles[roleIndex];
            
            if (isDeleting) {
                typewriterElement.textContent = currentRole.substring(0, charIndex - 1);
                charIndex--;
                typingSpeed = 50;
            } else {
                typewriterElement.textContent = currentRole.substring(0, charIndex + 1);
                charIndex++;
                typingSpeed = 110;
            }

            if (!isDeleting && charIndex === currentRole.length) {
                // Pause at end of word
                typingSpeed = 2200;
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                roleIndex = (roleIndex + 1) % roles.length;
                typingSpeed = 500;
            }

            setTimeout(typeLoop, typingSpeed);
        }

        typeLoop();
    }

    // -----------------------------------------------------------------------
    // 2. Navbar Scrollspy & Sticky Header
    // -----------------------------------------------------------------------
    const navbarWrapper = document.querySelector('.navbar-wrapper');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const sections = document.querySelectorAll('section[id]');
    const backToTopBtn = document.getElementById('backToTopBtn');

    function handleScroll() {
        const scrollY = window.scrollY;

        // Sticky Navbar styling
        if (scrollY > 50) {
            navbarWrapper.classList.add('scrolled');
        } else {
            navbarWrapper.classList.remove('scrolled');
        }

        // Back to top button
        if (backToTopBtn) {
            if (scrollY > 400) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        }

        // Active link spy
        let activeId = '';
        const scrollPos = scrollY + 140;

        sections.forEach(section => {
            const top = section.offsetTop;
            const height = section.offsetHeight;
            if (scrollPos >= top && scrollPos < top + height) {
                activeId = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${activeId}`) {
                link.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', handleScroll);
    handleScroll();

    // -----------------------------------------------------------------------
    // 4. Mobile Navigation Drawer Toggle
    // -----------------------------------------------------------------------
    const mobileToggle = document.getElementById('mobileNavToggle');
    const navMenu = document.getElementById('navbarNav');

    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', function () {
            navMenu.classList.toggle('active');
            const icon = mobileToggle.querySelector('i');
            if (navMenu.classList.contains('active')) {
                icon.className = 'fa-solid fa-xmark';
            } else {
                icon.className = 'fa-solid fa-bars';
            }
        });

        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                const icon = mobileToggle.querySelector('i');
                if (icon) icon.className = 'fa-solid fa-bars';
            });
        });

        document.addEventListener('click', function (e) {
            if (navMenu.classList.contains('active') && !navMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
                navMenu.classList.remove('active');
                const icon = mobileToggle.querySelector('i');
                if (icon) icon.className = 'fa-solid fa-bars';
            }
        });
    }

    // -----------------------------------------------------------------------
    // 5. Search Modal Toggle & Quick Search Filter
    // -----------------------------------------------------------------------
    const searchToggleBtn = document.getElementById('searchToggleBtn');
    const searchModal = document.getElementById('searchModal');
    const closeSearchBtn = document.getElementById('closeSearchBtn');
    const quickSearchInput = document.getElementById('quickSearchInput');

    function openSearch() {
        if (searchModal) {
            searchModal.classList.add('open');
            if (quickSearchInput) {
                setTimeout(() => quickSearchInput.focus(), 150);
            }
        }
    }

    function closeSearch() {
        if (searchModal) {
            searchModal.classList.remove('open');
        }
    }

    if (searchToggleBtn) searchToggleBtn.addEventListener('click', openSearch);
    if (closeSearchBtn) closeSearchBtn.addEventListener('click', closeSearch);

    if (searchModal) {
        searchModal.addEventListener('click', function (e) {
            if (e.target === searchModal) closeSearch();
        });
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && searchModal && searchModal.classList.contains('open')) {
            closeSearch();
        }
    });

    // Close search modal when clicking quick tags
    const searchTags = document.querySelectorAll('.search-tag');
    searchTags.forEach(tag => {
        tag.addEventListener('click', () => {
            closeSearch();
        });
    });

    // -----------------------------------------------------------------------
    // 6. Portfolio Category Filter
    // -----------------------------------------------------------------------
    const filterTabs = document.querySelectorAll('.filter-tab');
    const projectCards = document.querySelectorAll('.project-card');

    filterTabs.forEach(tab => {
        tab.addEventListener('click', function () {
            filterTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            const filterValue = this.getAttribute('data-filter');

            projectCards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filterValue === 'all' || category === filterValue) {
                    card.style.display = 'flex';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(15px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 250);
                }
            });
        });
    });

    // -----------------------------------------------------------------------
    // 7. Smooth Scroll Navigation
    // -----------------------------------------------------------------------
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId && targetId.length > 1 && targetId.startsWith('#')) {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    e.preventDefault();
                    const offset = 85;
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - offset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

});

/**
 * Handle Contact Form submission directly to WhatsApp
 */
function handleContactSubmit() {
    const name = document.getElementById('contactName')?.value || '';
    const email = document.getElementById('contactEmail')?.value || '';
    const subject = document.getElementById('contactSubject')?.value || '';
    const message = document.getElementById('contactMessage')?.value || '';

    const waMessage = `Halo Rivaldi,%0A%0ASaya ingin berdiskusi mengenai proyek IT / Web:%0A- Nama: ${encodeURIComponent(name)}%0A- Email/Kontak: ${encodeURIComponent(email)}%0A- Topik: ${encodeURIComponent(subject)}%0A- Pesan: ${encodeURIComponent(message)}%0A%0ATerima kasih!`;

    const waUrl = `https://wa.me/6283808567541?text=${waMessage}`;
    window.open(waUrl, '_blank');
}
