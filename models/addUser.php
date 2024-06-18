<?php

require './database.php';

function isAvailable($conn, $username, $email)
{

    $sql = $sql = "SELECT name, email FROM users WHERE name = ? OR email = ?;";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $name_error = "";
        $email_error = "";

        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['name'] === $username) {
                $name_error = "Username already taken";
            }
            if ($row['email'] === $email) {
                $email_error = "Email already taken";
            }
        }

        mysqli_free_result($result);
        mysqli_stmt_close($stmt);


        if ($name_error && $email_error) {
            return "Name and Email already taken";
        } elseif ($name_error) {
            return "Name already taken";
        } elseif ($email_error) {
            return "Email already taken";
        } else {
            return true;
        }
    } else {
        return "Database query failed";
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $r_pass = filter_input(INPUT_POST, 'r_pass', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

    if (isset($name) and isset($email) and isset($password) and isset($r_pass)) {
        $isAvail_res = isAvailable($conn, $name, $email);
        if ($isAvail_res != true) {
            header(
                "Location: ../views/register.php?error=" . urlencode($isAvail_res)
            );
        }
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
        header("Location: ../views/register.php");
    }
} else {
    header(
        "Location: ../views/register.php"
    );
}
