<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mirak
 */
/**
* Hook - mirak_action_doctype.
*
* @hooked mirak_doctype -  10
*/
do_action( 'mirak_action_doctype' );
?>
<head>
<?php
/**
* Hook - mirak_action_head.
*
* @hooked mirak_head -  10
*/
do_action( 'mirak_action_head' );
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<?php

/**
* Hook - mirak_action_before.
*
* @hooked mirak_page_start - 10
*/
do_action( 'mirak_action_before' );

/**
*
* @hooked mirak_header_start - 10
*/
do_action( 'mirak_action_before_header' );

/**
*
*@hooked mirak_site_branding - 10
*@hooked mirak_header_end - 15 
*/
do_action('mirak_action_header');

/**
*
* @hooked mirak_content_start - 10
*/
do_action( 'mirak_action_before_content' );

/**
 * Banner start
 * 
 * @hooked mirak_banner_header - 10
*/
do_action( 'mirak_banner_header' );  
