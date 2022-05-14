<?php

    $time = -microtime(true);
   echo 'runing...'.PHP_EOL.date('H:i:s').PHP_EOL;
   sleep(60);
    // sleep(3);
//    for($i=0; $i<100;$i++)
//    {
//        echo rand(1000, 9999),'<br>';
//    }
echo "end...:",date('H:i:s').PHP_EOL;
$time += microtime(true);
//    echo (PHP_EOL."start at : $s and end at $e".PHP_EOL."Difference : ");
   echo PHP_EOL,"runtime:",sprintf('%f', $time).PHP_EOL;