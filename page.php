<?php get_header(); ?>
<main class="page">
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="headline column full spacer">
			<img src="<?php echo get_template_directory_uri(); ?>/images/headline.jpg">
			<h1><i class="fa <?php get_field('icon_class'); ?>"></i><?php the_title(); ?></h1>
		</div>
		<div class="column fourth spacer">
			<div class="white-wrap sidebar taligncenter">
				<img class="decor" src="<?php echo get_template_directory_uri(); ?>/images/top-decor.png">
				<?php get_sidebar(); ?>
				<img class="decor" src="<?php echo get_template_directory_uri(); ?>/images/bottom-decor.png">
			</div>
		</div>
		<div class="column three-fourths spacer">
			<div class="white-wrap content">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; endif; ?>
</div>
</main>
<?php get_footer(); ?>