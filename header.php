<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head();?>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

</head>

<body <?php body_class(); ?>>