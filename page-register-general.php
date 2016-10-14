<?php
/**
 * Template Name: Register
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php 
	if (empty($_POST["step"])){
		$step=1;
	}
	else{
		$step = $_POST["step"];
	}
register_form($step) ?>


<?php get_footer(); ?>