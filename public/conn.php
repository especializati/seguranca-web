<?php

// !!! Esta conexão é apenas de exemplo, não segue nenhuma boa prática de desenvolvimento!!!

$host = 'db';
$port = '5432';
$database = 'security';
$user = 'admin';
$password = 'admin';

$conStr = sprintf(
    "pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
    $host,
    $port,
    $database,
    $user,
    $password,
);
$conn = new PDO($conStr);
$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
