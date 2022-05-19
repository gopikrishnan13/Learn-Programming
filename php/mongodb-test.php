<pre>
<?php
    require_once "vendor/autoload.php";

     $client = new MongoDB\Client('mongodb://gopikrish:krishnan@mongodb.selfmade.ninja:27017/?authSource=users');
     $db = $client->gopikrish_test;
     $coll = $db->gopi;
     $res = $coll->insertOne(['user'=>'gopi','age'=>19]);
     var_dump($res);
     printf("Inserted %d documents\n",$res->getInsertedCout());
     var_dump($res->getInsertedId());
     



?>
</pre>