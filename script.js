/* 
    Digigyapan Interactive Logic
    Theme switching, Scroll animations, Lead generation
*/

document.addEventListener('DOMContentLoaded', () => {
    
    // --- THEME SWITCHER LOGIC ---
    const themeToggleBtn = document.getElementById('theme-toggle-btn');
    const themePanel = document.getElementById('theme-panel');
    const closePanel = document.getElementById('close-panel');
    const themeOptions = document.querySelectorAll('.theme-option');
    const body = document.body;

    // Open Panel
    themeToggleBtn.addEventListener('click', () => {
        themePanel.classList.add('open');
    });

    // Close Panel
    closePanel.addEventListener('click', () => {
        themePanel.classList.remove('open');
    });

    // Close panel when clicking outside
    document.addEventListener('click', (e) => {
        if (!themePanel.contains(e.target) && !themeToggleBtn.contains(e.target)) {
            themePanel.classList.remove('open');
        }
    });

    // Switch Theme
    themeOptions.forEach(option => {
        option.addEventListener('click', () => {
            const theme = option.getAttribute('data-theme');
            
            // Set theme on body
            body.setAttribute('data-theme', theme);
            
            // Update active state in UI
            themeOptions.forEach(opt => opt.classList.remove('active'));
            option.classList.add('active');
            
            // Store theme in local storage
            localStorage.setItem('digigyapan-theme', theme);
            
            // Optional: Show a small toast notification or feedback
        });
    });

    // Load saved theme
    const savedTheme = localStorage.getItem('digigyapan-theme');
    if (savedTheme) {
        body.setAttribute('data-theme', savedTheme);
        themeOptions.forEach(opt => {
            if (opt.getAttribute('data-theme') === savedTheme) {
                opt.classList.add('active');
            } else {
                opt.classList.remove('active');
            }
        });
    }

    // --- SCROLL ANIMATIONS (Intersection Observer) ---
    const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-up');
    
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                
                // If it's a counter box, start counting
                if (entry.target.classList.contains('counting-stats')) {
                    startCounters();
                }
            }
        });
    }, { threshold: 0.1 });

    revealElements.forEach(el => revealObserver.observe(el));

    // Special observer for sections that aren't marked but need animation
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        if (!section.classList.contains('reveal')) {
             revealObserver.observe(section);
        }
    });

    // --- COUNTING NUMBERS ---
    function startCounters() {
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const speed = 200; // Lower is faster
            
            const updateCount = () => {
                const count = +counter.innerText;
                const inc = target / speed;
                
                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target;
                }
            };
            
            updateCount();
        });
    }

    // --- STICKY CTA VISIBILITY ---
    const stickyCta = document.getElementById('sticky-cta');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 600) {
            stickyCta.classList.add('show');
        } else {
            stickyCta.classList.remove('show');
        }
    });

    // --- POPUP MODAL ---
    const leadPopup = document.getElementById('lead-popup');
    const closePopup = document.querySelector('.close-modal');
    
    // Show popup after 10 seconds, but only once per session
    const hasSeenPopup = sessionStorage.getItem('digigyapan-popup');
    
    if (!hasSeenPopup) {
        setTimeout(() => {
            leadPopup.style.display = 'flex';
        }, 12000); // 12 seconds delay
    }

    closePopup.addEventListener('click', () => {
        leadPopup.style.display = 'none';
        sessionStorage.setItem('digigyapan-popup', 'true');
    });

    window.addEventListener('click', (e) => {
        if (e.target === leadPopup) {
            leadPopup.style.display = 'none';
            sessionStorage.setItem('digigyapan-popup', 'true');
        }
    });

    // --- FORM SUBMISSION ---
    const leadForm = document.getElementById('lead-form');
    if (leadForm) {
        leadForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = leadForm.querySelector('button');
            const originalText = btn.innerHTML;
            
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
            btn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                btn.innerHTML = '<i class="fas fa-check"></i> Audit Requested!';
                btn.style.background = '#10b981';
                
                // Reset after 3 seconds
                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.style.background = '';
                    btn.disabled = false;
                    leadForm.reset();
                }, 3000);
            }, 1500);
        });
    }

    // Popup Form
    const popupForm = document.querySelector('.popup-form');
    if (popupForm) {
        popupForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const btn = popupForm.querySelector('button');
            btn.innerHTML = '<i class="fas fa-check"></i> Sending...';
            
            setTimeout(() => {
                leadPopup.style.display = 'none';
                sessionStorage.setItem('digigyapan-popup', 'true');
            }, 1000);
        });
    }

    // --- NAV SCROLL EFFECT ---
    const nav = document.getElementById('main-nav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.style.padding = '0.5rem 0';
            nav.style.boxShadow = 'var(--shadow-md)';
        } else {
            nav.style.padding = '1.5rem 0';
            nav.style.boxShadow = 'none';
        }
    });
});
