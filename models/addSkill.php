<?php

require "../models/database.php";

$skill = filter_input(INPUT_POST, 'skill', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$level = filter_input(INPUT_POST, 'level', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$indiv_id = filter_input(INPUT_POST, 'indiv_id', FILTER_SANITIZE_NUMBER_INT);


$sql = "INSERT INTO skills(skill, level, indiv_id) VALUES (?, ?, ?);";
$sql_prep = $conn->prepare($sql);
$sql_prep->bind_param("ssi", $skill, $level, $indiv_id);
$sql_prep->execute();

header("Location: ../views/viewProfile.php?msg=749182317419283708123");
