<!DOCTYPE html>

<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'myelearning') or die("could not connect to db");

if(isset($_POST['addann'])){
    $date = mysqli_real_escape_string($db, $_POST['date']);
    $subject = mysqli_real_escape_string($db, $_POST['subject']);
    $text = mysqli_real_escape_string($db, $_POST['text']);

    $query = "INSERT INTO announcement (date, subject, text) VALUES ('$date', '$subject', '$text')";
    $results = mysqli_query($db, $query); 
    header('location: announcement.php');

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
        Add Announcement
    </title>
</head>

<body>

    <div class="page">
        <h1 class="title-container">Προσθήκη Ανακοίνωσης</h1>
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
            <form class="contact-form" method="post"> 
                <label class="form-label"> Ημερομηνία</label><br>
                <input class="text-input" type="date" size="50" required name="date" id="date"><br><br>
                <label class="form-label"> Θέμα</label><br>
                <input class="text-input" type="text" size="100" required name="subject" id="subject"><br><br>
                <label class="form-label"> Περιεχόμενα</label><br>
                <input class="text-input" type="textarea" size="100" rows="100" cols="50" required name="text" id="text"><br><br>
                <button class="send-button" type="addann" id="addann" required name="addann">Προσθήκη νέας ανακοίνωσης</button>
            </form><br>
        </div>
    </div>

    <footer>
        <a href="<?php $url ?>" class="button">Back to top</a>
    </footer>


</body>

</html>