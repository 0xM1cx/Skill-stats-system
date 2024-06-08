<?php
session_start();
require "./database.php";

$uploadDir = "../assets/images/pfps/";
$indivName = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$description = filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$targetFile = $uploadDir . basename($_FILES['pfp']['name']);

$ifUpload = 1;
$fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));


if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);


$sql = "INSERT INTO individuals(name, title, bio, user_id) VALUES (?, ?, ?, ?);";
$sql_prep = $conn->prepare($sql);
$sql_prep->bind_param("sssi", $indivName, $title, $description, $_SESSION['uid']);
$sql_prep->execute();

header("Location: ../dashboard.php?msg=uploaded");
