<?php

include("ConnectToDatabase.php");

use App\classes\Tariff;

$seasons = $_POST['seasons'];
$maxPrice = $_POST['maxPrice'];

// print_r($seasons);
// echo('<br>-------------<br>');
// print_r($maxPrice);

Tariff::getFilteredResult($seasons, $maxPrice, $connection);