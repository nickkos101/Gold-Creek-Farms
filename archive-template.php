<?php /* Template Name: Blog Page */ get_header(); ?>
<main class="blog">
	<div class="container">
		<div class="headline column full spacer">
			<img src="<?php echo get_template_directory_uri(); ?>/images/cheese-headline.jpg">
			<h1>Cheese Lovers Blog</h1>
		</div>
		<div class="column three-fourths spacer">
			<?php query_posts(array('posts_per_page' => 25)); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="post white-wrap content">
				<div class="column half">
					<p class="date">
						<time class="month"><?php the_time('F'); ?></time>
						<time class="day"><?php the_time('j'); ?></time>
						<time class="year"><?php the_time('y'); ?></time>
					</p>
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('medium', array('class' => 'ft-img'));
					} 
					?>
				</div>
				<div class="column half">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="btn">Read More</a>
				</div>
			</article>
		<?php endwhile; endif; ?>
	</div>
	<div class="column fourth spacer">
		<div class="white-wrap content sidebar">
			<img class="decor" src="<?php echo get_template_directory_uri(); ?>/images/top-decor.png">
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
		<img class="decor" src="<?php echo get_template_directory_uri(); ?>/images/bottom-decor.png">
	</div>
</div>
</div>
</main>
<?php get_footer(); ?>