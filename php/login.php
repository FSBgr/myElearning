<!DOCTYPE html>

<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'student3350partb') or die("could not connect to db");


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
        <h1 class="title-container">Log-in</h1>
        <div class="flex-parent-element">
            <div class="flex-child-element subflex first">
                <ul class="menu">
                    <li> <a href="./index.php" class="button">Αρχική Σελίδα</a></li>
                    <li> <a href="./announcement.php" class="button">Ανακοινώσεις</a></li>
                    <li> <a href="./communication.php" class="button">Επικοινωνία</a></li>
                    <li> <a href="./documents.php" class="button">Έγγραφα Μαθήματος</a></li>
                    <li> <a href="./homework.php" class="button">Εργασίες</a></li>
                    <li> <a href="./login.php" class="button">Login</a></li>
                </ul>
            </div>
            <?php } ?>
            
            
                <?php if (isset($_SESSION['username'])) {
                    echo "<form class=\"contact-form\" method=\"post\">
                    <button class=\"send-button\" type=\"logout\" id=\"logout\" required name=\"logout\">Logout</button><br> </form><br>";
                } else{
                    echo "<form class=\"contact-form\" method=\"post\"> <label class=\"form-label\"> Username:</label><br>
                    <input class=\"text-input\" type=\"text\" size=\"50\" required name=\"username\" id=\"username\"><br><br>
                    <label class=\"form-label\"> Password:</label><br>
                    <input class=\"text-input\" type=\"text\" size=\"100\" required name=\"pwd\" id=\"pwd\"><br><br>
                    <button class=\"send-button\" type=\"submit\" id=\"submit\" required name=\"submit\">Log-in</button></form><br>";
                }?>

            
        </div>
    </div>

</body>

</html>