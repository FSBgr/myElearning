<!DOCTYPE html>

<?php 

session_start();
$db = mysqli_connect('localhost', 'root', '', 'student3350partb') or die("could not connect to db");
$id = $_GET['id'];
$query = "SELECT source FROM document WHERE id='$id'";
$results = mysqli_query($db, $query);
$path=implode(mysqli_fetch_row($results));
unlink($path);

$query = "DELETE FROM document WHERE id='$id'";
$results = mysqli_query($db, $query);
header('location: documents.php?correct')
?>