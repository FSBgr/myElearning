<!DOCTYPE html>
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ./login.php');
}
$db = mysqli_connect('localhost', 'christpc', 'Ui8sx14$', 'student3350partb') or die("could not connect to db");
//$db = mysqli_connect('webpagesdb.it.auth.gr:3306', 'christpc', 'Ui8sx14$', 'student3350partB') or die("could not connect to db");
mysqli_set_charset($db, "utf8");
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./styles.css" />
    <title>
        Εργασίες
    </title>
</head>

<body>

    <div class="page">
        <h1 class="title-container">Εργασίες</h1>
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
            <?php

            echo "<div class=\"flex-child-element second text-div withborder\">";
            if ($_SESSION['role']) {
                echo "<a href=\"addhomework.php\" class=\"button\">Προσθήκη Νέας Εργασίας</a><br></p></li>";
            }
            $fetch_assignment_ids = "SELECT id FROM assignment ORDER BY expdate DESC";
            $assignment_ids = mysqli_query($db, $fetch_assignment_ids);
            while ($row = mysqli_fetch_row($assignment_ids)) {
                $allGoals = "";
                $allDeliverables = "";
                echo "<ul class=\"withborder\" style=\"list-style: none\"> <li class=\"announcement-container\">
                        <h2 class=\"heading2\"> Εργασία " . implode($row) . "</h2>";

                echo "<br>
                        <p class=\"list-text\"> <em><b>Στόχοι: </b></em></p> <br>
                        <ol>";
                $getGoals = "SELECT DISTINCT goal.description FROM hasgoal INNER JOIN goal ON goal.id = hasgoal.goalId INNER JOIN assignment ON hasgoal.assignmentId = assignment.id WHERE assignmentId=" . implode($row);
                $goals = mysqli_query($db, $getGoals);
                while ($rr = mysqli_fetch_row($goals)) {
                    echo "<li class=\"project-goal\">" . implode($rr) . "</li> <br>";
                    $allGoals = $allGoals . implode($rr);
                }
                echo "</ol>";

                $get_source = "SELECT source FROM assignment WHERE id=" . implode($row);

                $source = implode(mysqli_fetch_row(mysqli_query($db, $get_source)));
                echo "<p class=\"list-text\"> <em><b>Εκφώνηση:</b></em></p> <br>
                        <p class=\"list-text project-goal\"> Κατεβάστε την εκφώνηση από <a href=\"$source\">εδώ</a></p> <br>";

                echo "<li class=\"announcement-container\">
                        <p class=\"list-text\"> <em><b>Παραδοτέα: </b></em></p> <br>
                        <ol>";
                $get_deliverables = "SELECT DISTINCT deliverable.description FROM hasdeliverable INNER JOIN deliverable ON deliverable.id = hasdeliverable.deliverableId INNER JOIN assignment ON hasdeliverable.assignmentId = assignment.id WHERE assignmentId=" . implode($row);
                $deliverables = mysqli_query($db, $get_deliverables);
                while ($rr = mysqli_fetch_row($deliverables)) {
                    echo "<li class=\"project-goal\">" . implode($rr) . "</li> <br>";
                    $allDeliverables = $allDeliverables . " " . implode($rr);
                }
                echo "</ol>";

                $get_date = "SELECT expdate FROM assignment WHERE id=" . implode($row);
                $date = mysqli_fetch_row(mysqli_query($db, $get_date));

                $query = "SELECT title FROM assignment WHERE id=" . implode($row);
                $result = mysqli_fetch_row(mysqli_query($db, $query));
                $title = implode($result);
                echo "<p class=\"list-text\"><span class=\"redText\"> <em><b>Ημερομηνία Παράδοσης </b></em></span>" .
                    implode($date) . "</p>";
                if ($_SESSION['role']) {
                    $del = 'deletehomework.php?id=' . implode($row);
                    echo "<br> <a href= $del> Διαγραφή </a>";
                    $tempGoals = str_replace(' ', '_', $allGoals);
                    $tempdel = str_replace(' ', '_', $allDeliverables);
                    $temptitle = str_replace(' ', '_', $title);
                    $del = 'addhomework.php?type=edit&id=' . implode($row) . '&date=' . implode($date) . '&title=' . $temptitle . '&goals=' . $tempGoals . '&deliverables=' . $tempdel . '&source=' . $source;
                    echo "<br> <a href= $del> Επεξεργασία </a> <br>";
                }
                echo "</li> </ul>";
            }
            ?>
            </ul>
        </div>
    </div>
    </div>

    <footer>
        <a href="./homework.php" class="button">Back to top</a>
    </footer>


</body>

</html>