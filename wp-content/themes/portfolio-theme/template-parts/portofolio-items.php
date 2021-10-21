<div class="container">
    <div class="row" style="display:flex;">
    <?php 
        // array of objects
        $portofolioItems = $loop->posts;
        while ( $loop->have_posts() ) : $loop->the_post();
    ?>
        <div class="col-md-4 mt-5" style="padding:20px;">
            
        <?php           
            $type = get_field('type');
            $img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 

            if($type == 'photo'){

            echo '<a class="fresco hover-target" href="'.esc_url($img_url).'" rel="lightbox">'; 
            the_post_thumbnail('medium');
            echo '</a>';

            }
            else if($type == 'video')
            {

                $video_url = get_field('video');

                echo '<a class="fresco hover-target" href="'.$video_url.'" rel="lightbox">'; 
                the_post_thumbnail('medium');
                echo '</a>';
            }
        ?>
        <center> <p style="color:#70aed2;"> <?php the_title(); ?> </p></center>
        </div>
        <?php 
            endwhile; wp_reset_query();
        ?>      
    </div>

<script>
//Page cursors
document.getElementsByTagName("body")[0].addEventListener("mousemove", function(n) {
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
    }
</script>

</div>