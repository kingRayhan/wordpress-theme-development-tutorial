<?php get_header(); ?>


<?php echo get_template_part('template-parts/slider'); ?>


	<!-- //top-header and slider -->
	<div class="container">
		<div class="banner-btm-agile">
		<!-- //btm-wthree-left -->
			<div class="col-md-9 btm-wthree-left">
				<?php echo get_template_part('template-parts/blog-loop'); ?>
			</div>
			<!-- //btm-wthree-left -->
				<!-- btm-wthree-right -->
			<div class="col-md-3 w3agile_blog_left">
				<?php get_sidebar(); ?>
			</div>
			<!-- //btm-wthree-right -->
			<div class="clearfix"></div>
		</div>
	</div>



<?php get_footer(); ?>