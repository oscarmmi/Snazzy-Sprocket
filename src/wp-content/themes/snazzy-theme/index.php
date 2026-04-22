<?php
/**
 * Main Template File
 */
get_header(); ?>

<main id="primary" class="site-main container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-blue-600 mb-6">Welcome to Snazzy Sprocket!</h1>
    
    <?php if ( have_posts() ) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white shadow-lg rounded-lg p-6'); ?>>
                    <h2 class="text-2xl font-semibold mb-2">
                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="text-gray-800 hover:text-blue-500">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <div class="text-gray-600">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p class="text-xl text-gray-500">No posts found.</p>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
