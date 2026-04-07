<?php
/**
 * Template Name: Contact
 *
 * @package Digi
 */

get_header(); ?>

<main id="primary" class="site-main">

    <!-- Contact Header -->
    <header class="page-header section-padding bg-light">
        <div class="container hero-grid">
            <div class="contact-info reveal">
                <span class="subtitle">Get In Touch</span>
                <h1 class="page-title text-gradient">Ready to Start Your <span class="text-gradient">Growth Journey?</span></h1>
                <p>Fill out the form and our growth experts will audit your current strategy within 24 hours. No strings attached.</p>
                <div class="contact-details" style="margin-top: 4rem;">
                    <div class="item" style="display: flex; gap: 2rem; margin-bottom: 3rem;">
                        <i class="fas fa-phone" style="border: 1px solid #000; padding: 1.5rem; display: flex; align-items: center; justify-content: center; width: 60px; height: 60px;"></i>
                        <div>
                            <strong style="text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem;">Call Us</strong>
                            <p style="font-size: 1.4rem; font-weight: 700;">+91 8053421431</p>
                        </div>
                    </div>
                    <div class="item" style="display: flex; gap: 2rem; margin-bottom: 3rem;">
                        <i class="fas fa-envelope" style="border: 1px solid #000; padding: 1.5rem; display: flex; align-items: center; justify-content: center; width: 60px; height: 60px;"></i>
                        <div>
                            <strong style="text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem;">Email</strong>
                            <p style="font-size: 1.4rem; font-weight: 700;">Himanshu@digigyapan.in</p>
                        </div>
                    </div>
                    <div class="item" style="display: flex; gap: 2rem;">
                        <i class="fas fa-map-marker-alt" style="border: 1px solid #000; padding: 1.5rem; display: flex; align-items: center; justify-content: center; width: 60px; height: 60px;"></i>
                        <div>
                            <strong style="text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem;">Office</strong>
                            <p style="font-size: 1.4rem; font-weight: 700;">Adarsh nagar, Sonipat, 131001</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form-card reveal">
                <form id="lead-form">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Work Email</label>
                        <input type="email" id="email" placeholder="john@company.com" required>
                    </div>
                    <div class="form-group">
                        <label for="service">Interested In</label>
                        <select id="service">
                            <option value="seo">SEO Optimization</option>
                            <option value="ads">Paid Ads (Google/Meta)</option>
                            <option value="content">Content Marketing</option>
                            <option value="full">Full Managed Services</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Goals</label>
                        <textarea id="message" rows="4" placeholder="Tell us what you want to achieve..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">Secure My Free Audit</button>
                </form>
            </div>
        </div>
    </header>

</main>

<?php get_footer(); ?>
