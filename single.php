<?php get_header(); ?>

	<section class="container detalles">
			<?php the_post_thumbnail("large"); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
	</section>
	
	<?php get_footer(); ?>