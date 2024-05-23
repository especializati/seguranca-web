<?php

require_once __DIR__ . '/conn.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->rowCount() > 0) {
        echo "Login successful";
    } else {
        echo "Login failed";
    }
}