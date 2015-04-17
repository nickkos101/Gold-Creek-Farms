<?php get_header(); ?>
<main>
	<div class="container">
		<div class="column full spacer">
			<div class="slider">
				<?php query_posts(array('posts_per_page' => 25, 'post_type' => 'slider')); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="slide">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('full');
					} 
					?>
					<div class="overlay spacer">
						<div class="bgo third taligncenter">
							<img src="<?php echo get_template_directory_uri(); ?>/images/top-decor.png">
							<h2><?php the_title(); ?></h2>
							<p><?php the_field('slider_overlay_content'); ?></p>
							<a href="<?php the_field('slide_link'); ?>" class="btn">Shop Now</a>
							<img src="<?php echo get_template_directory_uri(); ?>/images/bottom-decor.png">
						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
	<div class="column third spacer hpa-content">
		<?php $image = get_field('content_block_1_image', 'options'); ?>
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<div class="overlay">
			<div class="bgo three-fourths">
				<h3><a href="<?php the_field('content_area_1_link'); ?>"><?php the_field('content_area_1_title', 'options'); ?></a></h3>
				<p><?php the_field('content_area_1_blurb', 'options'); ?></p>
			</div>
		</div>
	</div>
	<div class="column third spacer hpa-content">
		<?php $image = get_field('content_block_2_image', 'options'); ?>
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<div class="overlay">
			<div class="bgo three-fourths">
				<h3><a href="<?php the_field('content_area_2_link'); ?>"><?php the_field('content_area_2_title', 'options'); ?></a></h3>
				<p><?php the_field('content_area_2_blurb', 'options'); ?></p>
			</div>
		</div>
	</div>
	<div class="column third spacer hpa-content">
		<div class="rel">
			<?php $image = get_field('content_block_3_image', 'options'); ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<div class="purple-overlay">
				<div class="bgo three-fourths">
					<h3>From The Blog</h3>
					<?php query_posts(array('posts_per_page' => 3, 'post_type' => 'post')); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<p><?php the_title(); ?></p>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>
</div>
<div class="mailing-list">
	<div class="container">
		<div class="column full spacer">
			<h3>Join The Cheese Lover's Mailing List</h3>
			<form action="//goldcreekfarms.us8.list-manage1.com/subscribe/post?u=fb98dc2d5ff54006485c96fd7&amp;id=2291388c0c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your Email Address">
				<div style="position: absolute; left: -5000px;"><input type="text" name="b_fb98dc2d5ff54006485c96fd7_2291388c0c" tabindex="-1" value=""></div>
				<input type="submit" value="Go" name="subscribe" id="mc-embedded-subscribe" class="button">
			</form>
		</div>
	</div>
</div>
</div>
</main>
<?php get_footer(); ?>