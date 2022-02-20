<!DOCTYPE html>

<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'myelearning') or die("could not connect to db");

if(isset($_POST["dltusr"])){
    $tobedeleted = mysqli_real_escape_string($db, $_POST["username"]);
    $query = "DELETE FROM account WHERE loginame='$tobedeleted'";
    header('location: index.php?'.$_POST["username"]);
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
        <h1 class="title-container">Διαγραφή Χρήστη</h1>
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

            <form class="contact-form" method="post"> <label class="form-label"> Username Χρήστη:</label><br>
                <input class="text-input" type="text" size="50" required name="username" id="username"><br><br>
                <button class="send-button" type="submit" id="dltusr" required name="dltusr">Διαγραφή Χρήστη</button>
            </form><br>
        </div>
    </div>

    <footer>
        <a href="<?php $url ?>" class="button">Back to top</a>
    </footer>


</body>

</html>