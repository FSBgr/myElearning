<!DOCTYPE html>

<?php
session_start();
$db = mysqli_connect('localhost', 'christpc', 'Ui8sx14$', 'student3350') or die("could not connect to db");
//$db = mysqli_connect('webpagesdb.it.auth.gr:3306', 'christpc', 'Ui8sx14$', 'student3350') or die("could not connect to db");
mysqli_set_charset($db, "utf8");

if(isset($_POST['adduser'])){
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $pwd = mysqli_real_escape_string($db, $_POST['pwd']);
    if(strcmp("Tutor",$_POST['isTutor'])==0){
        $tutor = TRUE;
    } else {
        $tutor = FALSE;
    }
    /*if(isset($_POST['isTutor'])){
        $tutor = 1;
    } else {
        $tutor = 0;
    }*/
    $query = "INSERT INTO account (name, lastname, loginame, password, isTutor) VALUES ('$name', '$lastname', '$username', '$pwd', '$tutor')";
    $results = mysqli_query($db, $query);
    header('location: viewusers.php');
}

if (!empty($_GET)) {
    $type = $_GET['type'];
    $userid = $_GET['id'];
    $name = $_GET['name'];
    $lastname = $_GET['lastname'];
    $loginame = $_GET['loginame'];
    $password = $_GET['password'];
    $isTutor = $_GET['isTutor'];
}
$edit = "edit";

if (isset($_POST['editann'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $pwd = mysqli_real_escape_string($db, $_POST['pwd']);
    if(isset($_POST['isTutor'])){
        $tutor = TRUE;
    } else {
        $tutor = FALSE;
    }

    $query = "UPDATE account SET name='$name', lastname='$lastname', loginame='$loginame', password='$pwd', isTutor='$tutor' WHERE id='$userid' ";
    $results = mysqli_query($db, $query);
    header('location: viewusers.php');
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
    <?php if(isset($type) && strcmp($type, $edit) == 0){ echo "Επεξεργασία Χρήστη";} else{echo "Προσθήκη Χρήστη";}?>

    </title>
</head>

<body>

    <div class="page">
        <h1 class="title-container"> <?php if(isset($type) && strcmp($type, $edit) == 0){ echo "Επεξεργασία Χρήστη</h1>";} else{echo "Προσθήκη Χρήστη</h1>";}?>
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
            
            <form class="contact-form" method="post">
                <label class="form-label"> Όνομα</label><br>
                <input class="text-input" type="text" size="50" required name="name" id="name" <?php if(isset($type) && strcmp($type, $edit) == 0){
                    echo "value=\"$name\"";
                }

                ?>><br><br>
                <label class="form-label"> Επώνυμο</label><br>
                <input class="text-input" type="text" size="50" required name="lastname" id="lastname" <?php if(isset($type) && strcmp($type, $edit) == 0){
                    echo "value=\"$lastname\"";
                }

                ?>><br><br>
                <label class="form-label"> Email</label><br>
                <input class="text-input" type="text" size="50" required name="username" id="username" <?php if(isset($type) && strcmp($type, $edit) == 0){
                    echo "value=\"$loginame\"";
                }

                ?>><br><br>
                <label class="form-label"> Password</label><br>
                <input class="text-input" type="text" size="50" required name="pwd" id="pwd" <?php if(isset($type) && strcmp($type, $edit) == 0){
                    echo "value=\"$password\"";
                }

                ?>><br><br>
                <input type="radio" id="isTutor" name="isTutor" value="Tutor"<?php if(isset($type) && strcmp($type, $edit)  == 0 && $isTutor){
                    echo "checked";
                }

                ?>>
                <label class="form-label">Καθηγητής</label><br><br>
                <input type="radio" id="isStudent" name="isTutor" value="student"<?php if(isset($type) && strcmp($type, $edit)  == 0 && !$isTutor){
                    echo "checked";
                }?>>
                <label class="form-label">Μαθητής</label><br><br>
                <?php
                if (isset($type) && strcmp($type, $edit) == 0) {
                    echo "<button class=\"send-button\" type=\"edituser\" id=\"edituser\" required name=\"edituser\">Επεξεργασία Χρήστη</button>";
                } else {
                    echo "<button class=\"send-button\" type=\"adduser\" id=\"adduser\" required name=\"adduser\">Προσθήκη Χρήστη</button>";
                }
                ?>

            </form><br>
        </div>
    </div>

    <footer>
        <a href="<?php $url ?>" class="button">Back to top</a>
    </footer>


</body>

</html>