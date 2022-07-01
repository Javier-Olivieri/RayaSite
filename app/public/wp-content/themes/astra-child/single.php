<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>
    <?php the_field( 'top_products' ); ?>
    <?php the_field( 'blog' ); ?>
    <?php the_field( 'big_deals_of_the_week_' ); ?>
    <?php the_field( 'about' ); ?>
    <?php the_field( 'home' ); ?>
    <?php the_field( 'services' ); ?>
    
<h2 style="display:flex;justify-content:center;font-family:arial;font-weight:700;font-size:35px;text-decoration:underline; color:white; margin-bottom:20px">Datos Almacenados </h2>    

<div style="display:grid;justify-content:center">
<h2 style="font-family:arial; font-weight:bold;color:white">Nombre:</h2><div style="border:2px solid black; background-color:white; padding:20px; text-align:center"><?php the_field( 'acf_nombre' ); ?></div>
<br>
<h2 style="font-family:arial; font-weight:bold;color:white">Rut:</h2><div style="border:2px solid black; background-color:white; padding:20px; text-align:center"><?php the_field( 'acf_rut' ); ?></div>
<br>

<h2 style="font-family:arial; font-weight:bold;color:white">Dirección:</h2><div style="border:2px solid black; background-color:white; padding:20px; text-align:center"><?php the_field( 'acf_direccion' ); ?></div>
<br>

<h2 style="font-family:arial; font-weight:bold;color:white">Teléfono:</h2><div style="border:2px solid black; background-color:white; padding:20px; text-align:center"><?php the_field( 'acf_telefono' ); ?></div>

</div>




		

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>