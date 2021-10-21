<?php get_header(); ?>

<div class="container-fluid" style="margin-top:-16px; padding:0;">
<section>

    <?php if(has_post_thumbnail()): ?>

        <div class="text-center">
        
        <img src="<?php the_post_thumbnail_url('blog-large') ?>" class="img-fluid">
        </div>
    <?php endif; ?>    

        <h1 class="white"><?php the_title(); ?></h1>
         <span style="color:white;"><?php the_content();?></span>
        <?php

        $photos = get_field('photo_gallery');
        if($photos){ 
        
        foreach($photos as $photo){

            echo '<img src=" '. $photo .'">';

        }
    }
        the_field('video');
 ?>

</section>
</div>
 <?php get_footer(); ?>;