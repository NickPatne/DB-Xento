<?php
$var = 'PHP Tutorial';
?>

<html>
  <head>
      <!-- Placed Variable in title Section -->
      <title><?php echo $var; ?> </title>  
        <style>
        body{
        font-size:50px;
            }
            </style>
  </head>
  <body>
      <div align="center">
            <!-- Placed Variable within H3 tag -->
          <h3><?php echo $var; ?></h3> 

                <!-- Variable as an anchor tag -->
              <p><a href="https://www.tutorialspoint.com/php/">Go to the <?php echo $var; ?></a></p>   
      </div>
  </body>
  </html>