
<?php
//require 'db.php';
require 'instagram.class.php';
require 'instagram.config.php';

// Receive OAuth code parameter
$code = $_GET['code'];


// Check whether the user has granted access
if (true === isset($code)) {
	
			// Receive OAuth token object
		  $data = $instagram->getOAuthToken($code);

} 
else 
{
// Check whether an error occurred
if (true === isset($_GET['error'])) 
{
    echo 'An error occurred: '.$_GET['error_description'];
}

}

?>
