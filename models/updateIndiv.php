<?php

require "./database.php";

$indiv_id = filter_input(INPUT_POST, 'indiv_id', FILTER_SANITIZE_NUMBER_INT);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$bio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_FULL_SPECIAL_CHARS);


$sql = "UPDATE individuals SET name = ?, title = ?, bio = ? WHERE indiv_id = ?";
$sql_prep = $conn->prepare($sql);
$sql_prep->bind_param("sssi", $name, $title, $bio, $indiv_id);
$sql_prep->execute();

header("Location: ../dashboard.php?msg=updated");
