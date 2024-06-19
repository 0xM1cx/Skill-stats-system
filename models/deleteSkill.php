<?php
require "./database.php";

$skill_id = filter_input(INPUT_POST, 'skill_id', FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM skills WHERE skill_id = ?";
$sql_prep = $conn->prepare($sql);
$sql_prep->bind_param("i", $skill_id);
$sql_prep->execute();

header("Location: ../views/viewProfile.php");
