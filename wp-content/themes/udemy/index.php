<?php 
// this function will look for a file called header and include it at the very bottom of the file
get_header();
// header-v2.php --> get_header('v2') so we can make more headers
?>

<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">
    <?php
      if(! is_single() && is_home() && function_exists('wpp_get_mostpopular') &&
      get_theme_mod('ju_show_header_popular_posts')){
        wpp_get_mostpopular([
          'wpp_start'  => ' <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
              <div>
                <div class="container clearfix">
                  <span class="badge badge-danger bnews-title">'.get_theme_mod('ju_popular_posts_widget_title').':</span>

                  <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false"
                    data-pagi="false">
                    <div class="flexslider">
                      <div class="slider-wrap">',
            'wpp_end'  => ' </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>'  ,
            'post_html' => '<div class="slide"><a href="{url}"><strong>{text_title}</strong></a></div>'
        ]);
        ?>

        <?php
      }

     ?>

   
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