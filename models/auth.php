<?php
require './database.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (isset($username) and isset($pass)) {
        $sql = "SELECT name, pass FROM users WHERE name = ?";
        $sql_prep = $conn->prepare($sql);
        $sql_prep->bind_param("s", $username);
        $sql_prep->execute();
        $result = $sql_prep->get_result();
        $row = $result->fetch_assoc();
        if ($result->num_rows == 1) {
            if (password_verify($pass, $row['pass'])) {
                echo "<h1>{$row['pass']}</h1>";
                header("Location: ../views/dashboard.php");
            }
        }
    } else {
        echo "<h1>NOT SET</h1>";
    }
}
