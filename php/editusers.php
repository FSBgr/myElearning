<!DOCTYPE html>

<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'myelearning') or die("could not connect to db");

if(isset($_POST['edituser'])){
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $pwd = mysqli_real_escape_string($db, $_POST['pwd']);
    $changeid = mysqli_real_escape_string($db, $_POST['userid']);
    if(isset($_POST['isTutor'])){
        $tutor = true;
    } else {
        $tutor = false;
    }

    $query = "UPDATE account SET name='$name', lastname='$lastname',loginame='$loginame', password='$pwd', isTutor ='$tutor' WHERE id='$changeid' ";
    $results = mysqli_query($db, $query);
    header('location: index.php');
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
    Επεξεργασία Χρήστη

    </title>
</head>

<body>

    <div class="page">
        <h1 class="title-container"> Επεξεργασία Χρήστη </h1>
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
                <label class="form-label"> ID Χρήστη</label><br>
                <input class="text-input" type="text" size="50" required name="userid" id="userid"><br><br>
                <label class="form-label"> Όνομα</label><br>
                <input class="text-input" type="text" size="50" required name="name" id="name"><br><br>
                <label class="form-label"> Επώνυμο</label><br>
                <input class="text-input" type="text" size="50" required name="lastname" id="lastname"><br><br>
                <label class="form-label"> Username</label><br>
                <input class="text-input" type="text" size="50" required name="username" id="username"><br><br>
                <label class="form-label"> Password</label><br>
                <input class="text-input" type="text" size="50" required name="pwd" id="pwd"><br><br>
                <input type="radio" id="isTutor" name="isTutor" value="tutor">
                <label class="form-label">Καθηγητής</label><br><br>
                <input type="radio" id="isStudent" name="isTutor" value="student">
                <label class="form-label">Μαθητής</label><br><br>
                <button class="send-button" type="edituser" id="edituser" required name="edituser">Επεξεργασία Χρήστη</button>

            </form><br>
        </div>
    </div>

    <footer>
        <a href="<?php $url ?>" class="button">Back to top</a>
    </footer>


</body>

</html>