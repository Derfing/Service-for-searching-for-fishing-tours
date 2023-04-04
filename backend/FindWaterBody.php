<?php

require_once("E:\\Учеба\\Программирование\\LAB_3\\Service-for-searching-for-fishing-tours\\backend\\classes\\WaterBody.php");
require_once("E:\\Учеба\\Программирование\\LAB_3\\Service-for-searching-for-fishing-tours\\backend\\classes\\Base.php");
require_once("E:\\Учеба\\Программирование\\LAB_3\\Service-for-searching-for-fishing-tours\\backend\\classes\\Tariff.php");

use App\classes\Base;
use App\classes\WaterBody;
use App\classes\Tariff;

include('ConnectToDatabase.php');

$name = $_POST['name'];
$types = $_POST['types'];

WaterBody::getFilteredResult($name, $types, $connection);