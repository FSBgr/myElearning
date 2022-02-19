<!DOCTYPE html>

<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'myelearning') or die("could not connect to db");

$dir = "./uploads";
$folder = $dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($folder, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
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
        Προσθήκη Νέου Εγγράφου
    </title>
</head>

<body>

    <div class="page">
        <h1 class="title-container">Προσθήκη Νέου Εγγράφου</h1>
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
            <form class="contact-form" method="post" enctype="multipart/form-data">
                <label class="form-label"> Τίτλος:</label><br>
                <input class="text-input" type="text" size="50" required name="title" id="title"><br><br>
                <label class="form-label"> Περιγραφή:</label><br>
                <textarea class="text-input" type="text" size="100" required name="desc" id="desc"></textarea><br><br>
                <label class="form-label"> Αρχείο:</label><br><br>
                <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
                <button class="send-button" type="submit" id="submit" required name="submit">Προσθήκη Εγγράφου</button>
            </form><br>
        </div>
    </div>

    <footer>
        <a href="<?php $url ?>" class="button">Back to top</a>
    </footer>


</body>

</html>