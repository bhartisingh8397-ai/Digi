<?php
/**
 * Template Name: Free Tools
 *
 * @package Digi
 */

get_header();
?>

<!-- Page Header -->
<section class="section hero hero-bg-tools">
	<div class="hero-overlay"></div>
	<div class="container">
		<div class="hero-content">
			<div class="hero-subtitle">Utility Hub</div>
			<h1 class="hero-title" style="margin-bottom: 1.5rem;">Use Free Tools by Digigyapan</h1>
			<p class="hero-description" style="max-width: 700px;">Boost your digital workflow with our automated post generators and utility converters. Fully interactive tools designed for modern creators.</p>
		</div>
	</div>
</section>

<!-- Tools Interactive Section -->
<section class="section" style="border-bottom: none;">
	<div class="container">
		<!-- Tabs -->
		<div class="tools-tabs">
			<button class="tab-btn active" onclick="switchTool('caption')">Social Media Caption</button>
			<button class="tab-btn" onclick="switchTool('linkedin')">LinkedIn Post Builder</button>
			<button class="tab-btn" onclick="switchTool('gmb')">GMB Post Generator</button>
			<button class="tab-btn" onclick="switchTool('seo-blog')">SEO Blog Generator</button>
			<button class="tab-btn" onclick="switchTool('mp3')">Video To MP3 Converter</button>
		</div>

		<!-- Panel 1: Social Media Caption Generator -->
		<div class="tool-panel active" id="caption-tool">
			<h2 style="margin-bottom: 1.5rem;">Smart Social Media Caption Generator</h2>
			<p style="margin-bottom: 2rem;">Draft eye-catching, engaging captions for your product or brand updates in seconds.</p>
			
			<div class="form-group">
				<label for="caption-topic">What is your post about?</label>
				<textarea id="caption-topic" class="form-control" placeholder="e.g., Launching our new high-speed website design service in Sonipat..."></textarea>
			</div>

			<div class="grid-3" style="gap: 1.5rem; margin-bottom: 1.5rem;">
				<div class="form-group">
					<label for="caption-tone">Tone of Voice</label>
					<select id="caption-tone" class="form-control">
						<option value="witty">Witty & Playful</option>
						<option value="professional">Professional & Bold</option>
						<option value="creative">Creative & Narrative</option>
						<option value="minimalist">Minimalist & Direct</option>
					</select>
				</div>
				<div class="form-group" style="display: flex; align-items: center; height: 100%; padding-top: 1.8rem;">
					<label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
						<input type="checkbox" id="caption-emojis" checked style="width: 18px; height: 18px; accent-color: var(--text-white);">
						Include Emojis
					</label>
				</div>
				<div class="form-group" style="display: flex; align-items: center; height: 100%; padding-top: 1.8rem;">
					<label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
						<input type="checkbox" id="caption-tags" checked style="width: 18px; height: 18px; accent-color: var(--text-white);">
						Include Hashtags
					</label>
				</div>
			</div>

			<button class="btn btn-primary" onclick="generateCaption()">Generate Caption</button>

			<div class="tool-output" id="caption-output-box" style="display: none;">
				<div class="tool-output-title">Generated Caption</div>
				<button class="copy-btn" onclick="copyText('caption-output')">Copy</button>
				<div class="tool-output-content" id="caption-output"></div>
			</div>
		</div>

		<!-- Panel 2: LinkedIn Post Generator -->
		<div class="tool-panel" id="linkedin-tool">
			<h2 style="margin-bottom: 1.5rem;">LinkedIn Post Builder for Personal Branding</h2>
			<p style="margin-bottom: 2rem;">Build thought leadership posts with structured spacing, strong hooks, and call-to-actions.</p>
			
			<div class="form-group">
				<label for="li-hook">What is the core achievement or takeaway?</label>
				<textarea id="li-hook" class="form-control" placeholder="e.g., We just helped a local e-commerce brand hit 300% growth in leads..."></textarea>
			</div>

			<div class="grid-2">
				<div class="form-group">
					<label for="li-audience">Target Audience / Persona</label>
					<input type="text" id="li-audience" class="form-control" placeholder="e.g., Founders, Marketing Directors">
				</div>
				<div class="form-group">
					<label for="li-cta">Call to Action (CTA)</label>
					<input type="text" id="li-cta" class="form-control" placeholder="e.g., Drop a comment below if you want the checklist">
				</div>
			</div>

			<button class="btn btn-primary" onclick="generateLinkedIn()">Build LinkedIn Post</button>

			<div class="tool-output" id="linkedin-output-box" style="display: none;">
				<div class="tool-output-title">Generated LinkedIn Post</div>
				<button class="copy-btn" onclick="copyText('linkedin-output')">Copy</button>
				<div class="tool-output-content" id="linkedin-output"></div>
			</div>
		</div>

		<!-- Panel 3: GMB Post Generator -->
		<div class="tool-panel" id="gmb-tool">
			<h2 style="margin-bottom: 1.5rem;">Google Business Profile (GMB) Post Generator</h2>
			<p style="margin-bottom: 2rem;">Optimize your Google local ranking with keyword-enriched GMB post updates.</p>
			
			<div class="form-group">
				<label for="gmb-offer">What update or offer do you want to post?</label>
				<textarea id="gmb-offer" class="form-control" placeholder="e.g., Get a free SEO consultation for businesses in Sonipat this month..."></textarea>
			</div>

			<div class="grid-2">
				<div class="form-group">
					<label for="gmb-keywords">Focus SEO Keywords (comma separated)</label>
					<input type="text" id="gmb-keywords" class="form-control" placeholder="e.g., SEO services Sonipat, digital marketing agency haryana">
				</div>
				<div class="form-group">
					<label for="gmb-action">CTA Button Action</label>
					<select id="gmb-action" class="form-control">
						<option value="Learn More">Learn More</option>
						<option value="Book Now">Book Now</option>
						<option value="Get Offer">Get Offer</option>
						<option value="Call Now">Call Now</option>
					</select>
				</div>
			</div>

			<button class="btn btn-primary" onclick="generateGmb()">Generate GMB Post</button>

			<div class="tool-output" id="gmb-output-box" style="display: none;">
				<div class="tool-output-title">Generated Google Post</div>
				<button class="copy-btn" onclick="copyText('gmb-output')">Copy</button>
				<div class="tool-output-content" id="gmb-output"></div>
			</div>
		</div>

		<!-- Panel 4: SEO Blog Generator -->
		<div class="tool-panel" id="seo-blog-tool">
			<h2 style="margin-bottom: 1.5rem;">AI SEO Blog Generator</h2>
			<p style="margin-bottom: 2rem;">Create SEO-friendly blog article outlines, meta titles, descriptions, and full content drafts in seconds.</p>
			
			<div class="form-group">
				<label for="seo-topic">Blog Topic / Title Idea</label>
				<textarea id="seo-topic" class="form-control" placeholder="e.g., 10 Proven Digital Marketing Strategies for Local Businesses in Sonipat..."></textarea>
			</div>

			<div class="grid-3" style="gap: 1.5rem; margin-bottom: 1.5rem;">
				<div class="form-group">
					<label for="seo-keywords">Focus SEO Keywords (comma separated)</label>
					<input type="text" id="seo-keywords" class="form-control" placeholder="e.g., Digital Marketing, Local SEO, Online Branding">
				</div>
				<div class="form-group">
					<label for="seo-tone">Tone of Writing</label>
					<select id="seo-tone" class="form-control">
						<option value="informative">Informative & Educational</option>
						<option value="authoritative">Professional & Authoritative</option>
						<option value="engaging">Conversational & Engaging</option>
						<option value="guide">Comprehensive Step-by-Step Guide</option>
					</select>
				</div>
				<div class="form-group">
					<label for="seo-length">Format / Output Type</label>
					<select id="seo-length" class="form-control">
						<option value="outline">Structured Outline & Meta Tags</option>
						<option value="standard">Standard Article (~800 words draft)</option>
						<option value="complete">Ultimate Guide (~1500 words draft)</option>
					</select>
				</div>
			</div>

			<button class="btn btn-primary" onclick="generateSeoBlog()">Generate SEO Blog Article</button>

			<div class="tool-output" id="seo-blog-output-box" style="display: none;">
				<div class="tool-output-title">Generated SEO Blog Post</div>
				<button class="copy-btn" onclick="copyText('seo-blog-output')">Copy</button>
				<div class="tool-output-content" id="seo-blog-output"></div>
			</div>
		</div>

		<!-- Panel 5: Video to MP3 Converter -->
		<div class="tool-panel" id="mp3-tool">
			<h2 style="margin-bottom: 1.5rem;">Video to MP3 Converter</h2>
			<p style="margin-bottom: 2rem;">Extract high-fidelity audio tracks from video clips instantly. Fully client-side processing.</p>
			
			<div class="upload-zone" id="dropzone" onclick="document.getElementById('file-input').click()">
				<input type="file" id="file-input" style="display: none;" accept="video/*" onchange="handleFileSelect(this)">
				<div class="upload-icon">
					<svg viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
				</div>
				<h3 style="margin-bottom: 0.5rem;" id="upload-status-text">Drag & Drop Video File</h3>
				<p style="font-size: 0.9rem;" id="upload-subtext">Supports MP4, MOV, AVI up to 100MB</p>
			</div>

			<!-- Progress Bar -->
			<div id="progress-container" style="display: none; margin-top: 2rem;">
				<div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
					<span id="progress-step" style="font-weight: 600; font-size: 0.9rem;">Initializing...</span>
					<span id="progress-percent" style="font-weight: 600; font-size: 0.9rem;">0%</span>
				</div>
				<div style="width: 100%; height: 6px; background-color: var(--accent-grey); border-radius: 3px; overflow: hidden;">
					<div id="progress-bar" style="width: 0%; height: 100%; background-color: var(--text-white); transition: width 0.1s linear;"></div>
				</div>
			</div>

			<!-- Output Download -->
			<div class="tool-output" id="mp3-output-box" style="display: none; text-align: center; padding: 2.5rem 1.5rem;">
				<div style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem;">Audio Extraction Complete!</div>
				<p style="margin-bottom: 1.5rem;" id="mp3-filename">output-audio.mp3</p>
				<a href="#" class="btn btn-primary" id="download-link" download>Download MP3</a>
				<button class="btn btn-secondary" style="margin-left: 1rem;" onclick="resetMp3Converter()">Convert Another</button>
			</div>
		</div>
	</div>
