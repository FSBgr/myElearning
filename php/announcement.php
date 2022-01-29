<!DOCTYPE html>
<?php
session_start();

//connecting to db
$db = mysqli_connect('localhost', 'root', '', 'myelearning') or die("could not connect to db");

$sql = "SELECT * from announcement";
if ($result = mysqli_query($db, $sql)) {
    $rowcount = mysqli_num_rows($result);
}

function printAnn($rowcount, $db)
{
    if ($rowcount != 0) {
        for ($i = 1; $i <= $rowcount; $i++) {
            echo "<li class=\"announcement-container\">
        <section>
            <h2 class=\"heading2\">Ανακοίνωση";

            $query = "SELECT id FROM announcement WHERE id='$i'";
            $result = mysqli_query($db, $query);
            $id = implode(mysqli_fetch_row($result));
            echo " $id </h2> \n";

            echo "<p class=\"announcement-subtitle\"> <b>Ημερομηνία:</b>";
            $query = "SELECT date FROM announcement WHERE id='$i'";
            $result = mysqli_query($db, $query);
            $date = implode(mysqli_fetch_row($result));
            echo " <em> $date </em> </p> \n";

            echo "<p class=\"announcement-subtitle\"> <b>Θέμα:</b> ";
            $query = "SELECT subject FROM announcement WHERE id='$i'";
            $result = mysqli_query($db, $query);
            $subject = implode(mysqli_fetch_row($result));
            echo " $subject</p> \n";

            echo "<p class=\"list-text withborder\"> ";
            $query = "SELECT text FROM announcement WHERE id='$i'";
            $result = mysqli_query($db, $query);
            $text = implode(mysqli_fetch_row($result));
            echo " $text</p> \n";

            echo " </section> </li>";
        }
    } else {
        echo "NO AVAILABLE ANNOUNCEMENTS";
    }
}

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./styles.css" />
    <title>
        Ανακοινώσεις
    </title>
</head>

<body>
    <div class="page">
        <h1 class="title-container">Ανακοινώσεις</h1>
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
                    <?php
                    printAnn($rowcount, $db);
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <footer>
        <a href="./announcement.php" class="button">Back to top</a>
    </footer>


</body>

</html>