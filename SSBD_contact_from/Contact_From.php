<?php
/**

Plugin Name: Contact From 
Plugin URI: http://wordpress.org/plugins//
Description: Add New Contact From .
Author: Abu Nawim
Version: 1.6
Author URI: http://ma.tt/
*/


function Ssbd_shotcode($atts){

  if( isset($_POST['Submit'])){

		$firstname=$_POST['firstname'];

		$lastname=$_POST['lastname'];
		$email=bloginfo('admin_email');
		
		wp_mail( 'abunawimsub2014@gmail.com', $lastname, $firstname );

	
  }
    ob_start();

	?>



<form action="" method="post">
  First name:<br>
  <input type="text" name="firstname" value="">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="">
  <br><br>
  <input type="submit" value="Submit" name="Submit">
</form>


<?php

return ob_get_clean();

}

add_shortcode('shortcode_for_SSBD','Ssbd_shotcode');