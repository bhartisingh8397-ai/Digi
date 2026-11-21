<footer class="site-footer">
	<div class="container">
		<div class="footer-top">
			<div class="footer-widget">
				<div class="footer-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<div class="logo-square">
							<span class="logo-digi">DIGI</span><span class="logo-gyapan">GYAPAN</span>
						</div>
					</a>
				</div>
				<p>Where Ideas Ignite! We are your dedicated digital allies, turning aspirations into growth and performance success stories with dynamic online strategies.</p>
				<div class="footer-social">
					<a href="https://www.facebook.com/Digigyapan" target="_blank" rel="noopener" class="footer-social-link" title="Facebook">
						<svg viewBox="0 0 24 24"><path d="M9 8H7v3h2v9h4v-9h3.6l.4-3H13V6c0-.5.5-1 1-1h2V2h-3a4 4 0 00-4 4v2z"/></svg>
					</a>
					<a href="https://www.instagram.com/digigyapan/" target="_blank" rel="noopener" class="footer-social-link" title="Instagram">
						<svg viewBox="0 0 24 24"><path d="M12 2.182c3.196 0 3.574.012 4.837.07 3.585.163 5.56 2.138 5.724 5.724.057 1.263.069 1.64.069 4.837 0 3.196-.012 3.574-.07 4.837-.163 3.585-2.138 5.56-5.724 5.724-1.263.057-1.64.069-4.837.069-3.196 0-3.574-.012-4.837-.07-3.585-.163-5.56-2.138-5.724-5.724-.057-1.263-.069-1.64-.069-4.837 0-3.196.012-3.574.07-4.837.163-3.585 2.138-5.56 5.724-5.724 1.263-.057 1.64-.069 4.837-.069zm0-2.182c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
					</a>
					<a href="https://www.linkedin.com/company/101177211/" target="_blank" rel="noopener" class="footer-social-link" title="LinkedIn">
						<svg viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
					</a>
					<a href="https://x.com/DigiGyapan" target="_blank" rel="noopener" class="footer-social-link" title="X (Twitter)">
						<svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
					</a>
				</div>
			</div>

			<div class="footer-widget">
				<h4>Links</h4>
				<?php
				if ( has_nav_menu( 'menu-footer' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'menu-footer',
							'menu_class'     => 'footer-links',
							'container'      => false,
						)
					);
				} else {
					echo '<ul class="footer-links">';
					echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
					echo '<li><a href="' . esc_url( home_url( '/about-us/' ) ) . '">About Us</a></li>';
					echo '<li><a href="' . esc_url( home_url( '/our-services/' ) ) . '">Services</a></li>';
					echo '<li><a href="' . esc_url( home_url( '/testimonials/' ) ) . '">Testimonials</a></li>';
					echo '<li><a href="' . esc_url( home_url( '/blog-of-digigyapan/' ) ) . '">Blog</a></li>';
					echo '<li><a href="' . esc_url( home_url( '/free-tools/' ) ) . '">Free Tools</a></li>';
					echo '<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">Contact</a></li>';
					echo '</ul>';
				}
				?>
			</div>

			<div class="footer-widget">
				<h4>SEO Keywords</h4>
				<div class="seo-terms-container">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="seo-term-badge">Digital Marketing Agency in Sonipat</a>
					<a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="seo-term-badge">SEO Services Sonipat</a>
					<a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="seo-term-badge">Social Media Marketing Sonipat</a>
					<a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="seo-term-badge">Online Advertising Sonipat</a>
					<a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="seo-term-badge">Content Marketing Sonipat</a>
					<a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="seo-term-badge">Email Marketing Sonipat</a>
					<a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="seo-term-badge">Web Design Sonipat</a>
					<a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="seo-term-badge">Search Engine Optimization Sonipat</a>
					<a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="seo-term-badge">Local SEO Sonipat</a>
					<a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="seo-term-badge">Digital Marketing Company Sonipat</a>
					<a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="seo-term-badge">Internet Marketing Sonipat</a>
					<a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="seo-term-badge">PPC Management Sonipat</a>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<p>&copy; <?php echo date( 'Y' ); ?> Digigyapan. All Rights Reserved.</p>
			<p>
				<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a> | 
				<a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms & Conditions</a>
			</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
