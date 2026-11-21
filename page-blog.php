<?php
/**
 * Template Name: Blog
 *
 * @package Digi
 */

get_header();
?>

<!-- Page Header -->
<section class="section hero hero-bg-blog">
	<div class="hero-overlay"></div>
	<div class="container">
		<div class="hero-content">
			<div class="hero-subtitle">Insights & Knowledge</div>
			<h1 class="hero-title" style="margin-bottom: 1.5rem;">Blogs & Latest News</h1>
			<p class="hero-description" style="max-width: 700px;">Stay ahead of the curve with our curated insights, guides, and thoughts on AI marketing, local SEO, website design, and B2B growth.</p>
		</div>
	</div>
</section>

<!-- Blog Cards Grid -->
<section class="section" style="border-bottom: none;">
	<div class="container">
		<div class="blog-grid">
			<?php
			// Standard WordPress Loop
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$blog_args = array(
				'post_type'      => 'post',
				'posts_per_page' => 9,
				'paged'          => $paged
			);
			$blog_query = new WP_Query( $blog_args );

			if ( $blog_query->have_posts() ) {
				$b_idx = 1;
				while ( $blog_query->have_posts() ) {
					$blog_query->the_post();
					$thumb = get_template_directory_uri() . '/images/blog-' . ( ( ($b_idx - 1) % 4 ) + 1 ) . '.jpg';
					?>
					<div class="card blog-card">
						<img src="<?php echo esc_url( $thumb ); ?>" class="blog-card-img" alt="<?php the_title_attribute(); ?>">
						<div class="blog-meta">
							<span><?php echo get_the_date(); ?></span>
							<span>&bull;</span>
							<span>By <?php the_author(); ?></span>
						</div>
						<div class="blog-card-content">
							<h3 style="font-size: 1.35rem; margin-bottom: 1rem; line-height: 1.3;"><?php the_title(); ?></h3>
							<p><?php echo wp_trim_words( get_the_excerpt(), 22 ); ?></p>
							<a href="<?php the_permalink(); ?>" class="read-more-link" style="margin-top: auto; padding-top: 1rem;">Read Article &rarr;</a>
						</div>
					</div>
					<?php
					$b_idx++;
				}
				
				// Pagination
				echo '<div class="pagination" style="grid-column: 1/-1; display: flex; gap: 1rem; justify-content: center; margin-top: 3rem;">';
				echo paginate_links( array(
					'total' => $blog_query->max_num_pages,
					'current' => $paged,
					'prev_text' => '&larr; Prev',
					'next_text' => 'Next &rarr;',
				) );
				echo '</div>';

				wp_reset_postdata();
			} else {
				// Static Fallbacks for scraped content from digigyapan.in
				$static_blogs = array(
					array(
						'img'       => get_template_directory_uri() . '/images/blog-1.jpg',
						'title'     => 'AI Marketing Services: The Future of Business Growth in the Digital Age',
						'date'      => 'June 18, 2026',
						'category'  => 'AI & Growth',
						'read_time' => '5 min read',
						'excerpt'   => 'In today’s highly competitive digital landscape, businesses need more than traditional marketing strategies to stay ahead. Consumers expect personalized experiences, instant responses, and highly relevant content.'
					),
					array(
						'img'       => get_template_directory_uri() . '/images/blog-2.jpg',
						'title'     => 'Performance Marketing Agency: The Complete Guide to ROI-Driven Digital Growth',
						'date'      => 'May 12, 2026',
						'category'  => 'Performance Marketing',
						'read_time' => '8 min read',
						'excerpt'   => 'Why Hiring a Performance Marketing Agency Is Essential for Business Growth. In today’s competitive digital landscape, businesses need more than basic traffic—they need conversions, leads, and sales.'
					),
					array(
						'img'       => get_template_directory_uri() . '/images/blog-3.jpg',
						'title'     => 'Online Reputation Management: How Businesses Build Trust, Visibility & Credibility Online',
						'date'      => 'April 20, 2026',
						'category'  => 'Reputation & Trust',
						'read_time' => '6 min read',
						'excerpt'   => 'In today’s digital-first business environment, your online reputation directly influences customer trust, buying decisions, search visibility, and credibility online.'
					),
					array(
						'img'       => get_template_directory_uri() . '/images/blog-4.jpg',
						'title'     => 'LinkedIn Personal Branding: How Professionals Build Authority, Trust & Leads in 2026',
						'date'      => 'March 05, 2026',
						'category'  => 'LinkedIn Optimization',
						'read_time' => '7 min read',
						'excerpt'   => 'LinkedIn is no longer just a digital resume platform. In 2026, it has become one of the most powerful ecosystems for authority building, B2B lead generation, and professional networking.'
					)
				);

				foreach ( $static_blogs as $post ) {
					?>
					<div class="card blog-card">
						<img src="<?php echo esc_url( $post['img'] ); ?>" class="blog-card-img" alt="<?php echo esc_attr( $post['title'] ); ?>">
						<div class="blog-meta">
							<span><?php echo esc_html( $post['date'] ); ?></span>
							<span>&bull;</span>
							<span><?php echo esc_html( $post['read_time'] ); ?></span>
						</div>
						<div class="blog-card-content">
							<span class="text-muted" style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 600; display: block; margin-bottom: 0.5rem;"><?php echo esc_html( $post['category'] ); ?></span>
							<h3 style="font-size: 1.35rem; margin-bottom: 1rem; line-height: 1.3;"><?php echo esc_html( $post['title'] ); ?></h3>
							<p><?php echo esc_html( $post['excerpt'] ); ?></p>
							<a href="#" class="read-more-link" style="margin-top: auto; padding-top: 1rem;" onclick="alert('In a live environment, this links to the full post details. Our theme supports WordPress loop generation out-of-the-box.'); return false;">Read Article &rarr;</a>
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
