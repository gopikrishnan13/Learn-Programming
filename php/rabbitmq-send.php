<?php

    require_once __DIR__ . '/vendor/autoload.php';
    use PhpAmqpLib\Connection\AMQPStreamConnection;
    use PhpAmqpLib\Message\AMQPMessage;
    $text = 'kiss';

    try{
    $connection = new AMQPStreamConnection('172.21.0.50',5672,'Gopik','krishnan','GopiKrishnan_test');
    // die('conn okay');
    $channel = $connection->channel();
    $channel->queue_declare('hello',false,false,false,false);

    $msg = new AMQPMessage($text);
    $channel->basic_publish($msg, '', 'hello');

    echo "[x] Sent '$text'";

    $channel->close();
    $connection->close();
    }catch(Exception $e){
        // var_dump($e);
        echo $e;
        echo 'failed';
    }