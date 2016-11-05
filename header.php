<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Заголовок</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scole=1.0" />
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/linea/styles.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skins/<?php 
		$options = get_option('sample_theme_options');
		echo $options['selectinput'];
	 ?>.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />

	<?php wp_head(); ?>
</head>
<body>
	<div class="loader">
		<div class="loader-inner"></div>
	</div>
	<header class="main-head main-color-bg" data-z-index="1" data-position="center center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="logo-conteiner">
						
						<?php dynamic_sidebar('Name logo') ?>

					</div>
					<button class="toggle-mnu">
						<span class="sandwich">
							<span class="sw-topper"></span>
							<span class="sw-bottom"></span>
							<span class="sw-footer"></span>
						</span>
					</button>
					<nav class="top-mnu">
						<ul>
							<li><a href="#about">Обо мне</a></li>
							<li><a href="#resume">Резюме</a></li>
							<li><a href="#portfolio">Портфолио</a></li>
							<li><a href="#contacts">Контакты</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="top-wrapper">
			<div class="top-description">
				<div class="top-centred">
					<div class="top-text">
						<h1><?php echo bloginfo('name'); ?></h1>
						<p><?php echo bloginfo('description'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</header>