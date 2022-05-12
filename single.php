<?php get_header(); ?>

	<section class="container detalles">
			
			<h1><?php the_title(); ?></h1>
			<p class="resumen">Resumen: <?php the_field('resumen'); ?></p>
			<?php the_post_thumbnail("large"); ?>
			<?php the_content(); ?>
			<h4>Fuente: <?php the_field('fuente'); ?></h4>
			

	</section>
	
	<?php get_footer(); ?>