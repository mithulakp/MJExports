<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mjexports
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" href="<?php echo get_field('favicon', 'option')["url"]; ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <header class="site-header">
        <div class="container">
            <div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php if ( get_field('logo', 'option') ) : ?>
					
					<img src="<?php echo get_field('logo', 'option')["url"]; ?>" alt="<?php echo get_field('logo', 'option')["alt"]; ?>">
				<?php endif; ?>
				
				</a>
			</div>
			<div id="burger">
				<button class="hamburger hamburger--elastic ripple" type="button">
					<span class="hamburger-box"><span class="hamburger-inner"></span></span>
				</button></div>
            <nav  id="global_menu">
                <div class="navbar">
					<div class="close-menu">
						<div id="close-btn">
							<div class="close-btn">
								<div class="close-btn-line"></div>
							</div>
						</div>
					</div>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
                </div>
            </nav>

        </div>
    </header>