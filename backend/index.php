<?php

use classes\Base;
use classes\WaterBody;
use classes\Tariff;

include('ConnectToDatabase.php');

$name = $connection->real_escape_string($_POST['name']);
$type = $connection->real_escape_string($_POST['type']);

if ($name && !$type)
    $query = "SELECT * FROM waterbody WHERE waterbody_name='$name'";
elseif ($name && $type)
    $query = "SELECT * FROM waterbody WHERE waterbody_name='$name' OR waterbody_type='$type'";

$result = $connection->query($query);

if (!$connection->errno) {
    foreach ($result as $row) {
        echo $row['waterbody_id'] . ' ' . $row['area'] . ' ' . $row['waterbody_name'] . '<br>';
    }
} else {
    echo $connection->error;
}
