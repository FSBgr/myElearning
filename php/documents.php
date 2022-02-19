<!DOCTYPE html>
<html>
<?php

session_start();

//connecting to db
$db = mysqli_connect('localhost', 'root', '', 'myelearning') or die("could not connect to db");

$sql = "SELECT * from document";
if ($result = mysqli_query($db, $sql)) {
    $rowcount = mysqli_num_rows($result);
}

//function printDoc($db, $rowcount){

//}

function printDoc($db, $rowcount)
{
    if ($rowcount != 0) {
        if($_SESSION['role']){
            echo "<a href=\"adddocument.php\" class=\"button\">Προσθήκη Νέου Εγγράφου</a><br><br><br></p></li>";
        }
        for ($i = 1; $i <= $rowcount; $i++) {
            echo "<li class=\"announcement-container\"> <h2 class=\"heading2\"> ";
            $query = "SELECT title FROM document WHERE id='$i'";
            $result = mysqli_query($db, $query);
            $title = implode(mysqli_fetch_row($result));
            echo " $title </h2> <br> <p class=\"list-text withborder\"> <em><b>Περιγραφή: </b></em>";
            $query = "SELECT description FROM document WHERE id='$i'";
            $result = mysqli_query($db, $query);
            $description = implode(mysqli_fetch_row($result));
            $query = "SELECT source FROM document WHERE id='$i'";
            $result = mysqli_query($db, $query);
            $source = implode(mysqli_fetch_row($result));
            echo " $description <br> <a href=\"$source\" class=\"button\">Download</a><br></p></li>";
        }
    }else{
        echo " NO AVAILABLE DOCUMENTS";
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