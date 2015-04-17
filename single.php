<?php get_header(); ?>
<main class="blog">
	<div class="container">
		<div class="headline column full spacer">
			<img src="<?php echo get_template_directory_uri(); ?>/images/cheese-headline.jpg">
			<h1>Cheese Lovers Blog</h1>
		</div>
		<div class="column three-fourths spacer">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('full', array('class' => 'full'));
			} 
			?>
			<article class="white-wrap content">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</article>
			<div class="white-wrap content comments">
				<?php comment_form(); ?>
			</div>
		<?php endwhile; endif; ?>
	</div>
	<div class="column fourth spacer">
		<div class="white-wrap content sidebar">
			<h4>Recent Posts</h4>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article>
				<a href="<?php the_permalink(); ?>">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('thumbnail', array('class' => 'alignleft thumbnail'));
					} 
					?>
				</a>
				<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			</article>
		<?php endwhile; endif; ?>
	</div>
</div>
</div>
</main>
<?php get_footer(); ?>