<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Digi
 */

get_header();
?>

<!-- Index Archive Section -->
<section class="section hero hero-bg-blog" style="min-height: 40vh; padding-top: 150px; padding-bottom: 60px;">
	<div class="hero-overlay"></div>
	<div class="container">
		<div class="hero-content">
			<div class="hero-subtitle">Archive</div>
			<h1 class="hero-title" style="margin-bottom: 0;">
				<?php
				if ( is_archive() ) {
					the_archive_title();
				} elseif ( is_search() ) {
					printf( esc_html__( 'Search Results for: %s', 'digi' ), '<span>' . get_search_query() . '</span>' );
				} else {
					esc_html_e( 'Latest Insights', 'digi' );
				}
				?>
			</h1>
		</div>
	</div>
</section>

<section class="section" style="border-bottom: none;">
	<div class="container">
		<div class="blog-grid">
			<?php
			if ( have_posts() ) {
				$b_idx = 1;
				while ( have_posts() ) {
					the_post();
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
							<h3 style="font-size: 1.35rem; margin-bottom: 1rem; line-height: 1.3;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
							<a href="<?php the_permalink(); ?>" class="read-more-link" style="margin-top: auto; padding-top: 1rem;">Read Article &rarr;</a>
						</div>
					</div>
					<?php
					$b_idx++;
				}

				echo '<div class="pagination" style="grid-column: 1/-1; display: flex; gap: 1rem; justify-content: center; margin-top: 3rem;">';
				paginate_links( array(
					'prev_text' => '&larr; Prev',
					'next_text' => 'Next &rarr;',
				) );
				echo '</div>';

			} else {
				?>
				<div style="grid-column: 1/-1; text-align: center; padding: 4rem 0;">
					<h2>No posts found</h2>
					<p>Check back later or search for something else.</p>
					<div style="margin-top: 2rem;">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Return Home</a>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>

<?php
get_footer();
?>
