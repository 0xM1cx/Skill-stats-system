<?php
session_start();
require "./database.php";

$indivName = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$description = filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$uploadDir = "../assets/images/pfps/" . basename($_FILES['pfp']['name']);
$git_link = filter_input(INPUT_POST, 'git_link', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$fb_link = filter_input(INPUT_POST, 'fb_link', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$ifUpload = 1;






$sql = "INSERT INTO individuals(name, title, bio, user_id, pfp_path, git_link, fb_link) VALUES (?, ?, ?, ?, ?, ?, ?);";
$sql_prep = $conn->prepare($sql);
$sql_prep->bind_param("sssis", $indivName, $title, $description, $_SESSION['uid'], $_FILES['pfp']['name'], $git_link, $fb_link);
$sql_prep->execute();


if (move_uploaded_file($_FILES["pfp"]["tmp_name"], $uploadDir)) {
    header("Location: ../dashboard.php?msg=uploaded");
} else {
    echo "picture failed to upload";
}
