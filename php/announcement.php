<!DOCTYPE html>
<?php
session_start();

//connecting to db
$db = mysqli_connect('localhost', 'root', '', 'myelearning') or die("could not connect to db");

$sql = "SELECT * from announcement";
if ($result = mysqli_query($db, $sql)) {
    $rowcount = mysqli_num_rows($result);
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
                    $query = "SELECT * FROM announcement";
                    $results = mysqli_query($db, $query);
                    while ($row = mysqli_fetch_array($results)) {
                        $id = $row['id'];
                        $date = $row['date'];
                        $subject = $row['subject'];
                        $text = $row['text'];
                        echo "<li class=\"announcement-container\">
                        <section>
                            <h2 class=\"heading2\">Ανακοίνωση";
                        echo " $id </h2>";

                        if ($_SESSION['role']) {
                            $del = 'deleteannouncement.php?id='.$row['id'];
                            echo "<br> <a href= $del> Διαγραφή </a>";
                            $del = 'addannouncement.php?type=edit&id='.$row['id'].'&date='.$row['date'].'&subject='.$row['subject'].'&text='.$row['text'];
                            echo "<br> <a href= $del> Επεξεργασία </a> <br>";
                        }
                        echo "<p class=\"announcement-subtitle\"> <b>Ημερομηνία:</b>";
                        echo " <em> $date </em> </p> \n";
                        echo "<p class=\"announcement-subtitle\"> <b>Θέμα:</b> ";
                        echo " $subject</p> \n";
                        echo "<p class=\"list-text withborder\"> ";
                        echo " $text</p> \n";
                        echo " </section> </li>";
                    }
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