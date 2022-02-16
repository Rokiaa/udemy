<?php 
// this function will look for a file called header and include it at the very bottom of the file
get_header();
// header-v2.php --> get_header('v2') so we can make more headers
?>

		<!-- Page Title	============================================= -->
		<section id="page-title">
			<div class="container clearfix">
				<h1><?php _e('Page Not Found', 'udemy'); ?></h1>
			</div>
		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_half nobottommargin">
						<div class="error404 center">404</div>
					</div>

					<div class="col_half nobottommargin col_last">

						<div class="heading-block nobottomborder">
							<h4><?php _e("Ooopps! The Page you were looking for, couldn't be found.", 'udemy'); ?></h4>
							<span><?php _e("Try searching for the best match or browse the links below:", 'udemy'); ?></span>
						</div>
                        <?php
                          // this function search for a file called search form and load it -->

                          get_search_form(); ?>

					</div>

				</div>

			</div>

		</section><!-- #content end -->

<?php get_footer(); ?> 