<?php

$user = 'TSI';
$pass = 'SistemasInternet123';
$server = 'i9yueekhr9.database.windows.net';
$database = 'Kanino';

$connection_string = "DRIVER={SQL Server};SERVER=$server;DATABASE=$database"; 
$conn = odbc_connect($connection_string,$user,$pass);

if (!$conn) {
    die("Connection could not be established.");
}