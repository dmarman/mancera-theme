<section class="entry-content">
    <div class="cat-links"><?php the_category( ', ' ); ?></div>
    <h2 class="entry-subtitle" ><?php echo(get_the_excerpt()); ?></h2>
    <?php the_content(); ?>
    <div class="entry-links"><?php wp_link_pages(); ?></div>
</section>