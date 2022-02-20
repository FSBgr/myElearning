<!DOCTYPE html>
<?php 
session_start();

if(!isset($_SESSION['username'])){
    header('Location: ./login.php');
}
$db = mysqli_connect('localhost', 'root', '', 'myelearning') or die("could not connect to db");

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="scripts.js"></script>

    <link rel="stylesheet" type="text/css" href="./styles.css" />
    <title>
        Αρχική Σελίδα
    </title>
</head>

<body>

    <div class="page">
        <h1 class="title-container">Αρχική Σελίδα</h1>
        <div class="flex-parent-element">
            <div class="flex-child-element subflex first">
                <ul class="menu">
                    <li> <a href="./index.php" class="button">Αρχική Σελίδα</a></li>
                    <li> <a href="./announcement.php" class="button">Ανακοινώσεις</a></li>
                    <li> <a href="./communication.php" class="button">Επικοινωνία</a></li>
                    <li> <a href="./documents.php" class="button">Έγγραφα Μαθήματος</a></li>
                    <li> <a href="./homework.php" class="button">Εργασίες</a></li>
                    <li> <a href="./login.php?login=true" class="button">Logout</a></li>
                </ul>
            </div>
            <div class="flex-child-element second text-div">
                
                Καλώς ορίσατε στην ψηφιακή πλατφόρμα του πανεπιστημίου μας! Εδώ μέσα μπορείτε να βρείτε όλες τις
                ανακοινώσεις σχετικά με το πανεπιστήμιο,
                τη σχολή και το τμήμα σας. Επίσης έχετε πρόσβαση στο περιεχόμενο των μαθημάτων που παρακολουθείτε, όπως
                επίσης και στις εργασίες που καλείστε
                να καταθέσετε. Τέλος μπορείτε να επικοινωνείτε άμεσα με τους καθηγητές και τις καθηγήτριές σας, είτε
                μέσω της πλατφόρμας, είτε χρησιμοποιώντας
                τα στοιχεία επικοινωνίας που βρίσκονται στις αντίστοιχες καρτέλες.<br> <br>
                <img class="image" src="./images/auth.png" alt="Auth logo">

                <?php if($_SESSION['role']){ 
                    echo "<a href=\"editusers.php\" class=\"button\">Επεξεργασία Χρηστών</a><br>";
                    echo "<a href=\"deleteusers.php\" class=\"button\">Διαγραφή Χρηστών</a><br>";
                    echo "<a href=\"addusers.php\" class=\"button\">Προσθήκη Χρηστών</a><br>";
                }
                    ?>
            </div>
        </div>
    </div>

    <footer>
        <a href="./index.php" class="button">Back to top</a>
    </footer>


</body>

</html>