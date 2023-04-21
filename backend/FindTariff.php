<?php

include("ConnectToDatabase.php");

use App\classes\Tariff;

$seasons = $_GET['seasons'];
$maxPrice = $_GET['maxPrice'];

// print_r($seasons);
// echo('<br>-------------<br>');
// print_r($maxPrice);

return Tariff::getFilteredResult($seasons, $maxPrice, $connection);