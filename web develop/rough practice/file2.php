<?php
    //echo readfile("sample.txt");
    $myfile=fopen("sample.txt",'r') or die("Unable to open a file");
    //echo fread($myfile,filesize());
     for($i=0;$i<2;$i++){
        while(!feof($myfile))
            echo "\033[32m".fgets($myfile)."\033[0m";
            echo "\n";
        rewind($myfile);
     }
    // //echo fgets($myfile);
    // fclose($myfile);
?>