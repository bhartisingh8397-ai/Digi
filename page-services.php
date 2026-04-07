<?php
/**
 * Template Name: Our Services
 *
 * @package Digi
 */

get_header(); ?>

<main id="primary" class="site-main">

    <!-- Services Header -->
    <header class="page-header section-padding bg-light">
        <div class="container hero-grid">
            <div class="hero-content reveal">
                <span class="subtitle">What We Excel At</span>
                <h1 class="page-title text-gradient">Comprehensive Marketing Solutions</h1>
                <p>Tailored strategies that align with your business goals and drive measurable results. From SEO to High-Performance Ads.</p>
                <div class="hero-btns" style="margin-top: 3rem;">
                    <a href="#contact" class="btn btn-primary">Book an Audit</a>
                </div>
            </div>
            <div class="hero-image reveal" style="text-align: center;">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1415&auto=format&fit=crop" alt="Marketing Strategy Visual" class="main-hero-img" style="width: 30%; max-width: 350px;">
            </div>
        </div>
    </header>

    <!-- Services Grid -->
    <section class="services section-padding">
        <div class="container grid-3 reveal">
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-search-dollar"></i></div>
                <h3>SEO Optimization</h3>
                <p>Dominate search rankings and drive organic traffic through technical SEO and high-intent content.</p>
                <ul style="list-style: none; color: var(--text-muted); font-size: 0.9rem; margin-top: 2rem;">
                    <li><i class="fas fa-check" style="margin-right: 10px;"></i> Technical Audit</li>
                    <li><i class="fas fa-check" style="margin-right: 10px;"></i> Keyword Strategy</li>
                    <li><i class="fas fa-check" style="margin-right: 10px;"></i> On-Page Optimization</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-bullhorn"></i></div>
                <h3>Social Media Ads</h3>
                <p>Precision targeting on Meta, LinkedIn, and TikTok to reach your ideal audience where they spend time.</p>
                <ul style="list-style: none; color: var(--text-muted); font-size: 0.9rem; margin-top: 2rem;">
                    <li><i class="fas fa-check" style="margin-right: 10px;"></i> Meta Ads (FB/IG)</li>
                    <li><i class="fas fa-check" style="margin-right: 10px;"></i> LinkedIn Ads</li>
                    <li><i class="fas fa-check" style="margin-right: 10px;"></i> Creative Production</li>
                </ul>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-chart-pie"></i></div>
                <h3>PPC & SEM</h3>
                <p>Maximize ROI with data-driven Google Ads campaigns that convert high-intent searches into sales.</p>
                <ul style="list-style: none; color: var(--text-muted); font-size: 0.9rem; margin-top: 2rem;">
                    <li><i class="fas fa-check" style="margin-right: 10px;"></i> Google Search Ads</li>
                    <li><i class="fas fa-check" style="margin-right: 10px;"></i> Display Marketing</li>
                    <li><i class="fas fa-check" style="margin-right: 10px;"></i> Shopping Campaigns</li>
                </ul>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
