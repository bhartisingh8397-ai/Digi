    <!-- Footer -->
    <footer class="main-footer">
        <div class="container footer-grid">
            <div class="footer-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-wrap" style="margin-bottom: 2rem; display: flex;">
                    <div class="logo-main"><span class="box">DIGI</span><span class="text">GYAPAN</span></div>
                </a>
                <p>Turning businesses into digital powerhouses through data-led strategies and brand-defining campaigns. Based in Adarsh nagar, Sonipat, 131001.</p>
                <div class="social-links" style="display: flex; gap: 2rem;">
                    <a href="#" style="font-size: 1.5rem; color: #ffffff;"><i class="fab fa-facebook"></i></a>
                    <a href="#" style="font-size: 1.5rem; color: #ffffff;"><i class="fab fa-instagram"></i></a>
                    <a href="#" style="font-size: 1.5rem; color: #ffffff;"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h4>Services</h4>
                <ul>
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">Performance Ads</a></li>
                    <li><a href="#">SEO Strategy</a></li>
                    <li><a href="#">Email Marketing</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Case Studies</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Live Chat</a></li>
                    <li><a href="#">Documentation</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom container">
            <p>&copy; <?php echo date('Y'); ?> Digigyapan. All Rights Reserved.</p>
            <div class="legal-links">
                <a href="#">Privacy Policy</a>
                <span style="margin: 0 1rem;">|</span>
                <a href="#">Terms of Service</a>
            </div>
        </div>
    </footer>

    <!-- Sticky CTA -->
    <div id="sticky-cta" class="sticky-cta" style="position: fixed; bottom: 2.5rem; right: 2.5rem; background: var(--bg-card); backdrop-filter: blur(20px); padding: 1.5rem 2.5rem; display: flex; align-items: center; gap: 2rem; z-index: 1000; border-radius: 100px; box-shadow: 0 20px 50px rgba(0,0,0,0.1); border: 1px solid var(--border);">
        <p style="margin: 0; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px; color: var(--text-main);">Grow your business</p>
        <a href="#leads" class="btn btn-primary" style="padding: 1rem 2.5rem; font-size: 0.8rem;">Free Audit</a>
    </div>

<?php wp_footer(); ?>
</body>
</html>
