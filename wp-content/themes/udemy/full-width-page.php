<?php 
/*
* Template Name: Full Width Page
*/


// this function will look for a file called header and include it at the very bottom of the file
get_header();
// header-v2.php --> get_header('v2') so we can make more headers
?>

 <!-- Page Title  ============================================= -->
 <section id="page-title">
        <div class="container clearfix">
            <h1><?php single_post_title(); ?></h1>
            <span>
                <?php 
                    if(function_exists('the_subtitle')){
                        the_subtitle();
                    }

                 ?></span>
        </div>
    </section><!-- #page-title end -->


<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">

    <div class="container clearfix">

          <?php
          // check if there are any posts using a conditional statement
         
              while(have_posts()){
                  the_post();
                  global $post;  // defined variable by WP and this contain properties about post
                  $author_ID = $post ->post_author;
                  $author_URL = get_author_posts_url($author_ID);
                  ?>
                    <div class="single-post nobottommargin">

                        <!-- Single Post ============================================= -->
                        <div class="entry clearfix">

                        <!-- Entry Image============================================= -->
                        <div class="entry-image">
                            <?php 
                                if(has_post_thumbnail()){
                                    ?>
                                    <div class="entry-image">
                                        <a href="<?php echo the_permalink(); ?>">
                                        <?php the_post_thumbnail('full');
                                        ?>
                                        </a>
                                    </div>
                                    <?php
                                }
                
                             ?>
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
                                        ============================================= -->
                        <div class="entry-content notopmargin">
                            <?php 
                                the_content();
                                $defaults = array(
                                    'before' => '<p class="text-center">' . __('Pages', 'udemy'),
                                    'after' => '</p>',
                                );
                                wp_link_pages($defaults);
                             ?>
                            

                                <!-- Post Single - Content End -->

                            <div class="clear"></div>

                         </div>
                        </div><!-- .entry end -->


                        <div class="line"></div>

                        <?php 
                            if(comments_open() || get_comments_number()){
                                comments_template();

                            }
                         ?>
                       

                  <?php
              }
          
           ?>


      </div>

  </div>

</section><!-- #content end -->

<?php get_footer(); ?> 