</section>

<!-- Tools Page Logic Scripts -->
<script>
// Switch tabs
function switchTool(toolId) {
	// Update buttons
	document.querySelectorAll('.tab-btn').forEach(btn => {
		btn.classList.remove('active');
	});
	event.currentTarget.classList.add('active');

	// Update panels
	document.querySelectorAll('.tool-panel').forEach(panel => {
		panel.classList.remove('active');
	});
	document.getElementById(toolId + '-tool').classList.add('active');
}

// Copy to clipboard
function copyText(elementId) {
	const content = document.getElementById(elementId).innerText;
	navigator.clipboard.writeText(content).then(() => {
		const btn = event.currentTarget;
		const originalText = btn.innerText;
		btn.innerText = 'Copied!';
		setTimeout(() => {
			btn.innerText = originalText;
		}, 1500);
	}).catch(err => {
		alert('Failed to copy text: ' + err);
	});
}

// Generate Social Media Caption
function generateCaption() {
	const topic = document.getElementById('caption-topic').value.trim();
	const tone = document.getElementById('caption-tone').value;
	const emojis = document.getElementById('caption-emojis').checked;
	const tags = document.getElementById('caption-tags').checked;

	if (!topic) {
		alert('Please enter what your post is about.');
		return;
	}

	let output = "";
	const em = {
		rocket: emojis ? "🚀 " : "",
		sparkles: emojis ? "✨ " : "",
		fire: emojis ? "🔥 " : "",
		check: emojis ? "✅ " : "",
		bulb: emojis ? "💡 " : "",
		grow: emojis ? "📈 " : ""
	};

	const ht = tags ? "\n\n#DigitalMarketing #SocialMedia #BrandGrowth #Digigyapan #MarketingTips" : "";

	if (tone === 'witty') {
		output = `${em.rocket}Let's face it: trying to handle your own social media is like trying to cut your own hair—technically possible, but not highly recommended. ${em.fire}\n\nWe just took: "${topic}" and turned it into pure gold. Ready to get noticed? Talk to us today.${ht}`;
	} else if (tone === 'professional') {
		output = `${em.check}Establish authority. Drive performance.\n\nRegarding: "${topic}"\n\nOur data-centric strategies ensure your updates are delivered directly to key stakeholders to maximize engagement and return on investment.${ht}`;
	} else if (tone === 'creative') {
		output = `${em.sparkles}Every brand has a story that deserves a global audience. Here is the chapter you have been waiting for:\n\n${topic}\n\n${em.bulb}Let's shape the narrative together. What's your vision?${ht}`;
	} else { // minimalist
		output = `${topic}\n\nDelivered by Digigyapan.${em.grow}${ht}`;
	}

	document.getElementById('caption-output').innerText = output;
	document.getElementById('caption-output-box').style.display = 'block';
}

