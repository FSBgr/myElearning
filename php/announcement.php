<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['username'])){
    header('Location: ./login.php');
}

//connecting to db
$db = mysqli_connect('localhost', 'christpc', 'Ui8sx14$', 'student3350') or die("could not connect to db");
//$db = mysqli_connect('webpagesdb.it.auth.gr:3306', 'christpc', 'Ui8sx14$', 'student3350') or die("could not connect to db");
mysqli_set_charset($db, "utf8");

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
                    <li> <a href="./login.php" class="button">Αποσύνδεση</a></li>
                </ul>
            </div>
            <div class="flex-child-element second text-div">
            <?php if ($_SESSION['role']) {
            echo "<a href=\"addAnnouncement.php\" class=\"button\">Προσθήκη Νέας Ανακοίνωσης</a><br></p></li>";
        }
        ?>
                <ul>
                    <?php
                    $query = "SELECT * FROM announcement ORDER BY id DESC";
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
                            $del = 'deleteannouncement.php?id='.$id;
                            echo "<br> <a href= $del> Διαγραφή </a>";
                            $tempsub = str_replace(' ', '_', $subject);
                            $temptext = str_replace(' ', '_', $text);
                            if(str_contains($temptext,"<a")){
                                $temptext = str_replace("<a","_",$temptext);    //quick parsing error fix
                                $temptext = str_replace("</a>","",$temptext);
                                $temptext = str_replace("Εργασίες","",$temptext);
                                $temptext = str_replace(">","",$temptext);
                                
                            }
                            $del = "addannouncement.php?type=edit&id=".$id."&date=".$date."&subject=".$tempsub."&text=".$temptext;
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