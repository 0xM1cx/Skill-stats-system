<?php

require './config.php';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


if ($conn->connect_error) {
    echo "Failed to connect." . $conn->connect_error;
}
