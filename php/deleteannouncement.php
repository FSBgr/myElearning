<!DOCTYPE html>

<?php 

session_start();
$db = mysqli_connect('localhost', 'christpc', 'Ui8sx14$', 'student3350') or die("could not connect to db");
//$db = mysqli_connect('webpagesdb.it.auth.gr:3306', 'christpc', 'Ui8sx14$', 'student3350') or die("could not connect to db");
mysqli_set_charset($db, "utf8");
$id = $_GET['id'];
$query = "DELETE FROM announcement WHERE id='$id'";
$results = mysqli_query($db, $query);
header('location: announcement.php?correct')
?>