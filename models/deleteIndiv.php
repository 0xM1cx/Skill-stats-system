<?php

require "./database.php";

$indiv_id = filter_input(INPUT_POST, 'indiv_id', FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM individuals WHERE indiv_id = ?;";
$sql_prep = $conn->prepare($sql);
$sql_prep->bind_param("i", $indiv_id);
$sql_prep->execute();

header("Location: ../dashboard.php?msg=deleted");
