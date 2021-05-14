<?php 

   /** 
   * Create an empty text file called counterlog.txt and  
   * upload to the same directory as the page you want to  
   * count hits for. 
   *  
   * Add this line of code on your page: 
   * <?php include "text_file_hit_counter.php"; ?> 
   */ 

  // Open the file for reading 
  $fp = fopen("counterlog.txt", "r"); 

  // Get the existing count 
  $count = fread($fp, 1024); 

  // Close the file 
  fclose($fp); 

  // Add 1 to the existing count 
  $count = $count + 1; 

  // Display the number of hits 
  // If you don't want to display it, comment out this line    
  echo "<p>Page views:" . $count . "</p>"; 

  // Reopen the file and erase the contents 
  $fp = fopen("counterlog.txt", "w"); 

  fwrite($fp, $count); 

  // Close the file 
  fclose($fp); 

 ?> 
