<?php
/* 
 * Template Name: Blog Posts
 */
get_header();
  ?>

<!--Main layout-->
<main class="my-5" style="margin-top:150px;">
    <div class="container mov">
        <!--Section: Content-->
        <section class="text-center">

              <div class="row">

                <?php 
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'posts_per_page' => 3,
                    'paged' => $paged
                );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();?>

                  <div class="col-lg-4 col-md-12 mb-4 mt-5">
                    <div class="card bg-black no-borders">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <a class="hover-target" href="<?php the_permalink(); ?>">
                          <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" >
                      
                          <div class="mask"></div>
                        </a>
                      </div>
                      <div class="card-body white">
                        <h5 class="card-title white"><?php the_title();?></h5><hr class="hr25">
                        <p class="card-text ">
                        <?php the_excerpt(); ?>
                        </p>
                        <a class="hover-target send" href="<?php the_permalink(); ?>" class="send">Read more</a><br><br><br>
                      </div>
                    </div>
                  </div>

                <?php endwhile;?>
            </div>
        </section><!--Section: Content-->

        <!-- Pagination -->
        <div class="pagination mt-5 pg">
        <?php
        $big = 999999999;
        echo paginate_links( array(
              'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
              'format' => '?paged=%#%',
              'current' => max( 1, get_query_var('paged') ),
              'total' => $loop->max_num_pages,
              'prev_text' => 'Previous',
              'next_text' => 'Next'
        ) );
        ?>
      </div>
    </div>
</main>
  <!--Main layout-->

  <div class='cursor' id="cursor"></div>
	<div class='cursor2' id="cursor2"></div>
	<div class='cursor3' id="cursor3"></div>
<script> document.getElementsByTagName("body")[0].addEventListener("mousemove", function(n) {
        t.style.left = n.clientX + "px", 
		t.style.top = n.clientY + "px", 
		e.style.left = n.clientX + "px", 
		e.style.top = n.clientY + "px", 
		i.style.left = n.clientX + "px", 
		i.style.top = n.clientY + "px"
    });
    var t = document.getElementById("cursor"),
        e = document.getElementById("cursor2"),
        i = document.getElementById("cursor3");
    function n(t) {
        e.classList.add("hover"), i.classList.add("hover")
    }
    function s(t) {
        e.classList.remove("hover"), i.classList.remove("hover")
    }
    s();
    for (var r = document.querySelectorAll(".hover-target"), a = r.length - 1; a >= 0; a--) {
        o(r[a])
    }
    function o(t) {
        t.addEventListener("mouseover", n), t.addEventListener("mouseout", s)
    }</script>

<?php get_footer(); ?>
