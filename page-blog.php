<?php
/**
 * Template Name: Blog
 *
 * @package Digi
 */

get_header(); ?>

<main id="primary" class="site-main">

    <!-- Blog Header -->
    <header class="page-header section-padding bg-light">
        <div class="container">
            <span class="subtitle">Industry Insights</span>
            <h1 class="page-title text-gradient">Stay Ahead of the Curve</h1>
            <p>Expert articles on SEO, Paid Ads, and Digital Strategy to help you grow your business in 2026.</p>
        </div>
    </header>

    <!-- Blog Grid -->
    <section id="blog" class="blog section-padding">
        <div class="container grid-3">
            <?php
            // Custom query to fetch posts
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
            );
            $blog_query = new WP_Query($args);

            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post();
                    ?>
                    <article class="blog-card reveal">
                        <div class="blog-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                                <img src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?q=80&w=1474&auto=format&fit=crop" alt="Blog post">
                            <?php endif; ?>
                        </div>
                        <div class="blog-content">
                            <span class="blog-date"><?php echo get_the_date(); ?></span>
                            <h4 style="font-size: 1.8rem; margin-bottom: 1.5rem;"><?php the_title(); ?></h4>
                            <p style="color: var(--text-muted); margin-bottom: 2rem;"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn-link">Read Full Article</a>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Dummy posts if none exist
                for($i = 1; $i <= 3; $i++) :
                    ?>
                    <article class="blog-card reveal">
                        <div class="blog-image">
                            <img src="<?php echo ($i == 1) ? 'https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?q=80&w=1474&auto=format&fit=crop' : (($i == 2) ? 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1415&auto=format&fit=crop' : 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1470&auto=format&fit=crop'); ?>" alt="Blog post">
                        </div>
                        <div class="blog-content">
                            <span class="blog-date">March <?php echo 25 - ($i * 5); ?>, 2026</span>
                            <h4><?php echo ($i == 1) ? '5 SEO Trends to Watch in 2026' : (($i == 2) ? 'Scale Your Meta Ads for Q4' : 'The Power of Predictive Analytics'); ?></h4>
                            <p>Expert insights on how to scale your brand using modern data-driven strategies...</p>
                            <a href="#" class="btn-link">Read More</a>
                        </div>
                    </article>
                <?php
                endfor;
            endif;
            ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>
