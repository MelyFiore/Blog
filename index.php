<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blog</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/estilos.css">

</head>
<body>
	<header class="container">

		<div class="row">
			<div class="col-sm-3">
				<img src="<?php bloginfo('template_url'); ?>/logonina.jpg" width="100px">
			</div>

			<div class="col-sm-9">
				<ul class="cabeza">			    
					<li >
					  	<a href="detalles.html">Biografía</a>
					</li>
				    <li>
				    	<a href="#">Fotos</a>
				    </li>
				    <li>
				       <a href="#">Videos</a>
				    </li>
				</ul>
			</div>
		</div>
	</header>

	<section class="container">	

	<?php $articulos = new WP_Query([
			'showposts' => 5,
			]);	
	while ($articulos->have_posts()) {
		$articulos->the_post(); ?>





				<?php the_post_thumbnail("medium"); ?>
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>




	<?php } ?>

		
		
	</section>
	<footer class="container">
			<ul class="pie">
		        <i class="fa fa-facebook-square" aria-hidden="true"></i>
		        <i class="fa fa-instagram" aria-hidden="true"></i>
		        <i class="fa fa-twitter-square" aria-hidden="true"></i>
    		</ul>
	</footer>
</body>
</html>