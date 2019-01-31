<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Instagram OAuth Login - 9lessons Demo</title>


  </head>
  <body>

    <?php

      require 'instagram.class.php';
      require 'instagram.config.php';
      
      // Display the login button
      $loginUrl = $instagram->getLoginUrl();
      echo '<a class="button" href="'.$loginUrl.'">Sign in with Instagram</a>';
    ?>

  </body>

</html>