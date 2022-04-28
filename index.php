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
			'showposts' => 3,
			]);	
	while ($articulos->have_posts()) {
		$articulos->the_post();

		the_title();
		echo '<hr>';
	} ?>
		
		<div class="row">
			<div class="col-sm">
				<img src="<?php bloginfo('template_url'); ?>/nina2.png" width="400px">
				<h3><a href="#">Su audición</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div class="col-sm">
			<div>
				<img src="<?php bloginfo('template_url'); ?>/nina1.jpg" width="400px">
				<h3><a href="#">Su participación en NIZI Project</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-sm">
				<img src="<?php bloginfo('template_url'); ?>/ninaniziu.jpg" width="400px">
				<h3><a href="#">Con su girl group debut</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>		
		
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