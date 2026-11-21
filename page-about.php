<?php
/**
 * Template Name: About Page
 *
 * @package Digi
 */

get_header();
?>

<!-- Page Header -->
<section class="section hero hero-bg-about">
	<div class="hero-overlay"></div>
	<div class="container">
		<div class="hero-content">
			<div class="hero-subtitle">Our Agency</div>
			<h1 class="hero-title" style="margin-bottom: 1.5rem;">Who We Are</h1>
			<p class="hero-description" style="max-width: 700px;">Digigyapan is not just a digital marketing agency; we are your digital allies on the path to online success. With a passion for innovation and a commitment to excellence, we’re here to transform your brand’s digital presence.</p>
		</div>
	</div>
</section>

<!-- Content Block -->
<section class="section">
	<div class="container">
		<div class="grid-2" style="align-items: center; margin-bottom: 4rem;">
			<div>
				<h2 style="line-height: 1.2;">We craft stories that resonate with the world.</h2>
				<p style="margin-top: 1.5rem;">We believe that every brand has a distinct narrative waiting to be shared, and we’re here to ensure it resonates with the world. Discover the difference of partnering with Digi Gyapan, where your success is our ultimate goal.</p>
				<p style="margin-top: 1rem;">At Digi Gyapan, we specialize in transforming online potential into tangible results. Our mission is to elevate your brand’s digital presence and engagement through data-driven campaigns.</p>
			</div>
			<div>
				<div class="about-image-frame">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/about-story.jpg' ); ?>" alt="DigiGyapan Team Strategy Studio">
				</div>
			</div>
		</div>

		<div class="grid-2">
			<div>
				<h3 style="margin-bottom: 1rem;">What We Do</h3>
				<p>From designing content and managing social media platforms to designing strategic advertising campaigns, we are your one-stop solution for all things digital growth.</p>
			</div>
			<div>
				<h3 style="margin-bottom: 1rem;">Why It Works</h3>
				<p>Our dedicated team of experts stays on the cutting edge of social media trends to ensure your brand’s message reaches the right audience at the right time.</p>
			</div>
		</div>

		<!-- Stat Badges -->
		<div class="stat-container">
			<div class="stat-item">
				<div class="stat-number">150+</div>
				<div class="stat-label">Projects Completed</div>
			</div>
			<div class="stat-item">
				<div class="stat-number">99%</div>
				<div class="stat-label">Client Satisfaction</div>
			</div>
			<div class="stat-item">
				<div class="stat-number">50M+</div>
				<div class="stat-label">Impressions Generated</div>
			</div>
			<div class="stat-item">
				<div class="stat-number">4+</div>
				<div class="stat-label">Years Experience</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>
