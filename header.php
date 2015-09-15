<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title>
		<?php wp_title(' - ', true, 'right'); ?>
		<?php bloginfo('name'); ?>
	</title>

	<meta name="viewport" content="width=device-width" />
	<meta property="fb:admins" content="1800352526" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700|Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css" rel="stylesheet" type="text/css" />
	
	<?php wp_head(); ?>

	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-66718382-1', 'auto');
	ga('send', 'pageview');

	</script>

</head>

<body <?php body_class(); ?>>

	<!-- VIDEO -->
	<video class="video-bg" autoplay loop>
		<source src="<?php echo get_template_directory_uri(); ?>/video/background.mp4"></source>
	</video>

	<section class="intro-content">
		<div class="header-logo">
			<a href="<?php echo get_home_url(); ?>"><h1><?php echo __("Frank Vuong", "frankvuong"); ?></h1></a>
			<h3 class="sub-title"><?php echo __("Aspiring Web Developer","frankvuong"); ?></h3>			
		</div>
	</section>

	<section id="container">
		<header id="header">
			<div class="wrapper">
				<h2 class="projects-title"><?php echo __("Projects"); ?><a id="nav-toggle" href="javascript:void(0);"><span></span></a></h2>
				
				<!-- QUERY PROJECT POSTS -->
				<?php 
				query_posts(array(
					'post_type' =>'post',
					'order' => 'ASC',
					));
					?>
					<ul class="project-links">

						<?php if ( have_posts() ) :

						while ( have_posts() ) : the_post(); ?>
						
						<li>
							<a href="javascript:void(0);" data-id="<?php echo $post->ID; ?>"><?php the_title(); ?></a>
						</li>

					<?php endwhile; endif; ?>

				</ul>




			</div> <!-- WRAPPER -->






		</header>

