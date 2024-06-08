<?php

// require './config.php';
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'skill-profile-system');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


if ($conn->connect_error) {
    echo "Failed to connect." . $conn->connect_error;
}
