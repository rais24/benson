<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head> 
<meta charset="<?php bloginfo( 'charset' ); ?>" />  
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php if (get_theme_mod( RT_THEMESLUG.'_favicon_url')):?><link rel="icon" type="image/png" href="<?php echo esc_url(get_theme_mod( RT_THEMESLUG.'_favicon_url'));?>"><?php endif;?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action("rt_after_body"); ?>

<!-- loader -->
<div id="loader-wrapper"><div id="loader"></div></div>
<!-- / #loader -->

<!-- background wrapper -->
<div id="container">   
<?php do_action("rt_after_container"); ?> 
<?php get_template_part("header", $GLOBALS['rt_layout'] ); ?>