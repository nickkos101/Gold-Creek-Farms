<?php /* Template Name: About Page */ get_header(); ?>
<main class="page">
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="headline column full spacer">
			<img src="<?php echo get_template_directory_uri(); ?>/images/headline.jpg">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="column third spacer hpa-content">
			<a href="/about/our-story/">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Our-story.jpg">
				<div class="overlay">
					<div class="bgo three-fourths">
						<h3>Our Story</h3>
						<p>From A Ranch In Utah...</p>
					</div>
				</div>
			</a>
		</div>
		<div class="column third spacer hpa-content">
			<a href="/about/cheese-maker-fernando/">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Our-Cheese-Maker.jpg">
				<div class="overlay">
					<div class="bgo three-fourths">
						<h3>Cheese-Maker</h3>
						<p>The Artist Behind Our Cheese</p>
					</div>
				</div>
			</a>
		</div>
		<div class="column third spacer hpa-content">
			<a href="/about/our-team/">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Our-Team.jpg">
				<div class="overlay">
					<div class="bgo three-fourths">
						<h3>Our Team</h3>
						<p>Ranchers &amp; Animal Lovers</p>
					</div>
				</div>
			</a>
		</div>
		<div class="column third spacer hpa-content">
			<a href="/about/gold-creek-ranch/">
				<img src="<?php echo get_template_directory_uri(); ?>/images/The-Ranch2.jpg">
				<div class="overlay">
					<div class="bgo three-fourths">
						<h3>The Ranch</h3>
						<p>A Wilderness Paradise</p>
					</div>
				</div>
			</a>
		</div>
		<div class="column third spacer hpa-content">
			<a href="/about/photo-gallery/">
			<img src="<?php echo get_template_directory_uri(); ?>/images/Photo-Gallery.jpg">
			<div class="overlay">
				<div class="bgo three-fourths">
					<h3>Photo Gallery</h3>
					<p>A Visual Experience</p>
				</div>
			</div>
		</a>
		</div>
		<div class="column third spacer hpa-content">
			<img src="<?php echo get_template_directory_uri(); ?>/images/Venue-Reservation.jpg">
		</div>
	<?php endwhile; endif; ?>
</div>
</main>
<?php get_footer(); ?>