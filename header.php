<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9]><html class="no-js ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php echo basic_wp_seo(); ?>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body <?php body_class(); ?> itemscope="" itemtype="http://schema.org/WebPage">

<div class="page-wrap">

	<div class="fixed">
		<div class="container">
			<div class="sixteen columns border-btm">
				<header>

					<div class="logo"><a href="<?php bloginfo('url'); ?>" target="_parent"><img src="<?php echo( get_header_image() ); ?>" alt="<?php _e( 'WONDERLAND', 'wl' ); ?>" /></a></div>

					<div class="mobileNav">
						<div class="mobileNavBtn closed"></div>
						<div class="mobileNavBtn open"></div>

						<nav>
							<ul>
								<li><a class="filterBtn selected" data-filter="*"><?php _e( 'all', 'wl' ); ?></a></li>
								<?php
									$taxonomies = array(
										'type'
									);
									$args = array(
										'hide_empty' => true,
										'orderby' => 'id',
										'exclude' => '5'
									);
									$types = get_terms($taxonomies, $args);
									foreach ( $types as $type ) {
										if( ++$count > 10 ) break;
											echo '<li><a class="filterBtn link'.$type->name.'" data-filter=".type-'.$type->slug.'">'.$type->name.'</a></li>';
									}
								?>
								<li class="break">&middot;</li>
								<li><a href="#about" class="aboutBtn"><?php _e( 'About', 'wl' ); ?></a></li>
							</ul>
						</nav>

					</div>

					<nav>
						<ul>
							<li class="filter"><?php _e( 'Filter &raquo;', 'wl' ); ?></li>
							<li><a class="filterBtn selected" data-filter="*"><?php _e( 'all', 'wl' ); ?></a></li>
							<?php
								$taxonomies = array(
									'type'
								);
								$args = array(
									'hide_empty' => true,
									'orderby' => 'id',
									'exclude' => '5'
								);
								$types = get_terms($taxonomies, $args);
								foreach ( $types as $type ) {
									if( ++$count > 10 ) break;
										echo '<li><a class="filterBtn link'.$type->name.'" data-filter=".type-'.$type->slug.'">'.$type->name.'</a></li>';
								}
							?>
							<li class="break">&middot;</li>
							<li><a href="#about" class="aboutBtn"><?php _e( 'About', 'wl' ); ?></a></li>
						</ul>
					</nav>

				</header>
			</div>

		</div>
	</div><!--fixed-->