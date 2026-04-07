<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package Digi
 */

get_header(); ?>

<main id="primary" class="site-main">

<?php if ( is_front_page() ) : ?>

    <!-- Hero Section -->
    <header class="hero">
        <div class="container hero-grid">
            <div class="hero-content reveal">
                <span class="badge">Bangalore's #1 Digital Growth Partner</span>
                <h1>Turning Businesses Into <span class="text-gradient">Digital</span> Powerhouses.</h1>
                <p>Data-led strategies. Brand-defining campaigns. Revenue that actually moves. Digigyapan turns Bangalore businesses into market leaders — from startups to giants.</p>
                <div class="hero-btns">
                    <a href="#leads" class="btn btn-primary btn-lg">Get Free Consultation</a>
                    <a href="#services" class="btn btn-secondary btn-lg">Our Services</a>
                </div>
                <div class="trust-indicator">
                    <div class="trust-text">
                        <i class="fas fa-check-circle" style="color: var(--secondary);"></i> Trusted by 500+ businesses in India
                    </div>
                </div>
            </div>
            <div class="hero-image-wrap reveal">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1000&auto=format&fit=crop" alt="Digital Growth" class="hero-main-img">
                <div class="floating-card stat-card-1">
                    <span class="big-num">165+</span>
                    <span class="label">Projects Done</span>
                </div>
                <div class="floating-card stat-card-2">
                    <span class="big-num">4.9/5</span>
                    <span class="label">Client Rating</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Stats Bar -->
    <section class="stats-bar">
        <div class="container stats-grid reveal">
            <div class="stat-item">
                <span class="num text-gradient">165+</span>
                <span class="label">Completed Projects</span>
            </div>
            <div class="stat-item">
                <span class="num text-gradient">200+</span>
                <span class="label">Regular Clients</span>
            </div>
            <div class="stat-item">
                <span class="num text-gradient">3+</span>
                <span class="label">Years Experience</span>
            </div>
            <div class="stat-item">
                <span class="num text-gradient">4.9</span>
                <span class="label">Weekly Review</span>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services section-padding">
        <div class="container section-header reveal">
            <span class="badge">What we offer</span>
            <h2>Where Strategy Meets <span class="text-gradient">Digital Success</span></h2>
            <p>A comprehensive approach to digital dominance, from technical infrastructure to multi-channel execution.</p>
        </div>
        <div class="container services-grid">
            <div class="service-card reveal">
                <div class="service-icon"><i class="fab fa-instagram"></i></div>
                <h3>Social Media Marketing</h3>
                <p>Strategic management of social platforms to drive engagement and brand loyalty.</p>
                <a href="#" class="service-link">View Details <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card reveal">
                <div class="service-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Performance Marketing</h3>
                <p>Data-driven campaigns focused on high ROI and measurable business growth.</p>
                <a href="#" class="service-link">View Details <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card reveal">
                <div class="service-icon"><i class="fas fa-search"></i></div>
                <h3>SEO & Content Strategy</h3>
                <p>Improving search rankings and capturing high-intent traffic through authority building.</p>
                <a href="#" class="service-link">View Details <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card reveal">
                <div class="service-icon"><i class="fab fa-whatsapp"></i></div>
                <h3>WhatsApp Marketing</h3>
                <p>Direct communication strategies to increase conversions and customer retention.</p>
                <a href="#" class="service-link">View Details <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card reveal">
                <div class="service-icon"><i class="fas fa-shield-alt"></i></div>
                <h3>Online Presence Audit</h3>
                <p>Comprehensive analysis of your current digital standing with actionable insights.</p>
                <a href="#" class="service-link">View Details <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card reveal">
                <div class="service-icon"><i class="fas fa-envelope"></i></div>
                <h3>Email Marketing</h3>
                <p>Automated funnel strategies that turn subscribers into lifelong customers.</p>
                <a href="#" class="service-link">View Details <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Why Us / About -->
    <section class="about section-padding" style="background: var(--bg-darker);">
        <div class="container hero-grid">
            <div class="hero-image reveal" style="text-align: center;">
                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=1000&auto=format&fit=crop" alt="Strategy" style="width: 30%; max-width: 350px; border-radius: var(--radius-md);">
            </div>
            <div class="hero-content reveal">
                <span class="badge">Why Us</span>
                <h2>Exploring Digital Frontiers with <span class="text-gradient">Digigyapan</span></h2>
                <p>We don't just run ads. We build growth engines. Our approach combines mathematical precision with creative brilliance to ensure you stay ahead of the competition.</p>
                <ul style="list-style: none; margin-top: 3rem;">
                    <li style="margin-bottom: 2rem; display: flex; gap: 1.5rem;">
                        <i class="fas fa-brain" style="color: var(--primary); font-size: 1.5rem;"></i>
                        <div>
                            <strong>Strategy over Research</strong>
                            <p style="font-size: 1rem; margin-top: 0.5rem;">We focus on executable strategies that deliver results, not just thick reports.</p>
                        </div>
                    </li>
                    <li style="margin-bottom: 2rem; display: flex; gap: 1.5rem;">
                        <i class="fas fa-database" style="color: var(--secondary); font-size: 1.5rem;"></i>
                        <div>
                            <strong>Data over Assumptions</strong>
                            <p style="font-size: 1rem; margin-top: 0.5rem;">Every decision is backed by cold hard data and performance metrics.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>



    <!-- Process Section -->
    <section class="process section-padding" style="background: var(--bg-darker);">
        <div class="container section-header reveal" style="text-align: center; margin: 0 auto 8rem;">
            <span class="badge">Our Process</span>
            <h2>How we build your <span class="text-gradient">Success</span></h2>
        </div>
        <div class="container process-steps reveal">
            <div class="step-card">
                <div class="step-num">1</div>
                <h3>Get Consultation</h3>
                <p>We start with a deep dive into your business goals and current bottlenecks.</p>
            </div>
            <div class="step-card">
                <div class="step-num">2</div>
                <h3>Execution</h3>
                <p>Our team builds and launches your custom high-performance campaigns.</p>
            </div>
            <div class="step-card">
                <div class="step-num">3</div>
                <h3>Refinement</h3>
                <p>Continuous A/B testing and scaling based on real-time feedback and data.</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq section-padding">
        <div class="container hero-grid">
            <div class="faq-content reveal">
                <span class="badge">FAQ</span>
                <h2>Still Have <span class="text-gradient">Qs?</span></h2>
                <p>Common questions about our partnership model and deliverables.</p>
            </div>
            <div class="faq-accordion reveal">
                <div class="faq-item" style="margin-bottom: 2rem; border: 1px solid var(--border); padding: 2rem; border-radius: var(--radius-sm);">
                    <h4 style="margin-bottom: 1rem;">Do you guarantee results?</h4>
                    <p style="color: var(--text-muted);">While no agency can guarantee ROI, we guarantee performance indicators that lead to ROI, backed by our 4.9 track record.</p>
                </div>
                <div class="faq-item" style="margin-bottom: 2rem; border: 1px solid var(--border); padding: 2rem; border-radius: var(--radius-sm);">
                    <h4 style="margin-bottom: 1rem;">What is the contract period?</h4>
                    <p style="color: var(--text-muted);">We typically work on a 3-month initial pilot to allow for proper data collection and optimization.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="leads" class="contact-section section-padding">
        <div class="container contact-grid reveal">
            <div class="contact-info">
                <span class="badge">Get in Touch</span>
                <h2>Ready to <span class="text-gradient">Start?</span></h2>
                <p>Fill out the form below for a 100% free digital audit of your business. No obligations.</p>
                <div style="margin-top: 4rem;">
                    <p style="font-size: 1.5rem; font-weight: 800;"><i class="fas fa-phone" style="color: var(--primary); margin-right: 1rem;"></i> +91 8053421431</p>
                    <p style="font-size: 1.5rem; font-weight: 800; margin-top: 1.5rem;"><i class="fas fa-envelope" style="color: var(--secondary); margin-right: 1rem;"></i> Himanshu@digigyapan.in</p>
                </div>
            </div>
            <div class="contact-form-wrap">
                <form id="digi-lead-form">
                    <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label>Business Email</label>
                        <input type="email" placeholder="john@company.com" required>
                    </div>
                    <div class="form-group">
                        <label>Service Interested</label>
                        <select name="service">
                            <option>Social Media Marketing</option>
                            <option>SEO Strategy</option>
                            <option>Performance Ads</option>
                            <option>Full Scale Plan</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">Send Request</button>
                </form>
            </div>
        </div>
    </section>

<?php else : ?>

    <div class="container section-padding">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card reveal'); ?> style="margin-bottom: 5rem;">
                    <div class="blog-image">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                            <img src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?q=80&w=1474&auto=format&fit=crop" alt="Blog post">
                        <?php endif; ?>
                    </div>
                    <header class="entry-header" style="padding: 3rem;">
                        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
                    </header>
                    <div class="entry-content" style="margin-top: 2rem;">
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn-link">Read More</a>
                    </div>
                </article>
                <?php
            endwhile;
            the_posts_navigation();
        else :
            ?>
            <section class="no-results not-found">
                <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'digi' ); ?></h1>
            </section>
        <?php endif; ?>
    </div>

<?php endif; ?>

</main><!-- #main -->

<?php get_footer(); ?>
