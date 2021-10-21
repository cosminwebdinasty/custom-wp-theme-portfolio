<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

       <!-- Start of Header --> 
       <header> 
           <div class="row"> 
               <div class="large-4 medium-12 column"> 
                   <div class="logoholder">
                       <a href="http://localhost/portfolio/home/" class="scroll"><img width="50px" src="http://localhost/portfolio/wp-content/uploads/2021/10/testimonial2.jpg" alt="" title=""></a>
                   </div>
               </div>
               <div class="large-8 medium-12 column">
                   <nav> 
                   <?php
            wp_nav_menu( array( 
                'theme_location' => 'primary',
                 'menu_class' => 'nav navbar-nav navbar-right navbar-nav nav-link nav-item cm hover-target') ); 
            ?>
                   </nav>
               </div>
               
               <div class="large-12 column">
                   <div class="sep"> </div>
               </div>
               
           </div>
       </header>
       <!-- End of Header -->
     
    </div>    
</nav> 