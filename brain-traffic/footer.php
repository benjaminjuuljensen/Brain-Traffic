<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brain_Traffic
 */

?>

	<footer id="colophon" class="site-footer">
		<form style="border:1px solid #ccc">
  <div class="container">
    <h1>Join the Brain Traffic mailing list</h1>
    <p>Sign up for email about upcoming events, new posts, and other delightful tidbits.</p>
    <hr>

    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="" name="fname" required>

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="" name="lname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="" name="" required>


    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

<?php wp_footer(); ?>

</body>
</html>
