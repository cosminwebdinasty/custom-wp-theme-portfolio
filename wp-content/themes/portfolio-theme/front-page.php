
<?php
    
 /* 
 * Template Name: Home
 */

    wp_head(); ?>
    <?php get_header(); ?>
    <body id="home">
       
       <!-- Back to Top Button --> 
       <a href="#home" class="scroll backtotop">
           <i class="fa fa-angle-up"> </i>
       </a>
        

       <!-- Start of About --> 
       <section class="about" id="about">
           <div class="row">     
               <div class="large-4 hide-for-medium-only hide-for-small-only column start"> 
                   <div class="imageholder">
                       <img src="http://localhost/portfolio/wp-content/uploads/2021/10/greenpathway.jpg" alt="Green Path Way" title="Green Path Way">
                       <div class="text"><div><span>Quality Craftsmanship</span></div></div>
                   </div>
               </div>
               
               <div class="large-8 medium-9 large-uncentered medium-centered small-centered column">
                   <div class="sliderHolder">
                        <div class="slider">
                            <div class="slide"><img src="http://localhost/portfolio/wp-content/uploads/2021/10/glassesoncomputer.jpg" alt="Glasses on Computer" title="Glasses on Computer" class="item"></div>
                          
                        </div>
                       <div class="bannerNav">
                           <a href="#" class="prev"> <i class="fa fa-angle-left"> </i></a>
                           <a href="#" class="next"> <i class="fa fa-angle-right"> </i></a>
                       </div>
                   </div>
               </div>
               
               <div class="large-6 medium-6 column"> 
                   <article>
                       <div class="smallTitle">
                            <h2>ABOUT US</h2>
                            <span>...</span>
                       </div>
                       <p>
                           Team of designers and developers that have been creating solutions for the web f focusing on innovation and new technologies.  
                           <br/><br/>
                           We are a nimble team of designers and developers that have been creating solutions for the web for quite a while, but that doesn't really matter much to us. We simply thrive to never stop learning whilst focus on building digital experiences that people love.
                       </p>
                       <a href="#" class="cta">GET STARTED</a>
                   </article>
               </div>
               
               <div class="large-6 medium-6 column"> 
                   <article>
                       <div class="smallTitle">
                            <h2>OUR PHILOSOPHY</h2>
                            <span>...</span>
                       </div>
                       <p>
                           At Soul we are driven by the idea of quality craftsmanship in all that we do, each pixel refined, each line of code considered. Having a small structure but best in market knowledge, we deliver competitive internet services balancing creativity, innovation and business understanding.
                           <br/><br/>
                           We are obsessed with beautiful digital experiences, putting the user at the centre of everything we make. Creativity starts with understanding the context of the design challenge and only then can one deliver an exceptional graphical experience.
                       </p>
                   </article>
               </div>
           
           </div>
       </section>
       <!-- End of About -->
       
 <!-- Start of Parallax --> 
 <section class="parallax" style="background-image: url(http://localhost/portfolio/wp-content/uploads/2021/10/parallax.jpg);" data-type="background" data-speed="9"></section>
       <!-- End of Parallax --> 
       
       
       <!-- Start of Services --> 
       <section class="services" id="services"> 
            <div class="row"> 
               
               <div class="large-8 large-centered column" style="width:100%;">
                   <div class="title">
                       <h1>SERVICES</h1>
                       <span>...</span>
                       <p>when we are not eating chocolate we strive to create<br/>unique and memorable digital experiences from begining to end</p>
                   </div>
               </div>
               
               <div class="large-3 medium-6 small-12 column">
                   <article class="service">
                       <div class="top">
                           <i class="fa fa-desktop"> </i>
                           <h3>WEB DESIGN</h3>
                       </div>
                       <p>A user interface is the place where user's needs are met, missed or exceeded beyond expectation. Fewer steps to take, fewer concepts to learn and a minified congnitive load are key in hiding the underlying complexity of the product or service from the customer.</p>
                   </article>
               </div>
                
               <div class="large-3 medium-6 small-12 column">
                   <article class="service">
                       <div class="top">
                           <i class="fa fa-pencil"> </i>
                           <h3>UI/UX DEVELOPMENT</h3>
                       </div>
                       <p>We are obsessed with beautiful digital experiences, putting the user at the centre of everything we make. Creativity starts with understanding the context of the design challenge and only then can one deliver an exceptional graphical experience.</p>
                   </article>
               </div>
                
               <div class="large-3 medium-6 small-12 column">
                   <article class="service">
                       <div class="top">
                           <i class="fa fa-rocket"> </i>
                           <h3>WORDPRESS INTEGRATIONS</h3>
                       </div>
                       <p>Truth be told we simply love Wordpress and like to think of ourselves as specialists in the creation of Wordpress driven websites. We firmly believe Wordpress is the best Content Management System around which just means it's easy for you or your clients to manage content.</p>
                   </article>
               </div>
                
               <div class="large-3 medium-6 small-12 column">
                   <article class="service">
                       <div class="top">
                           <i class="fa fa-code"> </i>
                           <h3>HTML DEVELOPMENT</h3>
                       </div>
                       <p>We are experts at implementing complex internet services using combinations of the latest emerging web techonologies. Namely HTML5, CSS3 and jQuery for mobile and web app designs.</p>
                   </article>
               </div>   
            </div>
       </section>
       <!-- End of Services -->
       
       <!-- Start of Team --> 
       <section class="team" id="team">

       <div class="row text-center pb90">
                            <?php
                            global $wp_query;
                            $args = array_merge( $wp_query->query_vars, ['posts_per_page' => 1 ] );
                            query_posts( $args );

                            if (have_posts()):
                                while (have_posts()): the_post();
                                    ?>
           <div class="row"> 
               <div class="large-12 column">
                   <div class="slider">
                       
                       <div class="bannerNav">
                           <a href="#" class="prev" style="display: block;"> <i class="fa fa-angle-left"> </i></a>
                           <a href="#" class="next" style="display: block;"> <i class="fa fa-angle-right"> </i></a>
                       </div>
                       <div class="sliderholder">
                           <div class="row member">
                            <div class="large-5 medium-6 small-8 large-uncentered medium-centered small-centered column">
                                   <img src="<?php the_post_thumbnail_url('medium') ?>">
                               </div>
                               
                               <div class="small-10 large-7 small-centered large-uncentered column">
                                   <div class="smallTitle">
                                   <a style="color: gray;" href="<?php the_permalink(); ?>"> <h2 class="smallTitle"><?php the_title(); ?></h2></a>
                                        <span>...</span>
                                   </div>
                                   <div class="memberInfo">
                                       <h5><?php the_excerpt() ;?></h5>
                                       <?php the_content() ;?>                                
                                       <?php
                                endwhile;
                            endif;
                            ?>
                                       <ul class="social fa-ul"> 
                                           <li><a href="#"><i class="fa fa-li fa-dribbble"> </i> <span>DRIBBLE<span></a></li>
                                           <li><a href="#"><i class="fa fa-li fa-twitter"> </i> <span>TWITTER<span></a></li>
                                           <li><a href="#"><i class="fa fa-li fa-skype"> </i> <span>SKYPE<span></a></li>                
                                       </ul>
                                       
                                   </div>
                               </div>
			       <div class="large-12 column"> </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!-- End of Team -->
       
       
       <!-- Start of Works --> 
       <section class="works" id="works">
           <div class="row">
               <div class="large-8 large-centered column">
                   <div class="title">
                       <h1>RECENT WORKS</h1>
                       <span>...</span> 
                   </div>
                   
                   <ul class="filters">
                        <li class="selected"><a href="#" data-filter="*">ALL</a></li>
                        <li>/</li>
                        <li><a href="#" data-filter=".branding">BRANDING</a></li>
                        <li>/</li>
                        <li><a href="#" data-filter=".graphic">GRAPHIC</a></li>
                        <li>/</li>
                        <li><a href="#" data-filter=".video">VIDEO</a></li>
                        <li>/</li>
                        <li><a href="#" data-filter=".web">WEB</a></li>
                        <li>/</li>
                        <li><a href="#" data-filter=".package">PACKAGE</a></li>
                   </ul>
                   
               </div>
           </div>
           
           <article class="work" id="mud">
               <div class="row">
                
        
               </div>
           </article>
           
           <article class="work" id="amsterdam">
               <div class="row">
                   <div class="large-10 column large-centered">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/work2_large.jpg" alt="Amsterdam Fever" title="Amsterdam Fever">
                   </div>
                   <div class="large-10 column large-centered">
                       <div class="smallTitle">
                           <h2>AMSTERDAM FEVER</h2>
                           <span>...</span>
                       </div>
                       <p>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                       </p>
                   </div>
                   <div class="large-9 column large-centered"></div>
               </div>
           </article>
           
           <article class="work" id="winter">
               <div class="row">
                   <div class="large-10 column large-centered">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/work3_large.jpg" alt="Chilly Winters" title="Chilly Winters">
                   </div>
                   <div class="large-10 column large-centered">
                       <div class="smallTitle">
                           <h2>CHILLY WINTERS</h2>
                           <span>...</span>
                       </div>
                       <p>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                       </p>
                   </div>
                   <div class="large-9 column large-centered"></div>
               </div>
           </article>
           
           <article class="work" id="castle">
               <div class="row">
                   <div class="large-10 column large-centered">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/work4_large.jpg" alt="The Castle" title="The Castle">
                   </div>
                   <div class="large-10 column large-centered">
                       <div class="smallTitle">
                           <h2>THE CASTLE</h2>
                           <span>...</span>
                       </div>
                       <p>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                       </p>
                   </div>
                   <div class="large-9 column large-centered"></div>
               </div>
           </article>
           
           <article class="work" id="rails">
               <div class="row">
                   <div class="large-10 column large-centered">
                       <img src="images/work5_large.jpg" alt="The Rails" title="The Rails">
                   </div>
                   <div class="large-10 column large-centered">
                       <div class="smallTitle">
                           <h2>THE RAILS</h2>
                           <span>...</span>
                       </div>
                       <p>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                       </p>
                   </div>
                   <div class="large-9 column large-centered"></div>
               </div>
           </article>
           
           <article class="work" id="sketch">
               <div class="row">
                   <div class="large-10 column large-centered">
                       <img src="images/work6_large.jpg" alt="Sketch" title="Sketch">
                   </div>
                   <div class="large-10 column large-centered">
                       <div class="smallTitle">
                           <h2>SKETCH</h2>
                           <span>...</span>
                       </div>
                       <p>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                       </p>
                   </div>
                   <div class="large-9 column large-centered"></div>
               </div>
           </article>
           
           <article class="work" id="minimal">
               <div class="row">
                   <div class="large-10 column large-centered">
                       <img src="images/work7_large.jpg" alt="Minimal" title="Minimal">
                   </div>
                   <div class="large-10 column large-centered">
                       <div class="smallTitle">
                           <h2>MINIMAL</h2>
                           <span>...</span>
                       </div>
                       <p>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                       </p>
                   </div>
                   <div class="large-9 column large-centered"></div>
               </div>
           </article>
           
           <article class="work" id="sundays">
               <div class="row">
                   <div class="large-10 column large-centered">
                       <img src="images/work8_large.jpg" alt="Sunny Sundays" title="Sunny Sundays">
                   </div>
                   <div class="large-10 column large-centered">
                       <div class="smallTitle">
                           <h2>SUNNY SUNDAYS</h2>
                           <span>...</span>
                       </div>
                       <p>
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                       </p>
                   </div>
                   <div class="large-9 column large-centered"></div>
               </div>
           </article>
           
           <div class="row" style="display:flex;">
          
                        <?php
                            $args = array(
                                'post_type' => 'portfolio',
                                'posts_per_page' => 6,
                                );
                            $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post();
                        ?>
                            <div class="col-md-4 p20" style="display:grid; justify-content: space-around;">
                                <?php        
                                $type = get_field('type');
                                $img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 

                                if($type == 'photo'){
                                echo '<a class="fresco" href="'.esc_url($img_url).'" rel="lightbox">'; 
                                the_post_thumbnail('medium');
                                echo '</a>';
                                } else if($type == 'video')
                                {
                                    $video_url = get_field('video');
                                    echo '<a class="fresco" href="'.$video_url.'" rel="lightbox">'; 
                                    the_post_thumbnail('medium');
                                    echo '</a>';
                                } ?>
                            </div>
                        <?php endwhile; wp_reset_query(); ?>         
        
               </div>
           
           <!-- Close Button -->
           <a href="#" class="close">
               <i class="fa fa-times"> </i>
           </a>
           
           <ul id="works"> 
               
               <li class="branding web">
                   <a href="#mud">
                       <figure>
                         <div class="imgholder">
                             <img src="images/work1.jpg" alt="Mr Jack Daniel" title="Mr Jack Daniel">
                             <div class="hover">
                                 <div class="text">
                                     <div>
                                         <h4>MUDDY FIELDS</h4> 
                                         <ul>
                                             <li>Branding</li>
                                             <li>/</li>
                                             <li>Web</li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <figcaption>
                             MUDDY FIELDS / <span>PETER BESSER</span>
                         </figcaption>
                       </figure>
                   </a>
               </li>
               
               <li class="graphic web package">
                   <a href="#amsterdam">
                       <figure>
                         <div class="imgholder">
                             <img src="images/work2.jpg" alt="Mr Jack Daniel" title="Mr Jack Daniel">
                             <div class="hover">
                                 <div class="text">
                                     <div>
                                         <h4>AMSTERDAM FEVER</h4> 
                                         <ul>
                                             <li>Graphic</li>
                                             <li>/</li>
                                             <li>Web</li>
                                             <li>/</li>
                                             <li>Package</li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <figcaption>
                             AMSTERDAM FEVER / <span>SYLWIA BARTYZEL</span>
                         </figcaption>
                       </figure>
                   </a>
               </li>
               
               <li class="video package">
                   <a href="#winter">
                       <figure>
                         <div class="imgholder">
                             <img src="images/work3.jpg" alt="Chilly Winters" title="Chilly Winters">
                             <div class="hover">
                                 <div class="text">
                                     <div>
                                         <h4>CHILLY WINTERS</h4> 
                                         <ul>
                                             <li>Package</li>
                                             <li>/</li>
                                             <li>Video</li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <figcaption>
                             CHILLY WINTERS / <span>WOJTEK WITKOWSKI</span>
                         </figcaption>
                       </figure>
                   </a>
               </li>
               
               <li class="branding graphic video">
                   <a href="#castle">
                       <figure>
                         <div class="imgholder">
                             <img src="images/work4.jpg" alt="The Castle" title="The Castle">
                             <div class="hover">
                                 <div class="text">
                                     <div>
                                         <h4>THE CASTLE</h4> 
                                         <ul>
                                             <li>Branding</li>
                                             <li>/</li>
                                             <li>Graphic</li>
                                             <li>/</li>
                                             <li>Video</li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <figcaption>
                             THE CASTLE / <span>VADIM SHERBAKOV</span>
                         </figcaption>
                       </figure>
                   </a>
               </li>
               
               <li class="branding web video">
                   <a href="#rails">
                       <figure>
                         <div class="imgholder">
                             <img src="images/work5.jpg" alt="The Rails" title="The Rails">
                             <div class="hover">
                                 <div class="text">
                                     <div>
                                         <h4>THE RAILS</h4> 
                                         <ul>
                                             <li>Branding</li>
                                             <li>/</li>
                                             <li>Web</li>
                                             <li>/</li>
                                             <li>Video</li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <figcaption>
                             THE RAILS /<span>ANDREA BOLDIZSAR</span>
                         </figcaption>
                       </figure>
                   </a>
               </li>
               
               <li class="branding web">
                   <a href="#sketch">
                       <figure>
                         <div class="imgholder">
                             <img src="images/work6.jpg" alt="Sketch" title="Sketch">
                             <div class="hover">
                                 <div class="text">
                                     <div>
                                         <h4>SKETCH</h4> 
                                         <ul>
                                             <li>Branding</li>
                                             <li>/</li>
                                             <li>Web</li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <figcaption>
                             SKETCH / <span>GALYMZHAN ABDUGALIMOV</span>
                         </figcaption>
                       </figure>
                   </a>
               </li>
               
               <li class="graphic package">
                   <a href="#minimal">
                       <figure>
                         <div class="imgholder">
                             <img src="images/work7.jpg" alt="Mr Jack Daniel" title="Mr Jack Daniel">
                             <div class="hover">
                                 <div class="text">
                                     <div>
                                         <h4>MINIMAL</h4> 
                                         <ul>
                                             <li>Graphic</li>
                                             <li>/</li>
                                             <li>Package</li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <figcaption>
                             MINIMAL / <span>KOICHI NAKAJIMA</span>
                         </figcaption>
                       </figure>
                   </a>
               </li>
               
               <li class="graphic web video">
                   <a href="#sundays">
                       <figure>
                         <div class="imgholder">
                             <img src="images/work8.jpg" alt="Sunny Sundays" title="Sunny Sundays">
                             <div class="hover">
                                 <div class="text">
                                     <div>
                                         <h4>SUNNY SUNDAYS</h4> 
                                         <ul>
                                             <li>Graphic</li>
                                             <li>/</li>
                                             <li>Web</li>
                                             <li>/</li>
                                             <li>Video</li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <figcaption>
                             SUNNY SUNDAYS / <span>GLEN CARRIE</span>
                         </figcaption>
                       </figure>
                   </a>
               </li>
               
           </ul>  
       </section>
       <!-- End of Works --> 
       
       
       
       <!-- Start of Contact --> 
       <section class="contact" id="contact">
           <div class="row">
              
              <div class="large-8 large-centered column">
                   <div class="title">
                       <h1>CONTACT</h1>
                       <span>...</span>
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br/>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                   </div>
               </div>
               
               <div class="large-12 column">
                   <div class="map">
                      <iframe width="1170" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Buzau,+Romania&amp;aq=0&amp;oq=zebbug&amp;sll=37.09024,-95.712891&amp;sspn=80.935792,114.455522&amp;ie=UTF8&amp;hq=&amp;hnear=Zebbug,+Malta&amp;t=m&amp;ll=35.870134,14.434319&amp;spn=0.024343,0.100422&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                   </div>
               </div>
               
               <!-- Form Section --> 
               <div class="large-8 large-uncentered medium-10 medium-centered column">
                   <div class="row">
                       
                       <div class="large-12 column">
                          <div class="smallTitle">
                             <h2>DROP US A LINE</h2>
                             <span>...</span>
                          </div> 
                       </div>
                       
                       <form>
                            <div class="large-6 column">
                                <input type="text" name="name" title="Name" class="defaultText" /> 
                            </div>
                           
                           <div class="large-6 column">
                                <input type="text" name="name" title="Email" class="defaultText" /> 
                           </div>
                           
                           <div class="large-12 column">
                               <textarea id="comments">WHAT’S ON YOUR MIND</textarea>
                           </div>
                           
                           <div class="large-12 column">
                               <input type="submit" value="Send Message" class="cta"/>
                           </div> 
                       </form>
                   </div>
               </div>
               <!-- End of Form Section -->
               
               <div class="large-4 large-uncentered medium-10 medium-centered column">
                 <div class="smallTitle">
                    <h2>OUR ADDRESS</h2>
                    <span>...</span>
                 </div>
                 
                 <ul class="fa-ul">
                    <li>
                        <i class="fa-li fa fa-home"></i>
                        NEQUE PORRO QUISQUAM EST QUI, <br/>
                        DOLOREM IPSUM QUIA DOLOR<br/>
                        ADIPISCI VELIT 2345234
                    </li>
                    <li>
                        <i class="fa-li fa fa-phone"></i>
                        0777777777
                    </li>
                    <li>
                        <i class="fa-li fa fa-globe"></i>
                        <a href="#">info@test.com</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-briefcase"></i>
                        8.30am - 7.00pm
                    </li>
                  </ul>
                 
               </div>
			   
               <div class="large-12 column"> </div>
               
           </div>
       </section>
       <!-- End of Contact -->
       
       <!-- Start of Footer -->
       <footer><?php wp_footer(); ?>
          <?php get_footer(); ?>
       </footer>
       <!-- End of Footer -->
       
    </body>
</html>
