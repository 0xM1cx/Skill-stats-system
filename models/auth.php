<?php
require './database.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (isset($username) and isset($pass)) {
        $sql = "SELECT user_id, name, pass FROM users WHERE name = ?";
        $sql_prep = $conn->prepare($sql);
        $sql_prep->bind_param("s", $username);
        $sql_prep->execute();
        $result = $sql_prep->get_result();
        $row = $result->fetch_assoc();
        if ($result->num_rows == 1) {
            if (password_verify($pass, $row['pass'])) {
                $_SESSION['uid'] = $row['user_id'];
                header("Location: ../dashboard.php");
            }
        }
    } else {
        echo "<h1>NOT SET</h1>";
    }
}
