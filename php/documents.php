<!DOCTYPE html>
<html>
<?php

session_start();

if(!isset($_SESSION['username'])){
    header('Location: ./login.php');
}

$db = mysqli_connect('localhost', 'christpc', 'Ui8sx14$', 'student3350partb') or die("could not connect to db");
//$db = mysqli_connect('webpagesdb.it.auth.gr:3306', 'christpc', 'Ui8sx14$', 'student3350partB') or die("could not connect to db");
mysqli_set_charset($db, "utf8");

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./styles.css" />
    <title>
        Έγγραφα Μαθήματος
    </title>
</head>

<body>

    <div class="page">
        <h1 class="title-container">Έγγραφα Μαθήματος</h1>
        <div class="flex-parent-element">
            <div class="flex-child-element subflex first">
                <ul class="menu">
                    <li> <a href="./index.php" class="button">Αρχική Σελίδα</a></li>
                    <li> <a href="./announcement.php" class="button">Ανακοινώσεις</a></li>
                    <li> <a href="./communication.php" class="button">Επικοινωνία</a></li>
                    <li> <a href="./documents.php" class="button">Έγγραφα Μαθήματος</a></li>
                    <li> <a href="./homework.php" class="button">Εργασίες</a></li>
                    <li> <a href="./login.php" class="button">Logout</a></li>
                </ul>
            </div>
            <div class="flex-child-element second text-div">
                <ul>
                    <?php 
                        if ($_SESSION['role']) {
                            echo "<a href=\"adddocument.php\" class=\"button\">Προσθήκη Νέου Εγγράφου</a><br><br><br></p></li>";
                        }
                        $query = "SELECT * FROM document";
                        $result = mysqli_query($db, $query);
                        while ($row = mysqli_fetch_row($result)) {
                            echo "<li class=\"announcement-container\"> <h2 class=\"heading2\"> ";
                            echo $row[1] . "</h2>";
                            if ($_SESSION['role']) {
                                $del = 'deletedocument.php?id=' . $row[0];
                                echo "<br> <a href= $del> Διαγραφή </a>";
                                $temptitle = str_replace(' ', '_', $row[1]);
                                $tempdesc = str_replace(' ', '_', $row[2]);
                                $temppath = str_replace(' ', '_', $row[3]);
                                $del = 'adddocument.php?type=edit&id='.$row[0].'&title='.$temptitle.'&description='.$tempdesc.'&path='.$temppath;
                                echo "<br> <a href= $del> Επεξεργασία </a> <br>";
                            }
                            echo  "<br> <p class=\"list-text withborder\"> <em><b>Περιγραφή: </b></em>";
                            echo $row[2] . "<br> <a href=\"" . $row[3] . "\" class=\"button\">Download</a><br></p></li>";
                        }
                    ?>
                </ul>

            </div>
        </div>
    </div>

    <footer>
        <a href="./documents.php" class="button">Back to top</a>
    </footer>


</body>

</html>