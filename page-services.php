<?php
/**
 * Template Name: Services Page
 *
 * @package Digi
 */

get_header();
?>

<!-- Page Header -->
<section class="section hero hero-bg-services">
	<div class="hero-overlay"></div>
	<div class="container">
		<div class="hero-content">
			<div class="hero-subtitle">Our Expertise</div>
			<h1 class="hero-title" style="margin-bottom: 1.5rem;">Leading the Industry &mdash;<br>Exceptional Services</h1>
			<p class="hero-description" style="max-width: 700px;">We engineer bespoke marketing channels and high-converting digital setups that align perfectly with your brand identity to grow and scale your online visibility.</p>
		</div>
	</div>
</section>

<!-- Services Grid -->
<section class="section">
	<div class="container">
		<div class="grid-2">
			<!-- Service 1 -->
			<div class="card" data-service="smm">
				<div class="card-img-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/service-smm.jpg' ); ?>" alt="Social Media Marketing">
				</div>
				<div class="card-num">01</div>
				<h3 class="card-title">Social Media Marketing</h3>
				<p>At Digigyapan, our social media marketing services redefine brand narratives in the digital realm. We curate dynamic strategies that resonate with audiences, fostering authentic connections. From compelling content creation to strategic campaign execution, we elevate your brand presence, driving engagement and success across diverse social platforms.</p>
				<span class="service-modal-btn" onclick="openModal('smm')">
					Learn More
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
				</span>
			</div>

			<!-- Service 2 -->
			<div class="card" data-service="linkedin">
				<div class="card-img-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/service-linkedin.jpg' ); ?>" alt="LinkedIn Optimization">
				</div>
				<div class="card-num">02</div>
				<h3 class="card-title">LinkedIn Optimization</h3>
				<p>Elevate your professional presence with Digigyapan's LinkedIn Optimization Services. Our expert team tailors strategies to enhance your profile, emphasizing your unique strengths and achievements. We optimize keywords, craft compelling summaries, and ensure a polished, standout LinkedIn presence that attracts opportunities and resonates with your target audience.</p>
				<span class="service-modal-btn" onclick="openModal('linkedin')">
					Learn More
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
				</span>
			</div>

			<!-- Service 3 -->
			<div class="card" data-service="google">
				<div class="card-img-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/service-google.jpg' ); ?>" alt="Google Services">
				</div>
				<div class="card-num">03</div>
				<h3 class="card-title">Google Services</h3>
				<p>Digigyapan transforms businesses with a tailored suite of Google services, harnessing the power of GoogleMyBusiness, Youtube, etc. Our team strategically navigates the digital landscape, ensuring clients soar in search rankings, connect with their audience, and glean valuable insights for sustained growth. Elevate your online presence with Digigyapan's expertise.</p>
				<span class="service-modal-btn" onclick="openModal('google')">
					Learn More
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
				</span>
			</div>

			<!-- Service 4 -->
			<div class="card" data-service="web">
				<div class="card-img-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/images/service-web.jpg' ); ?>" alt="Website Designing">
				</div>
				<div class="card-num">04</div>
				<h3 class="card-title">Website Designing</h3>
				<p>Digigyapan transforms visions into virtual realities with its cutting-edge website designing services. Elevate your online presence with user-friendly interfaces, captivating visuals, and responsive layouts with the website you always wanted to have for your brand. Digigyapan ensures your website becomes a compelling digital ambassador.</p>
				<span class="service-modal-btn" onclick="openModal('web')">
					Learn More
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
				</span>
			</div>
		</div>
	</div>
</section>

