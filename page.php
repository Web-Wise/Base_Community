<?php get_header(); ?>

<?php do_action( 'webwise_base_before_content' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php do_action( 'webwise_base_after_content' ); ?>

<?php get_footer();
