<?php get_header(); ?>
<section id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php //get_template_part( 'entry' ); ?>
        <div class="card">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            <?php echo '<h2 class="entry-title">';?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php echo '</h2>'; ?> <?php edit_post_link(); ?>
            <p class="entry-subtitle" ><?php echo(get_the_excerpt()); ?></p>
            <?php comments_template(); ?>
        </div>
    <?php endwhile; endif; ?>
    <?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>