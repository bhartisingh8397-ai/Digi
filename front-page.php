<?php
/**
 * The front page template file
 *
 * @package Digi
 */

get_header();
?>

<<!-- Hero Section -->
<section class="section hero hero-bg-home">
	<div class="hero-overlay"></div>
	<div class="container">
		<div class="hero-content">
			<div class="hero-subtitle">Premium Digital Agency</div>
			<h1 class="hero-title">
				<span>Digital Marketing</span>
				<span>without borders.</span>
			</h1>
			<p class="hero-description">Amplify your business with our data-centric, performance-driven digital marketing solutions.</p>
			<div class="hero-actions">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Get A Proposal</a>
				<a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="btn btn-secondary">Explore Capabilities</a>
			</div>
		</div>
	</div>
</section>

<!-- About Pitch Section -->
<section class="section">
	<div class="container">
		<div class="grid-2" style="align-items: center;">
			<div>
				<div class="about-image-frame">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/about-story.jpg' ); ?>" alt="DigiGyapan Team Strategy">
				</div>
			</div>
			<div>
				<div class="hero-subtitle" style="margin-bottom: 1rem; color: var(--text-gray); background: transparent; border-left: none; padding: 0;">Our Story</div>
				<h2 class="hero-title" style="margin: 0 0 1.5rem 0; line-height: 1.15; color: var(--text-white) !important; text-shadow: none;">Your Online Presence with Innovative Solutions</h2>
				<p>Based in the vibrant city of Sonipat, Haryana, our passion lies in turning digital aspirations into tangible success stories. Specializing in a spectrum of services, from Social Media Marketing and LinkedIn Optimization to Google Services and Website Designing, we craft bespoke strategies that resonate with your unique brand identity.</p>
				<p>At Digigyapan, we understand the pulse of the online world and leverage cutting-edge technologies to propel your business forward. Whether you seek to captivate your audience on social media, enhance your professional presence on LinkedIn, harness the power of Google’s suite of services, or create a visually stunning and user-friendly website, we are your dedicated partners on this transformative journey. Elevate your online presence with Digigyapan’s innovative solutions and let your digital dreams become a thriving reality.</p>
				<div style="margin-top: 2rem;">
					<a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="btn btn-secondary">Read Our Story</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Features / Ethos Section -->
<section class="section" style="background-color: var(--bg-card);">
	<div class="container">
		<div style="max-width: 700px; margin-bottom: 4rem;">
			<div class="hero-subtitle" style="color: var(--text-gray); background: transparent; border-left: none; padding: 0;">Why Choose Us</div>
			<h2>We solve digital marketing challenges</h2>
			<p>Welcome to Digi Gyapan – your trusted partner for all things digital marketing. At Digigyapan, we specialize in crafting tailored social media strategies that amplify your brand’s voice, engage your audience, and drive meaningful results. Our team of experts is dedicated to delivering innovative solutions and helping your brand shine in the digital world. Let’s make your brand the talk of the town!</p>
		</div>

		<div class="grid-3">
			<div class="card">
				<div class="card-num">01</div>
				<div class="card-icon">
					<svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
				</div>
				<h3 class="card-title">Swift Support</h3>
				<p>Digigyapan’s customer support operates at the speed of digital innovation. Swift and responsive, our team is committed to resolving queries and providing solutions promptly. We ensure a seamless experience that keeps pace with the fast-evolving needs of our clients.</p>
			</div>

			<div class="card">
				<div class="card-num">02</div>
				<div class="card-icon">
					<svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
				</div>
				<h3 class="card-title">Results Driven</h3>
				<p>Digigyapan thrives on a results-driven ethos, navigating the digital landscape with a strategic edge. Our innovative methodologies are tailored to propel businesses forward, ensuring tangible outcomes that resonate. We cultivate success stories by harnessing digital marketing to its fullest potential.</p>
			</div>

			<div class="card">
				<div class="card-num">03</div>
				<div class="card-icon">
					<svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"/><rect x="2" y="14" width="20" height="8" rx="2" ry="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg>
				</div>
				<h3 class="card-title">Affordable</h3>
				<p>Digigyapan pioneers affordable digital marketing solutions, tailored to elevate your brand without breaking the bank. Our commitment to cost-effectiveness doesn’t compromise quality. We empower businesses of all sizes to thrive in the digital realm with budget-friendly yet impactful services.</p>
			</div>
		</div>
	</div>
</section>

