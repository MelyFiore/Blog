<? get_header(); ?>

<?php while (have_posts()) { the_post();

	the_title();
	echo "<hr";

} ?>

<? get_footer(); ?>