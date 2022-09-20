<?php
/**
 * The Header for our theme.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Homepage</title>
<?php wp_head() ?>

</head>
<body>
<!-- Header Start -->
<header class="site-header">
	<div class="container">
		<button class="site-header__nav-toggle" type="button" data-toggle="class" data-target="#site-nav" data-class="site-header__nav--visible">
			<svg class="logo--img hamburger animate__animated animate__fadeInDown" xmlns="<?php echo get_template_directory_uri(); ?>/http://www.w3.org/2000/svg" width="42.358" height="39" viewBox="0 0 42.358 39">
			  <g id="Component_130_1" data-name="Component 130 – 1" transform="translate(0 3.5)">
			    <line id="Line_69" data-name="Line 69" x2="42.358" fill="none" stroke="#EEDD4F" stroke-width="7"/>
			    <line id="Line_70" data-name="Line 70" x2="42.358" transform="translate(0 16)" fill="none" stroke="#EEDD4F" stroke-width="7"/>
			    <line id="Line_71" data-name="Line 71" x2="42.358" transform="translate(0 32)" fill="none" stroke="#EEDD4F" stroke-width="7"/>
			  </g>
			</svg>
			<svg class="logo--img close" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="<?php echo get_template_directory_uri(); ?>/http://www.w3.org/2000/svg">
			<line x1="21.6464" y1="21.5667" x2="0.433242" y2="0.353548" stroke="#EEDD4F"/>
			<line y1="-0.5" x2="30" y2="-0.5" transform="matrix(0.707107 -0.707107 -0.707107 -0.707107 0 21.2132)" stroke="#EEDD4F"/>
			</svg>
		</button>
		<a class="site-header__logo" href="home">
			<?php $logo=get_field('option','logo');?>
			<img class="animate__animated animate__fadeInLeft" src="<?php the_field('logo', 'option'); ?>">
		</a>
		<div id="site-nav" class="site-header__nav animate__animated animate__fadeInDown">
			<nav class="site-header__top-nav">
				<?php $navmenu = get_field('menu', 'option');
				echo $navmenu;?>
				<ul id="menu-main-menu">
					<li class="menu-item">
						<a href="">
							<?php $linkedin_icon = get_field('linkedin_icon_','option');?>
							  <img src="<?php echo esc_url($linkedin_icon['url']); ?>" alt="<?php echo esc_attr($linkedin_icon['alt']); ?>"/>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<!-- Header End -->
