<?php

require 'includes/config/database.php';

$db = conectarDB();

$email = 'correo@correo.com';
$password = '123456';

$passHash = password_hash($password, PASSWORD_DEFAULT);


$query = "INSERT INTO usuarios (email, password)  VALUES ('{$email}', '{$passHash}')";

mysqli_query($db, $query);


