<!DOCTYPE html>
<?php
session_start();

$db = mysqli_connect('localhost', 'christpc', 'Ui8sx14$', 'student3350') or die("could not connect to db");
//$db = mysqli_connect('webpagesdb.it.auth.gr:3306', 'christpc', 'Ui8sx14$', 'student3350') or die("could not connect to db");
mysqli_set_charset($db, "utf8");
?>
 
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./styles.css" />
    <title>
        Προβολή Χρηστών
    </title>
</head>

<body>
    <div class="page">
        <h1 class="title-container">Προβολή Χρηστών</h1>

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
            <div class="flex-child-element second text-div">
                 <?php echo "<a href=\"addusers.php\" class=\"button\">Προσθήκη Χρηστών</a><br>"; ?>
                <ul>
                <?php 
                    $query = "SELECT * FROM account";
                    $result = mysqli_query($db, $query);
                    while($row=mysqli_fetch_row($result)){
                       echo "<li class=\"announcement-container withborder\">
                        <section>
                            <h2 class=\"heading2\">Χρήστης ".$row[3]."</h2>";
                        $del = 'deleteusers.php?id='.$row[0];
                        echo "<br> <a href= $del> Διαγραφή </a>";
                        $del = 'addusers.php?type=edit&id='.$row[0].'&name='.$row[1].'&lastname='.$row[2].'&loginame='.$row[3].'&password='.$row[4].'&isTutor='.$row[5];
                        echo "<br> <a href= $del> Επεξεργασία </a> <br><br>";
                        echo "<p class=\"announcement-subtitle\"> <b>ID:</b> ";
                        echo  $row[0]."</p>";
                        echo "<p class=\"announcement-subtitle\"> <b>Όνομα:</b> ";
                        echo  $row[1]."</p>";
                        echo "<p class=\"announcement-subtitle\"> <b>Επώνυμο:</b> ";
                        echo  $row[2]."</p>";
                        echo "<p class=\"announcement-subtitle\"> <b>Email:</b> ";
                        echo  $row[3]."</p>";
                        echo "<p class=\"announcement-subtitle\"> <b>Password:</b> ";
                        echo  $row[4]."</p>";
                        echo "<p class=\"announcement-subtitle\"> <b>Ρόλος:</b> ";
                        if($row[5]){
                            echo "Tutor </p> <br>";
                        } else {
                            echo "Student </p> <br>";
                        }
                        
                        echo " </section> </li>";

                    }
                ?>
                </ul>
            </div>
        </div>
    </div>

    <footer>
        <a href="./viewusers.php" class="button">Back to top</a>
    </footer>


</body>

</html>