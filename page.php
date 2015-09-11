
<?php get_header(); ?>


<div id="main">
	<section id="content">
		<div class='out-wrapper'>
			<div class='wrapper'>
				<?php /* begin the loop */ if (have_posts()) : ?>
				
				<?php while (have_posts()) : the_post(); ?>
				<?php the_title(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
</div>

<?php get_footer(); ?>
