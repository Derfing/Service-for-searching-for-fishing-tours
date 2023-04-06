<?php

require_once("E:\\Учеба\\Программирование\\LAB_3\\Service-for-searching-for-fishing-tours\\backend\\classes\\WaterBody.php");
require_once("E:\\Учеба\\Программирование\\LAB_3\\Service-for-searching-for-fishing-tours\\backend\\classes\\Base.php");
require_once("E:\\Учеба\\Программирование\\LAB_3\\Service-for-searching-for-fishing-tours\\backend\\classes\\Tariff.php");

$connection = new mysqli('127.0.0.1:3306', 'admin', '10022004qwertY', 'Turs');

if($connection->connect_error)
{
    die("Error - $connection->errno");
}