<!-- Modals -->
<div class="modal" id="smm-modal">
	<div class="modal-backdrop" onclick="closeModal('smm')"></div>
	<div class="modal-content">
		<span class="modal-close" onclick="closeModal('smm')">&times;</span>
		<div class="hero-subtitle">Capability 01</div>
		<h2 style="margin: 1rem 0;">Social Media Marketing</h2>
		<p>Our Social Media package goes beyond standard posting. We develop custom marketing strategies, curate visual design frameworks, write captions, run target research, and manage calendars for platforms including:</p>
		<ul style="list-style: none; margin: 1.5rem 0; display: flex; flex-direction: column; gap: 0.75rem;">
			<li style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-gray);">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
				Content Calendars & Copywriting
			</li>
			<li style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-gray);">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
				Dynamic Graphics & Story Designs
			</li>
			<li style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-gray);">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
				Platform Analytics & Growth Audits
			</li>
		</ul>
		<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="width: 100%;">Discuss Your Project</a>
	</div>
</div>

<div class="modal" id="linkedin-modal">
	<div class="modal-backdrop" onclick="closeModal('linkedin')"></div>
	<div class="modal-content">
		<span class="modal-close" onclick="closeModal('linkedin')">&times;</span>
		<div class="hero-subtitle">Capability 02</div>
		<h2 style="margin: 1rem 0;">LinkedIn Optimization</h2>
		<p>LinkedIn is the global hub for B2B authority building and lead generation. We build your profile into a client magnet by optimizing:</p>
		<ul style="list-style: none; margin: 1.5rem 0; display: flex; flex-direction: column; gap: 0.75rem;">
			<li style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-gray);">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
				Professional Headline & Bio Copy
			</li>
			<li style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-gray);">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
				B2B Connection Networking Funnels
			</li>
			<li style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-gray);">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
				Authority Post Templates & Publishing
			</li>
		</ul>
		<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="width: 100%;">Discuss Your Project</a>
	</div>
</div>

<div class="modal" id="google-modal">
	<div class="modal-backdrop" onclick="closeModal('google')"></div>
	<div class="modal-content">
		<span class="modal-close" onclick="closeModal('google')">&times;</span>
		<div class="hero-subtitle">Capability 03</div>
		<h2 style="margin: 1rem 0;">Google Services</h2>
		<p>Ensure customers find your business when searching locally. We manage and scale your visibility through optimized assets:</p>
		<ul style="list-style: none; margin: 1.5rem 0; display: flex; flex-direction: column; gap: 0.75rem;">
			<li style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-gray);">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
				Google Business Profile (GMB) Management
			</li>
			<li style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-gray);">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
				Local SEO & Maps Ranking Optimization
			</li>
			<li style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-gray);">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
				Google Reviews Strategy & Response Management
			</li>
		</ul>
		<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="width: 100%;">Discuss Your Project</a>
	</div>
</div>

<div class="modal" id="web-modal">
	<div class="modal-backdrop" onclick="closeModal('web')"></div>
	<div class="modal-content">
		<span class="modal-close" onclick="closeModal('web')">&times;</span>
		<div class="hero-subtitle">Capability 04</div>
		<h2 style="margin: 1rem 0;">Website Designing</h2>
		<p>A website should convert visitors into clients. We design speed-optimized, premium websites tailored to your product or company structure:</p>
		<ul style="list-style: none; margin: 1.5rem 0; display: flex; flex-direction: column; gap: 0.75rem;">
			<li style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-gray);">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
				Mobile-responsive & UI/UX centered design
			</li>
			<li style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-gray);">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
				Fast loading speeds & SEO indexing setup
			</li>
			<li style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-gray);">
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
				WordPress Custom Theme development
			</li>
		</ul>
		<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="width: 100%;">Discuss Your Project</a>
	</div>
</div>

<script>
function openModal(id) {
	const modal = document.getElementById(id + '-modal');
	if (modal) {
		modal.classList.add('active');
		document.body.style.overflow = 'hidden';
	}
}

function closeModal(id) {
	const modal = document.getElementById(id + '-modal');
	if (modal) {
		modal.classList.remove('active');
		document.body.style.overflow = '';
	}
}

// Close on escape key
document.addEventListener('keydown', (e) => {
	if (e.key === 'Escape') {
		document.querySelectorAll('.modal.active').forEach(modal => {
			const id = modal.id.replace('-modal', '');
			closeModal(id);
		});
	}
});
</script>

<?php
get_footer();
?>
