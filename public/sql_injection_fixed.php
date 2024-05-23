<?php

session_start();

require_once __DIR__ . '/conn.php';

if (!isset($_SESSION['_csrf']) || (isset($_SESSION['_csrf']) && $_SESSION['_csrf'] !== $_POST['_csrf'])) {
    throw new Exception('CSRF token invalid');
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = $conn->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo "Login successful";
    } else {
        echo "Login failed";
    }
}

$_SESSION['_csrf'] = hash('sha256', random_bytes(32));