<?php
require "./database.php";

$feedback_id = filter_input(INPUT_POST, 'feedback_id', FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM feedback WHERE feedback_id = ?;";

$sql_prep = $conn->prepare($sql);
$sql_prep->bind_param("i", $feedback_id);
$sql_prep->execute();

header("Location: ../views/viewProfile.php");
