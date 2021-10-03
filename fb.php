<?php
    extract($_REQUEST);
    $file=fopen("fb.html","a");


    fwrite($file,"Name :");
    fwrite($file, $name ."\n");
    
    
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    
    
    fwrite($file,"SUBJECT :");
    fwrite($file, $sub ."\n");
    
    
    fwrite($file,"Massage :");
    fwrite($file, $msg ."\n");
    fclose($file);
    header("location: http://rkofficial.c1.biz/Rk%20portfolio/index.html");
 ?>