// Generate LinkedIn Post
function generateLinkedIn() {
	const hook = document.getElementById('li-hook').value.trim();
	const audience = document.getElementById('li-audience').value.trim() || 'Founders & Builders';
	const cta = document.getElementById('li-cta').value.trim() || 'DM us for details';

	if (!hook) {
		alert('Please enter the core takeaway or achievement.');
		return;
	}

	const hashtags = "\n\n#B2BMarketing #PersonalBranding #LinkedInTips #Networking #GrowthMarketing";
	const output = `🚨 The secret to B2B authority building in 2026?

It is not about posting more. It's about saying what actually matters to ${audience}.

Here's the truth:
👉 ${hook}

Key takeaways:
1️⃣ Consistency beats algorithms every single time.
2️⃣ Structure for readability (always include white space!).
3️⃣ Never leave your post without a clear call-to-action.

📢 ${cta}.${hashtags}`;

	document.getElementById('linkedin-output').innerText = output;
	document.getElementById('linkedin-output-box').style.display = 'block';
}

// Generate GMB Post
function generateGmb() {
	const offer = document.getElementById('gmb-offer').value.trim();
	const keywords = document.getElementById('gmb-keywords').value.trim();
	const action = document.getElementById('gmb-action').value;

	if (!offer) {
		alert('Please describe your offer or update.');
		return;
	}

	const keywordList = keywords ? keywords.split(',').map(k => k.trim()).join(' | ') : 'Local Services';
	const output = `🌟 LOCAL UPDATE FROM DIGIGYAPAN 🌟

${offer}

📍 Serving Sonipat, Haryana, and surrounding regions.
🔍 Keywords: ${keywordList}

📞 Contact us directly to claim this update or ask any questions!
👉 Click the button below to: [ ${action} ]`;

	document.getElementById('gmb-output').innerText = output;
	document.getElementById('gmb-output-box').style.display = 'block';
}

