<!DOCTYPE html>

<?php
session_start();
$username = "Guest";
$email = "";
$pwd = "";
$newPwd = "";
$password_repeat = "";
$_SESSION['success'] = '';
$contactName = "";
$contactEmail = "";
$contactText = "";
$errors = array();
$_SESSION['age'] = "Age";
$_SESSION['gender'] = "Gender";
$_SESSION['lctn'] = "Location";

//connecting to db
$db = mysqli_connect('localhost', 'root', '', 'myelearning') or die("could not connect to db");

$sql = "SELECT * from emailaddresses";
if ($result = mysqli_query($db, $sql)) {
    $rowcount = mysqli_num_rows($result);
}

function printAddresses($rowcount, $db){
    if($rowcount!=0){
        for($i=1; $i<=$rowcount; $i++){
            $query = "SELECT address FROM emailaddresses WHERE id='$i'";
            $result = mysqli_query($db, $query);
            $address = implode(mysqli_fetch_row($result));
            echo " <a href=\"mailto: $address\">$address</a> <br>";
        }
    }else{
        echo "<a href=\"mailto: tutor@csd.auth.gr\">tutor@csd.auth.gr</a> <br>";
    }
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
                </ul>
            </div>
            <div class="flex-child-element second text-div">
                <h2 class="heading2">
                    Αποστολή e-mail μέσω web φόρμας
                </h2>
                <form action="mailto:tutor@csd.auth.gr" class="contact-form">
                    <label class="form-label"> Αποστολέας:</label><br>
                    <input class="text-input" type="text" size="50"><br><br>
                    <label class="form-label"> Θέμα:</label><br>
                    <input class="text-input" type="text" size="100"><br><br>
                    <label class="form-label"> Κείμενο:</label> <br>
                    <textarea name="body" id="body" rows="8" cols="60"></textarea><br>
                    <input class="send-button" type="submit" value="Αποστολή">
                </form><br>
                <h2 class="heading2">Αποστολή e-mail με χρήση e-mail διεύθυνσης</h2>
                <div class="inside-form">
                    <p class="text-div">
                        Εναλλακτικά μπορείτε να αποστείλετε e-mail στις παρακάτω διευθύνσεις ηλεκτρονικού ταχυδρομείου: <br>
                        <?php 
                            printAddresses($rowcount, $db);
                            ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <a href="./communication.html" class="button">Back to top</a>
    </footer>


</body>

</html>