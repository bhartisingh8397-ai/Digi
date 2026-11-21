<?php
/**
 * Template Name: Testimonials
 *
 * @package Digi
 */

get_header();
?>

<!-- Page Header -->
<section class="section hero hero-bg-testimonials">
	<div class="hero-overlay"></div>
	<div class="container">
		<div class="hero-content">
			<div class="hero-subtitle">Testimonials</div>
			<h1 class="hero-title" style="margin-bottom: 1.5rem;">Some Of Our Clients' Thoughts</h1>
			<p class="hero-description" style="max-width: 700px;">We take pride in building long-term partnerships with our clients, delivering value and measurable digital marketing solutions that scale businesses.</p>
		</div>
	</div>
</section>

<!-- Client Testimonials Grid -->
<section class="section">
	<div class="container">
		<div class="grid-3">
			<!-- Review 1 -->
			<div class="card blog-card">
				<div style="font-size: 1.25rem; margin-bottom: 1rem; color: #ffbe11;">★★★★★</div>
				<div class="blog-card-content">
					<p>"I appreciate the services they offered, really they are very dedicated to their work.. As my personal experience they completed my all the project on the promised timeline... And i wish that their business will spread all over the country."</p>
					<div class="testimonial-author-wrapper">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/images/avatar-1.jpg' ); ?>" class="testimonial-avatar" alt="Corporate Partner">
						<div class="text-muted" style="font-size: 0.9rem; font-weight: 600;">Corporate Partner</div>
					</div>
				</div>
			</div>

			<!-- Review 2 -->
			<div class="card blog-card">
				<div style="font-size: 1.25rem; margin-bottom: 1rem; color: #ffbe11;">★★★★★</div>
				<div class="blog-card-content">
					<p>"They are the best. Loved their services 😍. Would love to recommend others. Super professional and responsive communication."</p>
					<div class="testimonial-author-wrapper">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/images/avatar-2.jpg' ); ?>" class="testimonial-avatar" alt="Local E-Commerce Brand">
						<div class="text-muted" style="font-size: 0.9rem; font-weight: 600;">Local E-Commerce Brand</div>
					</div>
				</div>
			</div>

			<!-- Review 3 -->
			<div class="card blog-card">
				<div style="font-size: 1.25rem; margin-bottom: 1rem; color: #ffbe11;">★★★★★</div>
				<div class="blog-card-content">
					<p>"Very genuine and with good quality. I am sure you should try once. Highly recommendable 🔥. They exceeded my expectation for design work."</p>
					<div class="testimonial-author-wrapper">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/images/avatar-3.jpg' ); ?>" class="testimonial-avatar" alt="Anant Shukla">
						<div class="text-muted" style="font-size: 0.9rem; font-weight: 600;">Anant Shukla Mirzapuri</div>
					</div>
				</div>
			</div>

			<!-- Review 4 -->
			<div class="card blog-card">
				<div style="font-size: 1.25rem; margin-bottom: 1rem; color: #ffbe11;">★★★★★</div>
				<div class="blog-card-content">
					<p>"Best platform for getting best offers on digital promotional activities. The rates are very affordable and result orientation is clear."</p>
					<div class="testimonial-author-wrapper">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/images/avatar-1.jpg' ); ?>" class="testimonial-avatar" alt="Retail Merchant">
						<div class="text-muted" style="font-size: 0.9rem; font-weight: 600;">Retail Merchant</div>
					</div>
				</div>
			</div>

			<!-- Review 5 -->
			<div class="card blog-card">
				<div style="font-size: 1.25rem; margin-bottom: 1rem; color: #ffbe11;">★★★★★</div>
				<div class="blog-card-content">
					<p>"I have no objection in recommending others. They deliver exactly what is promised and maintain high standards of integrity."</p>
					<div class="testimonial-author-wrapper">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/images/avatar-2.jpg' ); ?>" class="testimonial-avatar" alt="Shailesh Kushwaha">
						<div class="text-muted" style="font-size: 0.9rem; font-weight: 600;">Shailesh Kushwaha</div>
					</div>
				</div>
			</div>

			<!-- Review 6 -->
			<div class="card blog-card">
				<div style="font-size: 1.25rem; margin-bottom: 1rem; color: #ffbe11;">★★★★★</div>
				<div class="blog-card-content">
					<p>"Excellent service, good behaviour. Works according to client requirements. Very flexible in adopting last minute changes."</p>
					<div class="testimonial-author-wrapper">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/images/avatar-3.jpg' ); ?>" class="testimonial-avatar" alt="Small Business Owner">
						<div class="text-muted" style="font-size: 0.9rem; font-weight: 600;">Small Business Owner</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Frequently Asked Questions Accordion -->
<section class="section" style="background-color: var(--bg-card); border-bottom: none;">
	<div class="container" style="max-width: 800px;">
		<div style="text-align: center; margin-bottom: 3rem;">
			<div class="hero-subtitle">Support Hub</div>
			<h2>Frequently Asked Questions</h2>
		</div>

		<div class="faq-accordion">
			<!-- FAQ 1 -->
			<div class="faq-item">
				<div class="faq-header" onclick="toggleFaq(this)">
					What can I expect after purchasing services of Digi Gyapan?
					<span class="faq-icon"></span>
				</div>
				<div class="faq-body">
					<p>Customers who purchase our services can expect significant improvements in their online presence and marketing efforts. They will experience increased social media engagement, a boost in brand awareness, a wider reach to potential customers, professionally designed content that reflects their brand identity, and effective strategies for leveraging local channels. Overall, our services are designed to help customers achieve their digital marketing goals and stand out in the competitive environment.</p>
				</div>
			</div>

			<!-- FAQ 2 -->
			<div class="faq-item">
				<div class="faq-header" onclick="toggleFaq(this)">
					How will it benefit me to choose Digi Gyapan?
					<span class="faq-icon"></span>
				</div>
				<div class="faq-body">
					<p>After utilizing these services, customers can expect countless benefits, including enhanced social media presence, increased brand visibility, improved engagement, larger audience reach, professionally designed content, viral marketing potential through memes, and effective LinkedIn and Google search engine visibility.</p>
				</div>
			</div>

			<!-- FAQ 3 -->
			<div class="faq-item">
				<div class="faq-header" onclick="toggleFaq(this)">
					What sets Digigyapan's services apart?
					<span class="faq-icon"></span>
				</div>
				<div class="faq-body">
					<p>Digigyapan’s services stand out through their fusion of creativity and functionality. We prioritize a collaborative approach, ensuring your unique brand identity is seamlessly integrated into a visually stunning and user-friendly online experience. We focus heavily on data and performance outcomes rather than vanity metrics.</p>
				</div>
			</div>

			<!-- FAQ 4 -->
			<div class="faq-item">
				<div class="faq-header" onclick="toggleFaq(this)">
					How involved can I be in my project?
					<span class="faq-icon"></span>
				</div>
				<div class="faq-body">
					<p>We encourage active involvement! Digigyapan believes in a collaborative partnership. Throughout the process, you’ll have dedicated consultations to provide input, share ideas, and ensure the final product aligns perfectly with your vision and business goals.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
function toggleFaq(element) {
	const item = element.parentElement;
	const isActive = item.classList.contains('active');
	
	// Close all items
	document.querySelectorAll('.faq-item').forEach(faq => {
		faq.classList.remove('active');
	});
	
	// Open clicked item if it was closed
	if (!isActive) {
		item.classList.add('active');
	}
}
</script>

<?php
get_footer();
?>
