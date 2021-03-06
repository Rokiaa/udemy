<?php 
// this function will look for a file called header and include it at the very bottom of the file
get_header();
// header-v2.php --> get_header('v2') so we can make more headers
?>

<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">

    <div class="container clearfix">

      <!-- Post Content
      ============================================= -->
      <div class="postcontent nobottommargin clearfix">
          <?php
          // check if there are any posts using a conditional statement
          if(have_posts()){
              while(have_posts()){
                  the_post();
                  global $post;  // defined variable by WP and this contain properties about post
                  $author_ID = $post ->post_author;
                  $author_URL = get_author_posts_url($author_ID);
                  ?>
                    <div class="single-post nobottommargin">

                        <!-- Single Post ============================================= -->
                        <div class="entry clearfix">
                            
                        <!-- Entry Title ============================================= -->
                        <div class="entry-title">
                            <h2><?php the_title(); ?></h2>
                        </div><!-- .entry-title end -->


                        <!-- Entry Content
                                        ============================================= -->
                        <div class="entry-content notopmargin">
                            <a href="<?php echo $post->guid;?>">Direct Download</a>
                            <?php 
                               
                             the_content(); ?>
                            

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
          }
           ?>
       

</div>


      </div><!-- .postcontent end -->

<?php get_sidebar(); ?>

    </div>

  </div>

</section><!-- #content end -->

<?php get_footer(); ?> 