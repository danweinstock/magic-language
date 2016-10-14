<?php
/**
 * Template Name: Registration-Thankyou
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>

<h1> Thank You for registering with Magic Languages! </h1>
<p> Thank you for registering with Magic Languages! You will recieve an email
	confirmation with an order receipt and further information about your
	program and login information for further online resources</p>
<?php
	echo '<img src="'.get_bloginfo("stylesheet_directory").'/images/bunny/black_">'."<br>";
?>
<h2> Stay in the know! Subscribe to our newsletter today!</h2>
<form>
	<input type="text" placeholder="Enter your Email Address" name="subscribe-box">
	<button type="button"> Subscribe </button>
</form>

<?php
get_footer();


?>