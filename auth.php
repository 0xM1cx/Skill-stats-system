<?php
session_start();
require './database.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['username'], $_POST['password'])) {
        $name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $raw_Pass = filter_input(INPUT_POST, 'passwrod', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $hashed_pass = password_hash($raw_Pass, PASSWORD_DEFAULT);

        if ($query = $conn->prepare('select user_id, pass from users where name = ?')) {
            $query->bind_param('s', $name);
            $query->execute();

            $query->store_result();

            if ($query->num_rows > 0) {
                $query->bind_result($user_id, $pass);
                $query->fetch();

                if (password_verify($hashed_pass, $pass)) {
                    session_regenerate_id();
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['name'] = $name;
                    $_SESSION['id'] = $user_id;

                    header('Location: /index.php');
                }
            }

            $query->close();
        }
    } else {
        header(
            "Location: /index.php"
        );
    }
} else {
    header(
        "Location: /index.php"
    );
}
