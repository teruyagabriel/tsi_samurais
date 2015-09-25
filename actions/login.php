<?php

$password = $_POST['password'];
$user = $_POST['username'];

include 'connect.php';

$querytest = odbc_exec($conn, 'SELECT * FROM Usuario;');