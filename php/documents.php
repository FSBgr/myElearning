<!DOCTYPE html>
<html>
<?php

session_start();

//connecting to db
$db = mysqli_connect('localhost', 'root', '', 'student3350partb') or die("could not connect to db");

$sql = "SELECT * from document";
if ($result = mysqli_query($db, $sql)) {
    $rowcount = mysqli_num_rows($result);
}

//function printDoc($db, $rowcount){

//}

function printDoc($db, $rowcount)
{
        if($_SESSION['role']){
            echo "<a href=\"adddocument.php\" class=\"button\">Προσθήκη Νέου Εγγράφου</a><br><br><br></p></li>";
        }

        $query = "SELECT * FROM document";
        $result = mysqli_query($db, $query);
        while($row=mysqli_fetch_row($result)){
            echo "<li class=\"announcement-container\"> <h2 class=\"heading2\"> ";
            echo $row[1]."</h2>";
            if ($_SESSION['role']) {
                $del = 'deletedocument.php?id='.$row[0];
                echo "<br> <a href= $del> Διαγραφή </a>";
                /*$edit = 'addhomework.php?type=edit&id='.$row.'&date='.$row['date'].'&subject='.$row['subject'].'&text='.$row['text'];
                echo "<br> <a href= $del> Επεξεργασία </a> <br>";*/
            }
            echo  "<br> <p class=\"list-text withborder\"> <em><b>Περιγραφή: </b></em>";
            echo $row[2]. "<br> <a href=\"".$row[3]."\" class=\"button\">Download</a><br></p></li>";
        }
            }
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
                    <?php printDoc($db, $rowcount) ?>
                </ul>

            </div>
        </div>
    </div>

    <footer>
        <a href="./documents.php" class="button">Back to top</a>
    </footer>


</body>

</html>