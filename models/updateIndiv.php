<?php

require "./database.php";

$indiv_id = filter_input(INPUT_POST, 'indiv_id', FILTER_SANITIZE_NUMBER_INT);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$bio = filter_input(INPUT_POST, 'bio', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$git_link = filter_input(INPUT_POST, 'git_link', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$fb_link = filter_input(INPUT_POST, 'fb_link', FILTER_SANITIZE_FULL_SPECIAL_CHARS);


$sql = "UPDATE individuals SET name = ?, title = ?, bio = ?, git_link = ?, fb_link = ? WHERE indiv_id = ?";
$sql_prep = $conn->prepare($sql);
$sql_prep->bind_param("sssssi", $name, $title, $bio, $git_link, $fb_link, $indiv_id);
$sql_prep->execute();

header("Location: ../dashboard.php?msg=updated");