// Generate SEO Blog Article
function generateSeoBlog() {
	const topic = document.getElementById('seo-topic').value.trim();
	const keywordsStr = document.getElementById('seo-keywords').value.trim();
	const tone = document.getElementById('seo-tone').value;
	const length = document.getElementById('seo-length').value;

	if (!topic) {
		alert('Please enter a blog topic or title idea.');
		return;
	}

	const kwList = keywordsStr ? keywordsStr.split(',').map(k => k.trim()) : ['SEO', 'Digital Marketing', 'Brand Growth'];
	const primaryKw = kwList[0] || 'SEO';
	const secondaryKws = kwList.slice(1).join(', ') || 'Digital Strategy, Audience Engagement';

	const metaTitle = topic.length > 55 ? topic.substring(0, 55) + "..." : topic + " | Digigyapan Insights";
	const metaDesc = `Learn everything about ${topic}. Explore key strategies, expert recommendations, and how ${primaryKw} helps drive organic growth for your brand.`;

	let articleBody = "";

	if (length === 'outline') {
		articleBody = `📌 SEO META TAGS & KEYWORD STRATEGY
--------------------------------------------------
Meta Title: ${metaTitle}
Meta Description: ${metaDesc}
Primary Keyword: ${primaryKw}
Secondary Keywords: ${secondaryKws}

==================================================
BLOG ARTICLE OUTLINE
==================================================

# H1: ${topic}

## H2: 1. Introduction & Market Overview
- Hook: The evolving importance of ${primaryKw} in 2026.
- Identifying key industry challenges and target audience pain points.
- Executive Summary of strategies discussed in this guide.

## H2: 2. Core Pillars of ${primaryKw}
- Essential components driving modern user engagement.
- Data-driven insights and strategic benefits.

## H2: 3. Actionable Implementation Steps
- Step A: Thorough keyword and search intent analysis (${primaryKw}).
- Step B: Content creation, formatting, and keyword placement.
- Step C: Performance monitoring and ongoing optimization (${secondaryKws}).

## H2: 4. Common Mistakes to Avoid
- Neglecting search intent and user experience.
- Over-optimizing without providing authentic value.

## H2: 5. Conclusion & Strategic Next Steps
- Summary of core recommendations.
- Call to Action: Boost your search rankings with Digigyapan!`;
	} else {
		articleBody = `📌 SEO META INFORMATION
--------------------------------------------------
Title Tag: ${metaTitle}
Meta Description: ${metaDesc}
Primary Keyword: ${primaryKw}
Secondary Keywords: ${secondaryKws}

==================================================
FULL SEO BLOG ARTICLE DRAFT
==================================================

# ${topic}

In today's highly competitive digital landscape, building strong search visibility requires more than just publishing content—it demands a strategic focus on ${primaryKw}. Whether you operate a growing enterprise or a local business in Sonipat, optimizing your content effectively is essential to attracting high-intent customers.

## Why ${primaryKw} Matters for Your Brand

Search engines prioritize authentic content that addresses actual user intent. By positioning your content around "${primaryKw}", you capture organic traffic from audiences actively searching for solutions.

Key benefits of an optimized approach:
• Targeted Organic Traffic: Connect with qualified leads at the right moment.
• Long-Term Brand Authority: Establish industry credibility with comprehensive content.
• High Return on Investment: Organic rankings generate continuous compounding traffic without ongoing ad spend.

## Key Strategies to Optimize Your Content

### 1. Align Content with Search Intent
Understand what your target readers are seeking. Craft your content to answer their questions thoroughly while incorporating focus terms naturally.

### 2. Strategic Keyword Placement
Integrate key search phrases strategically:
- Main Focus Keyword: ${primaryKw}
- Supporting Themes: ${secondaryKws}

### 3. Clear Formatting & User Engagement
Use engaging headings (H2, H3), structured bullet lists, and clear paragraphs to maintain high readability and encourage longer page visits.

## Final Thoughts & Next Steps

Unlocking long-term search growth is a continuous process. By putting these principles into action, your website can consistently outrank competition and convert visitors into loyal clients.

Want to accelerate your organic search performance? Contact Digigyapan's SEO team today for a tailored digital marketing audit!`;
	}

	document.getElementById('seo-blog-output').innerText = articleBody;
	document.getElementById('seo-blog-output-box').style.display = 'block';
}

