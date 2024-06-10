<?php

require "../models/database.php";

$feedback = filter_input(INPUT_POST, 'feedback', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$indiv_id = filter_input(INPUT_POST, 'indiv_id', FILTER_SANITIZE_NUMBER_INT);

$sql = "INSERT INTO feedback(feedback, indiv_id) VALUES (?, ?);";
$sql_prep = $conn->prepare($sql);
$sql_prep->bind_param("si", $feedback, $indiv_id);
$sql_prep->execute();

header("Location: ../views/viewProfile.php?msg=78572361238491639879123649");
