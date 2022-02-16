<?php 
// this function will look for a file called header and include it at the very bottom of the file
get_header();
// header-v2.php --> get_header('v2') so we can make more headers
?>

<!-- Page Title
============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1><?php // the_archive_title(); 
        echo single_cat_title(); ?></h1>
        <span><?php the_archive_description(); ?></span>
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">


    <div class="container clearfix">

      <!-- Post Content
      ============================================= -->
      <div class="postcontent nobottommargin clearfix">


        <!-- Posts
        ============================================= -->
        <div id="posts">
         <?php 
         // check if the current page has post
         if(have_posts()){
           while(have_posts()){
             the_post(); // this function does two things it will query the database and get the current post in the loop and check if there are more posts after the current post
           
             // content-excerpt.php --> if WP didn't find it then nothing will be loaded
             get_template_part('partials/post/content-excerpt'); // does what require does
            
             // WP compine the two paths together seperating them with a dash but acts different as
             //if it didn't find content-excerpt.php it will look for content.php
            //get_template_part('partials/post/content','excerpt');
        
            }

         }
         ?>




        </div><!-- #posts end -->

        <!-- Pagination
        ============================================= -->
        <div class="row mb-3">
          <div class="col-12">
            <?php
            // check if there are older posts and if there is it will output a link to that page
            next_posts_link('&larr; Older');
            // chek for the newer posts and does the same
            previous_posts_link('Newer &rarr;');
             ?>
            <!-- <a href="#" class="btn btn-outline-secondary float-left">
              
            </a>
            <a href="#" class="btn btn-outline-dark float-right">
             
            </a> -->
          </div>
        </div>
        <!-- .pager end -->

      </div><!-- .postcontent end -->

<?php get_sidebar(); ?>

    </div>

  </div>

</section><!-- #content end -->

<?php get_footer(); ?> 