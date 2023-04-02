<?php

$connection = new mysqli('127.0.0.1:3306', 'admin', '10022004qwertY', 'Turs');

if($connection->connect_error)
{
    die("Error - $connection->errno");
}