<?php
/**
 * Template Name: About Us
 *
 * @package Digi
 */

get_header(); ?>

<main id="primary" class="site-main">

    <!-- About Hero -->
    <header class="page-header section-padding">
        <div class="container hero-grid">
            <div class="hero-content reveal">
                <span class="subtitle">Who We Are</span>
                <h1 class="page-title text-gradient">Scaling Brands Through Data-Driven Innovation.</h1>
                <p>Digigypan is a premier digital marketing agency dedicated to scaling brands through data-driven innovation and cutting-edge performance marketing.</p>
            </div>
            <div class="hero-image reveal">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1470&auto=format&fit=crop" alt="Our Team" class="main-hero-img">
            </div>
        </div>
    </header>

    <!-- Mission Section -->
    <section class="mission section-padding bg-light">
        <div class="container grid-2" style="align-items: center;">
            <div class="mission-text reveal">
                <h2>Our Mission</h2>
                <p>We believe in results over fluff. Our goal is to help businesses transition from traditional marketing to data-centric growth engines that deliver measurable ROI.</p>
                <div class="stat-box" style="margin-top: 4rem;">
                    <span style="font-size: 4rem; font-weight: 800; display: block;">2018</span>
                    <p style="text-transform: uppercase; letter-spacing: 2px; font-weight: 700; color: #000;">Established</p>
                </div>
            </div>
            <div class="mission-image reveal">
                <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&w=1474&auto=format&fit=crop" alt="Collaborative Strategy" class="main-hero-img">
            </div>
        </div>
    </section>

    <!-- Team Section Reused -->
    <?php get_template_part( 'template-parts/section', 'team' ); ?>

</main>

<?php get_footer(); ?>