<!-- Capabilities Grid -->
<section class="section">
	<div class="container">
		<div class="section-header-flex">
			<div style="max-width: 600px;">
				<div class="hero-subtitle" style="color: var(--text-gray); background: transparent; border-left: none; padding: 0;">Our Capabilities</div>
				<h2>Services That Speak For Themselves!</h2>
			</div>
			<div>
				<a href="<?php echo esc_url( home_url( '/our-services/' ) ); ?>" class="btn btn-secondary">View all solutions</a>
			</div>
		</div>

		<div class="grid-2">
			<div class="card">
				<div class="card-img-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/service-smm.jpg' ); ?>" alt="Social Media Marketing">
				</div>
				<h3 class="card-title">Social Media Marketing</h3>
				<p>At Digigyapan, our social media marketing services redefine brand narratives in the digital realm. We curate dynamic strategies that resonate with audiences, fostering authentic connections. From compelling content creation to strategic campaign execution, we elevate your brand presence, driving engagement and success across diverse social platforms.</p>
			</div>

			<div class="card">
				<div class="card-img-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/service-linkedin.jpg' ); ?>" alt="LinkedIn Optimization">
				</div>
				<h3 class="card-title">LinkedIn Optimization</h3>
				<p>Elevate your professional presence with Digigyapan's LinkedIn Optimization Services. Our expert team tailors strategies to enhance your profile, emphasizing your unique strengths and achievements. We optimize keywords, craft summaries, and ensure a polished, standout LinkedIn presence that attracts opportunities.</p>
			</div>

			<div class="card">
				<div class="card-img-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/service-google.jpg' ); ?>" alt="Google Services">
				</div>
				<h3 class="card-title">Google Services</h3>
				<p>Digigyapan transforms businesses with a tailored suite of Google services, harnessing the power of GoogleMyBusiness, Youtube, etc. Our team strategically navigates the digital landscape, ensuring clients soar in search rankings, connect with their audience, and glean valuable insights for sustained growth.</p>
			</div>

			<div class="card">
				<div class="card-img-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/service-web.jpg' ); ?>" alt="Website Designing">
				</div>
				<h3 class="card-title">Website Designing</h3>
				<p>Digigyapan transforms visions into virtual realities with its cutting-edge website designing services. Elevate your online presence with user-friendly interfaces, captivating visuals, and responsive layouts with the website you always wanted to have for your brand.</p>
			</div>
		</div>
	</div>
</section>

<!-- Blogs & Latest News Section -->
<section class="section" style="background-color: var(--bg-card); border-bottom: none;">
	<div class="container">
		<div class="section-header-flex">
			<div style="max-width: 600px;">
				<div class="hero-subtitle" style="color: var(--text-gray); background: transparent; border-left: none; padding: 0;">Latest Updates</div>
				<h2>Blogs & Latest News</h2>
			</div>
			<div>
				<a href="<?php echo esc_url( home_url( '/blog-of-digigyapan/' ) ); ?>" class="btn btn-secondary">Read All Articles</a>
			</div>
		</div>

		<div class="blog-grid">
			<?php
			// Query standard WP posts first
			$blog_query = new WP_Query( array(
				'post_type'      => 'post',
				'posts_per_page' => 3,
			) );

			if ( $blog_query->have_posts() ) {
				$b_index = 1;
				while ( $blog_query->have_posts() ) {
					$blog_query->the_post();
					$thumb = get_template_directory_uri() . '/images/blog-' . $b_index . '.jpg';
					?>
					<div class="card blog-card">
						<img src="<?php echo esc_url( $thumb ); ?>" class="blog-card-img" alt="<?php the_title_attribute(); ?>">
						<div class="blog-meta">
							<span><?php echo get_the_date(); ?></span>
							<span>&bull;</span>
							<span>By <?php the_author(); ?></span>
						</div>
						<div class="blog-card-content">
							<h3 style="font-size: 1.35rem; margin-bottom: 1rem;"><?php the_title(); ?></h3>
							<p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
							<a href="<?php the_permalink(); ?>" class="read-more-link">Read More &rarr;</a>
						</div>
					</div>
					<?php
					$b_index++;
				}
				wp_reset_postdata();
			} else {
				// Fallback to scraped content from digigyapan.in
				$fallbacks = array(
					array(
						'img'     => get_template_directory_uri() . '/images/blog-1.jpg',
						'title'   => 'AI Marketing Services: The Future of Business Growth',
						'date'    => 'June 18, 2026',
						'excerpt' => 'In today’s highly competitive digital landscape, businesses need more than traditional marketing strategies to stay ahead. Consumers expect personalized experiences, instant responses, and highly relevant campaigns.'
					),
					array(
						'img'     => get_template_directory_uri() . '/images/blog-2.jpg',
						'title'   => 'Performance Marketing Agency: ROI-Driven Growth',
						'date'    => 'May 12, 2026',
						'excerpt' => 'Why Hiring a Performance Marketing Agency Is Essential for Business Growth. In today’s competitive digital landscape, businesses need more than basic traffic—they need conversions, leads, and sales.'
					),
					array(
						'img'     => get_template_directory_uri() . '/images/blog-3.jpg',
						'title'   => 'Online Reputation Management: Build Trust and Visibility',
						'date'    => 'April 20, 2026',
						'excerpt' => 'In today’s digital-first business environment, your online reputation directly influences customer trust, buying decisions, search visibility, and credibility online.'
					)
				);

				foreach ( $fallbacks as $post ) {
					?>
					<div class="card blog-card">
						<img src="<?php echo esc_url( $post['img'] ); ?>" class="blog-card-img" alt="<?php echo esc_attr( $post['title'] ); ?>">
						<div class="blog-meta">
							<span><?php echo esc_html( $post['date'] ); ?></span>
							<span>&bull;</span>
							<span>Agency News</span>
						</div>
						<div class="blog-card-content">
							<h3 style="font-size: 1.35rem; margin-bottom: 1rem;"><?php echo esc_html( $post['title'] ); ?></h3>
							<p><?php echo esc_html( $post['excerpt'] ); ?></p>
							<a href="<?php echo esc_url( home_url( '/blog-of-digigyapan/' ) ); ?>" class="read-more-link">Read More &rarr;</a>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</section>

<?php
get_footer();
?>
