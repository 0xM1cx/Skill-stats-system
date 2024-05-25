<?php

require './database.php';

function isAvailable($conn, $username, $email)
{
    $name_sql = "SELECT * FROM users WHERE name = ?;";
    $name_stmt = mysqli_prepare($conn, $name_sql);
    mysqli_stmt_bind_param($name_stmt, "s", $username);

    $email_sql = "SELECT * FROM users WHERE email = ?;";
    $email_stmt = mysqli_prepare($conn, $email_sql);
    mysqli_stmt_bind_param($email_stmt, "s", $email);

    mysqli_stmt_execute($email_stmt);
    mysqli_stmt_execute($name_stmt);


    $name_error = "";
    $email_error = "";

    // Check username availability
    $username_result = mysqli_stmt_get_result($name_stmt);
    if (mysqli_num_rows($username_result) > 0) {
        $name_error = "Username already taken";
    }

    // Free the username result
    mysqli_free_result($username_result);

    // Check email availability using mysqli_stmt_get_result
    $email_result = mysqli_stmt_get_result($email_stmt);
    if (mysqli_num_rows($email_result) > 0) {
        $email_error = "Email already taken";
    }

    // Free the email result
    mysqli_free_result($email_result);

    // Close prepared statements
    mysqli_stmt_close($name_stmt);
    mysqli_stmt_close($email_stmt);

    if ($name_error != "" && $email_error != "") {
        return "Name and Email already taken";
    } elseif ($name_error != "") {
        return "Name already taken";
    } elseif ($email_error != "") {
        return "Email already taken";
    } else {
        return true;
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
