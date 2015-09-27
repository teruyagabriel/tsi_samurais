<?php
session_start();
//verifica se o campo foi inserido antes de atribuir o valor a variavel
if (isset($_POST['username'])) $username = $_POST['username'];
if (isset($_POST['password'])) $password = $_POST['password'];

include 'connect.php';

/*$queryTest = odbc_exec($conn, 'SELECT * FROM Usuario;');*/

$queryUsuario = odbc_exec($conn, "SELECT * FROM Usuario WHERE loginUsuario = '" . $username . "' AND senhaUsuario = '" . $password . "';");

$isUsuarioValido = odbc_fetch_row($queryUsuario);


if ($isUsuarioValido != 1) {
    echo("Usuário ou senha inválida");
} else {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    echo("sucesso!");
}

