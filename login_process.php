<?php

    // login_process.php
session_start();
$conn = new mysqli("localhost", "root", "", "book_db");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: booking.php");
    } else {
        echo "Invalid password";
    }
} else {
    echo "Invalid email";
}

$conn->close();




?>