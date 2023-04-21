<?php

include('ConnectToDatabase.php');

use App\classes\WaterBody;

$name = $_GET['name'];
$types = $_GET['types'];

return WaterBody::getFilteredResult($name, $types, $connection);