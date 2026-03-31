<?php
$conn = new mysqli("localhost", "root", "", "auth_demo");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!-- CREATE DATABASE auth_demo;

USE auth_demo;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); -->
