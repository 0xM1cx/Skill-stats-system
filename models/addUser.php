<?php

require './database.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $r_pass = filter_input(INPUT_POST, 'r_pass', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

    if (isset($name) and isset($email) and isset($password) and isset($r_pass)) {
        if ($password == $r_pass) {
            $sql = "INSERT INTO users (name, email, pass) VALUES (?, ?, ?)";
            $sql_ready = $conn->prepare($sql);
            $sql_ready->bind_param("sss", $name, $email, $hashed_pass);
            $sql_ready->execute();
            header(
                "Location: ../index.php"
            );
        } else {
            $error = "* Password does not match*";
            header(
                "Location: ../views/register.php?error=" . urlencode($error)
            );
        }
    } else {
        $error = "NOT SET";
        header("Location: ../views/register.php?error=" . urlencode($error) . urlencode($name) . urlencode($email) . urlencode($password) . urlencode($r_pass));
    }
} else {
    $error = "NOT POST";
    header(
        "Location: ../views/register.php?error=" . urldecode($error)
    );
}
