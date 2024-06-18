<?php
session_start();
require "./database.php";

$indivName = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$description = filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$uploadDir = "../assets/images/pfps/" . basename($_FILES['pfp']['name']);

$ifUpload = 1;
$fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));






$sql = "INSERT INTO individuals(name, title, bio, user_id, pfp_path) VALUES (?, ?, ?, ?, ?);";
$sql_prep = $conn->prepare($sql);
$sql_prep->bind_param("sssis", $indivName, $title, $description, $_SESSION['uid'], $_FILES['pfp']['name']);
$sql_prep->execute();


if (move_uploaded_file($_FILES["pfp"]["tmp_name"], $uploadDir)) {
    header("Location: ../dashboard.php?msg=uploaded");
} else {
    echo "picture failed to upload";
}
