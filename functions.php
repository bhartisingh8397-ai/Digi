<?php
/**
 * Digi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Digi
 */

if ( ! defined( 'DIGI_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'DIGI_VERSION', '2.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function digi_setup() {
	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'digi' ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'digi_setup' );

/**
 * Enqueue scripts and styles.
 */
function digi_scripts() {
	wp_enqueue_style( 'digi-style', get_stylesheet_uri(), array(), DIGI_VERSION );
	
	// Google Fonts
	wp_enqueue_style( 'digi-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap', array(), null );
	
	// Font Awesome
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'digi_scripts' );

/**
 * Injecting the main JS functionality directly into the footer
 */
function digi_custom_footer_scripts() {
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        // Add 'js-enabled' class to body for CSS targeting
        document.body.classList.add('js-enabled');

        // Reveal animations on scroll
        const revealElements = document.querySelectorAll('.reveal');
        
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    
                    // Trigger counter if this is a stat box
                    const stats = entry.target.querySelectorAll('.count-up, .num');
                    stats.forEach(stat => {
                        const targetStr = stat.innerText.replace(/[^0-9.]/g, '');
                        if (!targetStr) return;
                        const target = parseFloat(targetStr);
                        const originalText = stat.innerText;
                        const speed = 100;
                        const suffix = originalText.replace(/[0-9.]/g, '');
                        
                        const updateCount = () => {
                            const currentText = stat.innerText.replace(/[^0-9.]/g, '');
                            const count = parseFloat(currentText) || 0;
                            const inc = target / speed;
                            if (count < target) {
                                stat.innerText = (Math.ceil((count + inc) * 10) / 10) + suffix;
                                setTimeout(updateCount, 20);
                            } else {
                                stat.innerText = originalText;
                            }
                        };
                        if(stat.getAttribute('data-counted') !== 'true') {
                            stat.setAttribute('data-counted', 'true');
                            stat.innerText = '0' + suffix;
                            updateCount();
                        }
                    });
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        revealElements.forEach(el => revealObserver.observe(el));

        // Magnetic Buttons
        const btns = document.querySelectorAll('.btn');
        btns.forEach(btn => {
            btn.addEventListener('mousemove', (e) => {
                const rect = btn.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                btn.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
            });
            btn.addEventListener('mouseleave', () => {
                btn.style.transform = `translate(0px, 0px)`;
            });
        });

        // Sticky Navigation logic
        const nav = document.getElementById('main-nav');
        if (nav) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    nav.classList.add('scrolled');
                } else {
                    nav.classList.remove('scrolled');
                }
            });
        }

        // Form submission handling
        const leadForm = document.getElementById('digi-lead-form') || document.getElementById('lead-form');
        if (leadForm) {
            leadForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const btn = leadForm.querySelector('button');
                const originalText = btn.innerText;
                btn.innerText = 'Sending...';
                btn.disabled = true;
                
                setTimeout(() => {
                    alert('Success! Our experts will contact you within 24 hours for your free audit.');
                    btn.innerText = originalText;
                    btn.disabled = false;
                    leadForm.reset();
                }, 1500);
            });
        }
    });
    </script>
    <?php
}
add_action( 'wp_footer', 'digi_custom_footer_scripts' );

/**
 * Fallback function for menu
 */
function digi_fallback_menu() {
    ?>
    <ul id="primary-menu">
        <li><a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>">Services</a></li>
        <li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a></li>
        <li><a href="<?php echo esc_url( home_url( '/testimonials/' ) ); ?>">Testimonials</a></li>
        <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a></li>
        <li><a href="<?php echo esc_url( home_url( '/free-tools/' ) ); ?>">Free Tools</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
    </ul>
    <?php
}
