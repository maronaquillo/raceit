<?php get_header(); ?>
<div class="main-content post">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<div class="col-md-12">
			<?php the_content(); ?>
		</div>
	</div>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div>
<?php get_footer();?>