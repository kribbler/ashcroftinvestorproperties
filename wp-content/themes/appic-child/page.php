<?php get_header(); ?>
<div class="whiteish margin_40">
	<div class="container page-content">
		<?php if (have_posts()): ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<?php get_template_part('404'); ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
