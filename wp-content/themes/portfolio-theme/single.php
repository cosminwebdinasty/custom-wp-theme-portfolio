<?php get_header(); ?>

<section style="margin-top: 150px; min-height:80vh;"><center>
    <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('blog-large') ?>" class="img-fluid">
    <?php endif; ?>    
     <h1 style="color:red;"><?php the_title(); ?></h1>
     <h5 style="color:white !important;"><?php the_content(); ?></h5>
    </center>
</section>

<?php get_footer(); ?>