<!DOCTYPE html>

<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'myelearning') or die("could not connect to db");

if(isset($_POST['addhom'])){
    $expdate = mysqli_real_escape_string($db, $_POST['expdate']);
    $path = mysqli_real_escape_string($db, $_POST['doc']);
    $title = mysqli_real_escape_string($db, $_POST['astitle']);

    $query = "SELECT id FROM assignment ORDER BY id DESC";
    $result = implode(mysqli_fetch_row(mysqli_query($db, $query))); //get the last id number
    $newid = intval($result) + 1; //set new id

    $query = "INSERT INTO assignment (id, expdate, title, source) VALUES ('$newid', '$expdate', '$title', '$path')";
    $result = mysqli_query($db, $query);


    $goals = trim($_POST['goal']);
    $goalsAr = explode("\n", $goals);
    $goalsAr = array_filter($goalsAr, 'trim'); //seperate each goal

    $deliverables = trim($_POST['deliverable']);
    $deliverablesAr = explode("\n", $deliverables);
    $deliverablesAr = array_filter($deliverablesAr, 'trim'); //seperate each deliverable

    foreach ($goalsAr as $line) {
        $query = "SELECT id FROM goal ORDER BY id DESC";
        $result = implode(mysqli_fetch_row(mysqli_query($db, $query))); //get the last id number
        $newgoalid = intval($result) + 1; //set new goal id
        
        $query = "INSERT INTO goal (id, description) VALUES ('$newgoalid','$line')";
        $result = mysqli_query($db, $query);

        $query = "INSERT INTO hasgoal (assignmentId, goalId) VALUES ('$newid', '$newgoalid')";
        $result = mysqli_query($db, $query);
    } 

    foreach ($deliverablesAr as $line) {
        $query = "SELECT id FROM deliverable ORDER BY id DESC";
        $result = implode(mysqli_fetch_row(mysqli_query($db, $query))); //get the last id number
        $newdeliverableid = intval($result) + 1; //set deliverable id
        
        $query = "INSERT INTO deliverable (id, description) VALUES ('$newdeliverableid','$line')";
        $result = mysqli_query($db, $query);

        $query = "INSERT INTO hasdeliverable (assignmentId, deliverableId) VALUES ('$newid', '$newdeliverableid')";
        $result = mysqli_query($db, $query);
    }
    
    header('location: homework.php');


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
        Προσθήκη Νέας Εργασίας
    </title>
</head>

<body>

    <div class="page">
        <h1 class="title-container"> Προσθήκη Εργασίας </h1>
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
                <label class="form-label"> Τίτλος</label><br>
                <input class="text-input" type="text" size="50" name="astitle" id="astitle"><br><br>
                <label class="form-label"> Hμερομηνία Παράδοσης</label><br>
                <input class="text-input" type="date" size="50" name="expdate" id="expdate"><br><br>
                <label class="form-label"> Στόχοι (διαχωρίστε κάθε στόχο με νέα γραμμή)</label><br>
                <textarea class="text-input" type="text" size="100" name="goal" id="goal"></textarea><br><br>
                <label class="form-label"> Παραδοτέα (διαχωρίστε κάθε παραδοτέο με νέα γραμμή)</label><br>
                <textarea class="text-input" type="text" size="100" name="deliverable" id="deliverable"></textarea><br><br>
                <label class="form-label"> Εκφώνηση (εισάγετε τον σύνδεσμο ή το path του αρχείου της εργασίας)</label><br>
                <input class="text-input" type="text" size="50" name="doc" id="doc"><br><br>
                <button class="send-button" type="addhom" id="addhom" name="addhom">Προσθήκη Εργασίας</button>
            </form><br>
        </div>
    </div>

    <footer>
        <a href="<?php $url ?>" class="button">Back to top</a>
    </footer>


</body>

</html>