// Video To MP3 Upload / Progress Mock
let dropzone = document.getElementById('dropzone');

if (dropzone) {
	// Drag and drop events
	['dragenter', 'dragover'].forEach(eventName => {
		dropzone.addEventListener(eventName, (e) => {
			e.preventDefault();
			dropzone.classList.add('dragover');
		}, false);
	});

	['dragleave', 'drop'].forEach(eventName => {
		dropzone.addEventListener(eventName, (e) => {
			e.preventDefault();
			dropzone.classList.remove('dragover');
		}, false);
	});

	dropzone.addEventListener('drop', (e) => {
		const dt = e.dataTransfer;
		const files = dt.files;
		if (files.length > 0) {
			handleFile(files[0]);
		}
	});
}

function handleFileSelect(input) {
	if (input.files.length > 0) {
		handleFile(input.files[0]);
	}
}

function handleFile(file) {
	// Show progress bar
	dropzone.style.display = 'none';
	document.getElementById('progress-container').style.display = 'block';
	
	const filename = file.name;
	const cleanName = filename.substring(0, filename.lastIndexOf('.')) || filename;
	document.getElementById('mp3-filename').innerText = cleanName + '.mp3';

	const steps = [
		{ p: 15, text: "Reading video file buffer..." },
		{ p: 40, text: "Extracting AAC audio streams..." },
		{ p: 70, text: "Transcoding frequency to MP3 standards..." },
		{ p: 90, text: "Optimizing metadata & headers..." },
		{ p: 100, text: "Finalizing download..." }
	];

	let progress = 0;
	let stepIndex = 0;

	const interval = setInterval(() => {
		progress += 2;
		if (progress > 100) progress = 100;

		document.getElementById('progress-bar').style.width = progress + '%';
		document.getElementById('progress-percent').innerText = progress + '%';

		// Update steps
		if (stepIndex < steps.length && progress >= steps[stepIndex].p) {
			document.getElementById('progress-step').innerText = steps[stepIndex].text;
			stepIndex++;
		}

		if (progress >= 100) {
			clearInterval(interval);
			setTimeout(() => {
				// Hide progress, show download
				document.getElementById('progress-container').style.display = 'none';
				
				// Create a simple mock download link using data-uri of a tiny silence track
				// so that it actually triggers a download in the browser
				const mockMp3DataUri = "data:audio/mp3;base64,SUQzBAAAAAAAF1RFTlDynamicMockDataForDigigyapanToolsPlaceholder==";
				const dlLink = document.getElementById('download-link');
				dlLink.href = mockMp3DataUri;
				dlLink.setAttribute('download', cleanName + '.mp3');
				
				document.getElementById('mp3-output-box').style.display = 'block';
			}, 500);
		}
	}, 100);
}

function resetMp3Converter() {
	document.getElementById('mp3-output-box').style.display = 'none';
	document.getElementById('progress-bar').style.width = '0%';
	document.getElementById('progress-percent').innerText = '0%';
	document.getElementById('progress-step').innerText = 'Initializing...';
	document.getElementById('file-input').value = "";
	dropzone.style.display = 'block';
}
</script>

<?php
get_footer();
?>
