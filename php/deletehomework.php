<!DOCTYPE html>

<?php 

session_start();
$db = mysqli_connect('localhost', 'root', '', 'student3350partb') or die("could not connect to db");
//$db = mysqli_connect('webpagesdb.it.auth.gr:3306', 'christpc', 'Ui8sx14$', 'student3350partB') or die("could not connect to db");
mysqli_set_charset($db, "utf8");
$id = $_GET['id'];
$query = "DELETE FROM assignment WHERE id='$id'";
$results = mysqli_query($db, $query);
$query = "DELETE FROM hasgoal WHERE assignmentid='$id'";
$results = mysqli_query($db, $query);
$query = "DELETE FROM hasdeliverable WHERE assignmentid='$id'";
$results = mysqli_query($db, $query);
header('location: homework.php?correct')
?>