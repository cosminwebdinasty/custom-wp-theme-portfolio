<?php

/* 
 * Template Name: Portfolio
 */
get_header();
?>

<div class="hero-section mt-17">	
		<div class="about-text hover-target">about</div>
		<div class="contact-text hover-target">contact</div>
		<div class="section-center">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-12 text-center">
						<h1>Portfolio</h1>
					</div>
					<div class="col-12 text-center mb-2"></div>
					<div class="col-12 text-center">
						<p>
							<span class="photosection hover-target">photo</span> 
							<span class="videosection hover-target">video</span> 
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>	

<!-- ABOUT SECTION -->
	<div class="about-section">	
		<div class="about-close hover-target"></div>
		<div class="section-center">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 text-center">
						
					</div>
					<div class="col-lg-8 text-center mt-3"><h1 class="white mb-5" style="color:white;">ABOUT US</h1> 
					<hr class="mt-25 hr22 mb-4">
						<p class="mb-1"><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. 
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
						 when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
						 It has survived not only five centuries, but also the leap into electronic typesetting</p>
					</div>
					<div class="col-12 text-center">
					<img class="mt-3 mb-3" src="http://localhost/portfolio/wp-content/uploads/2021/10/testimonial2.jpg" alt=""><br><br>
						<p class="mb-0"><span>Nothing</span></p>
					</div>
				</div>
			</div>
		</div>		
	</div>

<!-- CONTACT SECTION -->
	<div class="contact-section">	
		<div class="contact-close hover-target"></div>
		<div class="section-center">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 text-center">
						<h1 class="white mb-5" style="color:white;">CONTACT</h1>  
						<hr class="mt-25"><br><br>
						<figure class="wpb_wrapper vc_figure">
							<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="100" height="100" src="http://localhost/portfolio/wp-content/uploads/2021/10/greenpathway.jpg" sizes="(max-width: 300px) 100vw, 300px"></div>
						</figure><br>
						<p><span class="cgray">Phone: </span> <a class="blue-txt" href="tel:0777777777" target="_blank" rel="nofollow noopener" data-dsn-animate="">0777777777</a></p>
						<p><span class="cgray"> E-mail: </span><a class="blue-txt" target="_blank" rel="nofollow noopener" data-dsn-animate=""> test@test.com</a></p>
						<p class="mb-5 white"><span class="cgray">Address: </span> Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</p>
					</div>
					<div class="col-12 text-center social mt-4">
						<a href="#" class="hover-target">instagram</a>
						<a href="#" class="hover-target">facebook</a>
						<a href="#" class="hover-target">vimeo</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<!-- PHOTO SECTION -->
	<div class="photosection-section">	
		<div class="photosection-close hover-target"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h3>Photo</h3>
					<hr>
				</div>
				<div class="col-12 mt-3 text-center"></div>
				<div class='col-md-12 text-center mt-5'>
				<ul class='list-group mt-5 nav-links inline' style="display:flex; justify-content:space-evenly;" >
					<?php
					$terms = get_terms( array(
						'taxonomy' => 'categorii',
						'hide_empty' => false,
						'parent' => 2,
					));

					foreach ( $terms as $term ) {
					$term_link = get_term_link( $term, 'categorii' );		
					echo "<li class='custom-list inline'><a href='".$term_link."' data-category='".$term->parent."' data-subcategory='".$term->term_id."'> $term->name</a></li>";
					}
					?>
			</ul>
		</div>
			</div>
			<div class="col-12 ajax-response"></div>
		</div>
	</div>
	
<!-- VIDEO SECTION -->
	<div class="videosection-section">	
		<div class="videosection-close hover-target"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h3>Video</h3>
					<hr>
				</div>
				<div class="col-12 mt-3 text-center"></div>
				<div class='col-md-12 text-center mt-5'>
					<ul class='list-group mt-5 nav-links inline' style="display:flex; justify-content:space-evenly;">
					<?php
					$terms = get_terms( array(
						'taxonomy' => 'categorii',
						'hide_empty' => false,
						'parent' => 3,
					));

					foreach ( $terms as $term ) {
						$term_link = get_term_link( $term, 'categorii' );
					echo "<li class='custom-list inline'><a class='active2' href='$term_link' data-category='".$term->parent."' data-subcategory='".$term->term_id."'> $term->name</a></li>";
					}
					?>

					</ul>
				</div>
			</div> 
			<div class="col-12 ajax-response"></div>
		</div>
	</div>

	<div class='cursor' id="cursor"></div>
	<div class='cursor2' id="cursor2"></div>
	<div class='cursor3' id="cursor3"></div>

<script>

(function($) { "use strict";
	
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
	
	//About page
	$(".about-text").on('click', function () {
		$("body").addClass("about-on");
	});
	$(".about-close").on('click', function () {
		$("body").removeClass("about-on");
	});

	//Contact page
	$(".contact-text").on('click', function () {
		$("body").addClass("contact-on");
	});
	$(".contact-close").on('click', function () {
		$("body").removeClass("contact-on");
	});

	//photosection portfolio page
	$(".photosection").on('click', function () {
		$('.ajax-response').html('');
		$('.photosection-section .nav-links a').first().trigger('click');
		$("body").addClass("photosection-on"); 

	});
	$(".photosection-close").on('click', function () {
		$("body").removeClass("photosection-on");
	});

	//videosection portfolio page
	$(".videosection").on('click', function () {
		$('.ajax-response').html('');
		$('.videosection-section .nav-links a').first().trigger('click');
		$("body").addClass("videosection-on");
	});
	$(".videosection-close").on('click', function () {
		$("body").removeClass("videosection-on");
	});

})(jQuery); 

</script>

<div class="loading-bar"></div> 
<?php get_footer(); ?>


