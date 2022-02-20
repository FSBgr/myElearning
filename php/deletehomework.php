<!DOCTYPE html>

<?php 

session_start();
$db = mysqli_connect('localhost', 'root', '', 'myelearning') or die("could not connect to db");
$id = $_GET['id'];
$query = "DELETE FROM assignment WHERE id='$id'";
$results = mysqli_query($db, $query);
$query = "DELETE FROM hasgoal WHERE assignmentid='$id'";
$results = mysqli_query($db, $query);
$query = "DELETE FROM hasdeliverable WHERE assignmentid='$id'";
$results = mysqli_query($db, $query);
header('location: homework.php?correct')
?>