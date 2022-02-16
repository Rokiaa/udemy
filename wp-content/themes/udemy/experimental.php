<?php 
/*
* Template Name: Experimental
*/


// this function will look for a file called header and include it at the very bottom of the file
get_header();
// header-v2.php --> get_header('v2') so we can make more headers
?>

 <!-- Page Title  ============================================= -->
 <section id="page-title">
        <div class="container clearfix">
            <h1>Experimental Code</h1>
        </div>
    </section><!-- #page-title end -->


<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">

    <div class="container clearfix">

          <?php
            // wp_loginout();

            single_post_title(); // this will output the title of the current post
         
           ?>


      </div>

  </div>

</section><!-- #content end -->

<?php get_footer(); ?> 