<?php get_header(); ?>
<section id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry' ); ?>
    <?php endwhile; endif; ?>
    <section class="footer">
        <?php get_template_part( 'nav', 'below-single' ); ?>
    </section>
</section>
<?php get_footer(); ?>