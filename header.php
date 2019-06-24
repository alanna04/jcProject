<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title(' | ', true, 'right'); ?></title>
<link rel="shortcut icon" href="/wp-content/uploads/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<?php wp_head(); ?>
</head>
<body  <?php body_class(); ?>>
<header class=" uk-section-primary" >
<div class="uk-container">
<a id="logo" href="/" title="Home"><img src="/wp-content/uploads/logo-7.png" alt="Home" width="250" height="59"/></a>

<ul class="social-icons">
    <li><i class="fab fa-facebook-f"></i></li>
    <li><i class="fab fa-instagram"></i></li>
    <li><i class="fab fa-twitter"></i></li>
</ul>

<div class="clear"></div>
</div><!--End div class siteheader-->
</header>

<nav class="navbar nav-collapse" uk-sticky="animation: uk-animation-slide-top"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav><div class="clear"></div>

<?php if(is_page(6)) { ?><?php get_template_part( '_slideshow' ); ?><?php } ?>

<!--<div id="wrap" class="c-wrap" >
<div class="uk-container">  -->
