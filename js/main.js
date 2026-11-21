document.addEventListener('DOMContentLoaded', () => {
  // Sticky Header Scroll Effect
  const header = document.querySelector('header.site-header');
  
  if (header) {
    const handleScroll = () => {
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    };
    
    // Initial check
    handleScroll();
    window.addEventListener('scroll', handleScroll);
  }

  // Mobile Menu Navigation Toggle
  const navToggle = document.querySelector('.nav-toggle');
  const navMenu = document.querySelector('.nav-menu');

  if (navToggle && navMenu) {
    const toggleMenu = (show) => {
      const isActive = show !== undefined ? show : !navMenu.classList.contains('active');
      navToggle.classList.toggle('active', isActive);
      navMenu.classList.toggle('active', isActive);
      document.body.classList.toggle('no-scroll', isActive);
    };

    navToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      toggleMenu();
    });

    // Close menu when clicking outside or on a link
    document.addEventListener('click', (e) => {
      if (!navToggle.contains(e.target) && !navMenu.contains(e.target) && navMenu.classList.contains('active')) {
        toggleMenu(false);
      }
    });

    const navLinks = navMenu.querySelectorAll('a');
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        toggleMenu(false);
      });
    });
  }
});
