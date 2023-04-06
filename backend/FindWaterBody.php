<?php

include('ConnectToDatabase.php');

use App\classes\WaterBody;

$name = $_POST['name'];
$types = $_POST['types'];

WaterBody::getFilteredResult($name, $types, $connection);