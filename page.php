<?php 
    get_header(); ?>
<section> 
<?php 
    if(have_posts()) : 
        while(have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No Pages Found'); ?></p>
    <?php endif; ?>

</section>
<?php 
    get_footer(); ?>