<?php

require_once "dbh.inc.php";
require_once "functions.inc.php";

$fullname = mysqli_real_escape_string($conn, $_POST['fullname']); 
$rank = mysqli_real_escape_string($conn, $_POST['rank']);
$salary = mysqli_real_escape_string($conn, $_POST['salary']);
$birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
$sex = mysqli_real_escape_string($conn, $_POST['sex']);

$sql = "INSERT INTO employees(name, rank, salary, birthday, sex) 
    VALUES (?, ?, ?, ?, ?);";

$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL error";
} else {
    mysqli_stmt_bind_param($stmt, "sssss", $fullname, $rank, $salary, $birthday, $sex);
    mysqli_stmt_execute($stmt);
}
header("location: ../files.php?addition=success");