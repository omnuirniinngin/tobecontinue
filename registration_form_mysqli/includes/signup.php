<?php
include_once 'connect_db.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$gender = $_POST['gender'];

$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];

$birth = "$year-$month-$day";

$sql = "INSERT INTO users (Firstname, Lastname, Email, Password, Gender, Birth) VALUES ('$first', '$last', '$email', '$pwd', '$gender','$birth')";
mysqli_query($conn, $sql);

header("location: ../view.php?signup=sucess");
