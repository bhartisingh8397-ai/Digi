<?php
/**
 * Template Name: Testimonials
 *
 * @package Digi
 */

get_header(); ?>

<main id="primary" class="site-main">

    <!-- Testimonials Header -->
    <header class="page-header section-padding bg-light">
        <div class="container hero-grid">
            <div class="hero-content reveal">
                <span class="subtitle">Client Success</span>
                <h1 class="page-title text-gradient">Voices of Performance</h1>
                <p>See how we've helped 500+ global brands scale their revenue through ROI-focused marketing strategies.</p>
            </div>
            <div class="hero-image reveal" style="text-align: center;">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1470&auto=format&fit=crop" alt="Global Success" class="main-hero-img" style="width: 50%; max-width: 450px;">
            </div>
        </div>
    </header>

    <!-- Testimonials List -->
    <section class="testimonials section-padding">
        <div class="container grid-2">
            <div class="testimonial-card reveal" style="padding: 4rem; border: 1px solid var(--border);">
                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p style="font-size: 1.3rem; line-height: 1.6; margin: 2rem 0;">"Digigyapan transformed our digital presence. Within 3 months, our organic traffic tripled, and our cost per lead dropped significantly. Highly recommended!"</p>
                <div class="client" style="display: flex; gap: 1rem; align-items: center;">
                    <img src="https://i.pravatar.cc/100?u=a" alt="Sarah Johnson" style="width: 50px; height: 50px; border-radius: 50%; filter: grayscale(1);">
                    <div class="client-info">
                        <strong>Sarah Johnson</strong><br>
                        <span style="font-size: 0.8rem; color: var(--text-muted);">CEO, TechFlow SaaS</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card reveal" style="padding: 4rem; border: 1px solid var(--border);">
                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p style="font-size: 1.3rem; line-height: 1.6; margin: 2rem 0;">"The team is incredibly data-driven. They don't just report numbers; they provide strategic insights that help us grow our business. True partners."</p>
                <div class="client" style="display: flex; gap: 1rem; align-items: center;">
                    <img src="https://i.pravatar.cc/100?u=b" alt="Michael Chen" style="width: 50px; height: 50px; border-radius: 50%; filter: grayscale(1);">
                    <div class="client-info">
                        <strong>Michael Chen</strong><br>
                        <span style="font-size: 0.8rem; color: var(--text-muted);">Marketing Director, Urban Styles</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
