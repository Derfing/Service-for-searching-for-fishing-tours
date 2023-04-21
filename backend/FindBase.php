<?php

include("ConnectToDatabase.php");

use App\classes\Base;

$name = $_GET['baseName'];
$regionName = $_GET['regionName'];

return Base::getFilteredResult($name, $regionName, $connection);