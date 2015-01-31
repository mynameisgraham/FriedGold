<?php
/**
 * The Header for the theme
 *
 * @package friedgold
 * @since 	friedgold 1.0
**/
global $ti_option; // Fetch options stored in $ti_option;
?><!DOCTYPE html>
<!--[if lt IE 9]><html <?php language_attributes(); ?> class="oldie"><![endif]-->
<!--[if !(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php
	if( ! is_home() ):
	  wp_title( '|', true, 'right' );
	endif;
	bloginfo( 'name' );
  ?></title>

<!-- Meta Viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php 
// Get the favicon
if ( $ti_option['site_favicon'] != '' ) { 
	$site_favicon = $ti_option['site_favicon'];
} else { 
	$site_favicon = get_template_directory_uri() . '/images/favicon.ico';
}
?>
<link rel="shortcut icon" href="<?php echo $site_favicon; ?>" />
<?php 
// Get the retina favicon
if ( $ti_option['site_retina_favicon'] != '' ) { 
	$retina_favicon = $ti_option['site_retina_favicon'];
} else { 
	$retina_favicon = get_template_directory_uri() . '/images/retina-favicon.png';
}
?>
<link rel="apple-touch-icon-precomposed" href="<?php echo $retina_favicon; ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class( 'cbp-spmenu-push' ); ?>>

<?php
// Main Menu

	if ( has_nav_menu( 'main_menu' ) ) :
		wp_nav_menu( array (
			'theme_location' => 'main_menu',
			'container' => 'nav',
			'container_class' => 'cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right',
			'container_id' => 'cbp-spmenu-s2',
//			'menu_id' => 'main-nav',
			'depth' => 2,
			'fallback_cb' => false,
			'walker' => new TI_Menu()
		 ));
	 else:
		echo '<div class="message warning"><i class="icon-warning-sign"></i>' . __( 'Define your site main menu', 'themetext' ) . '</div>';
	 endif;
?>   
   
<div id="layout">
    <header id="masthead" role="banner" class="clearfix">
        <div class="wrapper">
        
            <div id="branding" class="animated">
                <!-- Logo -->
				<?php 
                // Get the logo
                if ( $ti_option['site_logo'] != '' ) { 
                    $site_logo = $ti_option['site_logo'];
                } else { 
                    $site_logo = get_template_directory_uri() . '/images/logo.png';
                }
                ?>
                <a class="logo" href="<?php echo home_url( '/' ); ?>">
                    <img src="<?php echo $site_logo; ?>" alt="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>" title="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>" />
                </a>
                <!-- End Logo -->
                
                <?php 
                // Show or Hide site tagline under the logo based on Theme Options
                if( $ti_option['site_tagline'] == 1 ) {
                ?>
                <span class="tagline">
                    <?php bloginfo( 'description' ); ?>
                </span>
                <?php } ?>
                <a class="nav-link"><i id="showRightPush" class="fa fa-bars fa-2x"></i></a>
            </div>
            
            
    
        </div><!-- .wrapper -->     
    </header><!-- #masthead -->