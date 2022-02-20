<!DOCTYPE html>

<?php 

session_start();
$db = mysqli_connect('localhost', 'root', '', 'student3350partb') or die("could not connect to db");
$id = $_GET['id'];
$query = "DELETE FROM announcement WHERE id='$id'";
$results = mysqli_query($db, $query);
header('location: announcement.php?correct')
?>