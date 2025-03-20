<?php
session_start();

// Connect to database
$conn = new mysqli('localhost', 'root', '', 'sports_club_db');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

// Get input from form
$username = $_POST['username'];
$password = md5($_POST['password']); // Use MD5 for hashing

// Check credentials
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
} else {
    header('Location: index.php?error=Invalid username or password');
}

$conn->close();
