<?php
/**
 * Template Name: Contact Us
 *
 * @package Digi
 */

get_header();
?>

<!-- Page Header -->
<section class="section hero hero-bg-contact">
	<div class="hero-overlay"></div>
	<div class="container">
		<div class="hero-content">
			<div class="hero-subtitle">Get in Touch</div>
			<h1 class="hero-title" style="margin-bottom: 1.5rem;">Let's Ignite Your Ideas</h1>
			<p class="hero-description" style="max-width: 700px;">Feel free to reach out to us through your preferred method of contact. We are eager to connect with you and explore how our digital marketing team can contribute to your success.</p>
		</div>
	</div>
</section>

<!-- Contact Form & Info -->
<section class="section">
	<div class="container">
		<div class="contact-wrapper">
			<!-- Info cards -->
			<div class="contact-info-list">
				<div class="card">
					<div class="contact-info-item">
						<div class="contact-info-icon">
							<svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
						</div>
						<div class="contact-info-details">
							<h4>Email Address</h4>
							<p><a href="mailto:info@digigyapan.com">info@digigyapan.com</a></p>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="contact-info-item">
						<div class="contact-info-icon">
							<svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
						</div>
						<div class="contact-info-details">
							<h4>Phone Number</h4>
							<p><a href="tel:+918053421431">+91 80534 21431</a></p>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="contact-info-item">
						<div class="contact-info-icon">
							<svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
						</div>
						<div class="contact-info-details">
							<h4>Our Agency Location</h4>
							<p>Adarsh Nagar, Sonipat, Haryana, India - 131001</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Interactive Form -->
			<div class="card glass">
				<h3 style="margin-bottom: 2rem;">Request a Consultation</h3>
				
				<form id="contact-form" onsubmit="handleContactSubmit(event)">
					<div class="grid-2" style="gap: 1.5rem;">
						<div class="form-group">
							<label for="contact-name">Your Name *</label>
							<input type="text" id="contact-name" class="form-control" required placeholder="e.g., Anant Shukla">
						</div>
						<div class="form-group">
							<label for="contact-email">Email Address *</label>
							<input type="email" id="contact-email" class="form-control" required placeholder="e.g., name@company.com">
						</div>
					</div>

					<div class="grid-2" style="gap: 1.5rem;">
						<div class="form-group">
							<label for="contact-phone">Phone Number</label>
							<input type="tel" id="contact-phone" class="form-control" placeholder="e.g., +91 99999 99999">
						</div>
						<div class="form-group">
							<label for="contact-company">Company Name</label>
							<input type="text" id="contact-company" class="form-control" placeholder="e.g., DigiGyapan Inc.">
						</div>
					</div>

					<div class="form-group">
						<label for="contact-msg">Tell us about your requirements *</label>
						<textarea id="contact-msg" class="form-control" required placeholder="Describe your project, budget, timelines..."></textarea>
					</div>

					<button type="submit" class="btn btn-primary" style="width: 100%;">Submit Inquiry</button>
				</form>
			</div>
		</div>

		<!-- Grayscale Embedded Map -->
		<div class="map-container">
			<iframe src="https://maps.google.com/maps?q=Sonipat,%20Haryana,%20India&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
</section>

<!-- Success Popup Modal -->
<div class="modal" id="contact-success-modal">
	<div class="modal-backdrop" onclick="closeContactModal()"></div>
	<div class="modal-content" style="text-align: center;">
		<span class="modal-close" onclick="closeContactModal()">&times;</span>
		<div class="card-icon" style="margin: 0 auto 1.5rem auto; background-color: var(--text-white);">
			<svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="stroke: var(--bg-dark);"><polyline points="20 6 9 17 4 12"/></svg>
		</div>
		<h2>Inquiry Received!</h2>
		<p style="margin: 1rem 0 2rem 0; color: var(--text-gray);">Thank you for contacting Digigyapan. Our digital marketing team will analyze your requirements and get back to you within 24 business hours.</p>
		<button class="btn btn-primary" onclick="closeContactModal()" style="width: 100%;">Return to Site</button>
	</div>
</div>

<script>
function handleContactSubmit(event) {
	event.preventDefault();
	
	// Basic field values
	const name = document.getElementById('contact-name').value.trim();
	const email = document.getElementById('contact-email').value.trim();
	const msg = document.getElementById('contact-msg').value.trim();

	if (!name || !email || !msg) {
		alert('Please fill out all required fields.');
		return;
	}

	// Dynamic validation check
	const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	if (!emailRegex.test(email)) {
		alert('Please enter a valid email address.');
		return;
	}

	// Trigger simulated submit success popup modal
	const modal = document.getElementById('contact-success-modal');
	if (modal) {
		modal.classList.add('active');
		document.body.style.overflow = 'hidden';
	}
}

function closeContactModal() {
	const modal = document.getElementById('contact-success-modal');
	if (modal) {
		modal.classList.remove('active');
		document.body.style.overflow = '';
	}
	// Reset form
	document.getElementById('contact-form').reset();
}
</script>

<?php
get_footer();
?>
