<!DOCTYPE html>

<?php
session_start();
$db = mysqli_connect('localhost', 'christpc', 'Ui8sx14$', 'student3350') or die("could not connect to db");
//$db = mysqli_connect('webpagesdb.it.auth.gr:3306', 'christpc', 'Ui8sx14$', 'student3350') or die("could not connect to db");
mysqli_set_charset($db, "utf8");

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $pwd = mysqli_real_escape_string($db, $_POST['pwd']);

    $query = "SELECT * FROM account WHERE loginame='$username' AND password='$pwd'";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results)) {
        $row = $results->fetch_assoc();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $row['isTutor'];
        header('location: ./index.php?login=success');
    }
}

if (isset($_POST['logout'])) {
    unset($_SESSION['username']);
    unset($_SESSION['role']);
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="scripts.js"></script>

    <link rel="stylesheet" type="text/css" href="./styles.css" />
    <title>
        Log-in
    </title>
</head>

<body>

<?php if(isset($_SESSION['username'])){ ?>
    <div class="page">
        <h1 class="title-container">Αποσύνδεση</h1>
        <div class="flex-parent-element">
            <div class="flex-child-element subflex first">
                <ul class="menu">
                    <li> <a href="./index.php" class="button">Αρχική Σελίδα</a></li>
                    <li> <a href="./announcement.php" class="button">Ανακοινώσεις</a></li>
                    <li> <a href="./communication.php" class="button">Επικοινωνία</a></li>
                    <li> <a href="./documents.php" class="button">Έγγραφα Μαθήματος</a></li>
                    <li> <a href="./homework.php" class="button">Εργασίες</a></li>
                    <li> <a href="./login.php" class="button">Αποσύνδεση</a></li>
                </ul>
            </div>
            <?php } ?>
            <?php if (isset($_SESSION['username'])) {
                    echo "<div class=\"flex-child-element second text-div logoutcenter\">
                    <section><form class=\"contact-form\" method=\"post\">
                    <button class=\"send-button\" type=\"logout\" id=\"logout\" required name=\"logout\">Logout</button><br> </form></section></div><br>";
                }?>
        </div>
        
    </div>
    <?php if (!isset($_SESSION['username'])) {
                    echo "<h1 class=\"logintitle\">Σύνδεση</h1><div class=\"loginarea logincenter\"><form  method=\"post\"> <label class=\"form-label\"> Email:</label><br>
                    <input class=\"text-input\" type=\"text\" size=\"50\" required name=\"username\" id=\"username\"><br><br>
                    <label class=\"form-label\"> Password:</label><br>
                    <input class=\"text-input\" type=\"password\" size=\"100\" required name=\"pwd\" id=\"pwd\"><br><br>
                    <button class=\"send-button\" type=\"submit\" id=\"submit\" required name=\"submit\">Σύνδεση</button></form></div><br>";
                }?>

</body>

</html>