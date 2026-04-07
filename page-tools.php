<?php
/**
 * Template Name: Free Tools
 *
 * @package Digi
 */

get_header(); ?>

<main id="primary" class="site-main">

    <!-- Tools Header -->
    <header class="page-header section-padding bg-light">
        <div class="container hero-grid">
            <div class="hero-content reveal">
                <span class="subtitle">Growth Resources</span>
                <h1 class="page-title text-gradient">Free Marketing & Growth Tools</h1>
                <p>Unlock our proprietary frameworks and calculators to help you scale your brand profitably.</p>
            </div>
            <div class="hero-image reveal" style="text-align: center;">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1415&auto=format&fit=crop" alt="Digital Toolkit" class="main-hero-img" style="width: 50%; max-width: 450px;">
            </div>
        </div>
    </header>

    <!-- Tools Grid -->
    <section id="free-tools" class="free-tools section-padding">
        <div class="container grid-3 reveal">
            <div class="tool-card reveal" style="padding: 4rem; border: 1px solid var(--border);">
                <div class="tool-icon" style="font-size: 3rem; margin-bottom: 2rem;"><i class="fas fa-calculator"></i></div>
                <h3 style="font-size: 1.8rem; margin-bottom: 1.5rem;">ROI Calculator</h3>
                <p style="color: var(--text-muted); margin-bottom: 2rem;">Calculate your return on ad spend (ROAS) and project growth with our data-driven model.</p>
                <a href="#" class="btn btn-secondary btn-full">Use Tool <i class="fas fa-arrow-right" style="margin-left: 10px;"></i></a>
            </div>
            <div class="tool-card reveal" style="padding: 4rem; border: 1px solid var(--border);">
                <div class="tool-icon" style="font-size: 3rem; margin-bottom: 2rem;"><i class="fas fa-search-plus"></i></div>
                <h3 style="font-size: 1.8rem; margin-bottom: 1.5rem;">SEO Health Check</h3>
                <p style="color: var(--text-muted); margin-bottom: 2rem;">Get an instant audit of your site's SEO technical health and discover hidden opportunities.</p>
                <a href="#" class="btn btn-secondary btn-full">Run Audit <i class="fas fa-arrow-right" style="margin-left: 10px;"></i></a>
            </div>
            <div class="tool-card reveal" style="padding: 4rem; border: 5px solid #000; position: relative;">
                <span class="best">Most Popular</span>
                <div class="tool-icon" style="font-size: 3rem; margin-bottom: 2rem; color: #000;"><i class="fas fa-ad"></i></div>
                <h3 style="font-size: 1.8rem; margin-bottom: 1.5rem;">Meta Ads Auditor</h3>
                <p style="color: var(--text-muted); margin-bottom: 2rem;">Analyze your Meta ad creative performance and get strategic optimization tips.</p>
                <a href="#" class="btn btn-primary btn-full">Analyze Now <i class="fas fa-arrow-right" style="margin-left: 10px;"></i></a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
