<?php
$host = "172.21.1.66";
$user = "gopikrish";
$pass = "krishnan";
$db = "gopikrish_notes_task";

$conn = new mysqli("mysql.selfmade.ninja", "gopikrish", "krishnan", "gopikrish_task");

echo $_REQUEST['r'] . '<br>';

$title = $_REQUEST['r'];
echo $title . "\n";

$q = " SELECT * FROM `notes_task` WHERE `title`= '$title' AND `id` = 8 ";

// $q = "/* SELECT * FROM `notes_task` WHERE `title`= 'gopi'AND `id` = 3 */ SELECT * FROM `notes_task` WHERE `title` = 'copy'";

echo $q . "\n";
$res = $conn->query($q);

if ($res) {
    var_export($res->fetch_all());
} else echo "Failed\n";
