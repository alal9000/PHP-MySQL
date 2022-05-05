<?php
  // create short variable name containing document root
  $document_root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bob's Auto Parts - Customer Orders</title>
  </head>
  <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Customer Orders</h2> 
    <?php

    if (file_exists("$document_root/orders.txt")) {         // check if file exist
      echo 'There are orders waiting to be processed'.'<br>'.'<br>';
    } else {
      echo 'There are currently no orders';
    }

    echo filesize("$document_root/orders.txt")."<br>"."<br>";

    echo nl2br(filesize("$document_root/orders.txt"));





      $fp = fopen("$document_root/orders.txt", 'rb'); // Open file from the server
      flock($fp, LOCK_SH); // Lock file for reading

      $viewpage = file_get_contents("$document_root/orders.txt"); // Get file contents
      echo $viewpage;                             // Print file contents

      if (!$fp) {                                 // Print alert if file is empty
        echo "<p><strong>No orders pending.<br />
              Please try again later.</strong></p>";
        exit;
      }

      while (!feof($fp)) {                      // Loop to test end of file
         $order= fgets($fp);                    // Read each line at a time with fgets
         echo htmlspecialchars($order)."<br />";     // Print each line to the page
      }

      echo 'final position of the pointer is '.(ftell($fp));
      echo '<br>';
      rewind($fp);
      echo 'after rewind the position is '.(ftell($fp));
      echo '<br>';

      flock($fp, LOCK_UN); // Release read lock
      fclose($fp);        // Close file
      
      //-- fooling --
      $numbers = range(1,10, 2);
      echo var_dump($numbers);
    
      echo var_dump($numbers);


      $range1 = range('a', 'z');
      echo var_dump($range1) . "<br>";

      $products = ['tires', 'oil', 'spark plugs'];

      $products[3] = 'fuses';

      echo "$products[0] $products[1] $products[2] $products[3]"."<br>";

      foreach ($products as $current) {
        echo $current." "."<br>";
      }

      $prices['tires'] = 100;
      $prices['oil'] = 10;
      $prices['spark plugs'] = 4;

      for ($row = 0; $row < 3; $row++) {
        while (list( $key, $value ) = each($products[$row])) {
          echo '|'.$value;
        }
        echo '|<br>';
      }

    ?>
  </body>
</html>