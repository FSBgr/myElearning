<!DOCTYPE html>

<?php
session_start();
$db = mysqli_connect('localhost', 'christpc', 'Ui8sx14$', 'student3350') or die("could not connect to db");
//$db = mysqli_connect('webpagesdb.it.auth.gr:3306', 'christpc', 'Ui8sx14$', 'student3350') or die("could not connect to db");
mysqli_set_charset($db, "utf8");


if (isset($_POST["adddoc"])) {
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $desc = mysqli_real_escape_string($db, $_POST['desc']);
    $dir = "./uploads/";
    $target_file = $dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            header('location: documents.php');
        }
    }

    $query = "INSERT INTO document (title, description, source) VALUES ('$title', '$desc', '$target_file')";
    $result = mysqli_query($db, $query);
}


if (!empty($_GET)) {
    $type = $_GET['type'];
    $editId = $_GET['id'];
    $editTitle = $_GET['title'];
    $editTitle = str_replace("_"," ", $editTitle);
    $editDesc = $_GET['description'];
    $editDesc = str_replace("_"," ", $editDesc);
    $editPath = $_GET['path'];
}
$edit = "edit";

if(isset($_POST["editdoc"])){
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $desc = mysqli_real_escape_string($db, $_POST['desc']);
    $dir = "./uploads/";
    $target_file = $dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            header('location: documents.php');
        }
    }

    unlink($editPath);

    $query = "UPDATE document SET title='$title', description='$desc',source='$target_file' WHERE id='$editId' ";
    $results = mysqli_query($db, $query);
    header('location: adddocument.php');
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
    <?php if(isset($type) && strcmp($type, $edit) == 0){ echo "?????????????????????? ????????????????";} else{echo "???????????????? ???????? ????????????????";}?>
    </title>
</head>

<body>

    <div class="page">
        <h1 class="title-container"><?php if(isset($type) && strcmp($type, $edit) == 0){ echo "?????????????????????? ????????????????</h1>";} else{echo "???????????????? ???????? ????????????????</h1>";}?>
        <div class="flex-parent-element">
            <div class="flex-child-element subflex first">
                <ul class="menu">
                    <li> <a href="./index.php" class="button">???????????? ????????????</a></li>
                    <li> <a href="./announcement.php" class="button">????????????????????????</a></li>
                    <li> <a href="./communication.php" class="button">??????????????????????</a></li>
                    <li> <a href="./documents.php" class="button">?????????????? ??????????????????</a></li>
                    <li> <a href="./homework.php" class="button">????????????????</a></li>
                    <li> <a href="./login.php" class="button">????????????????????</a></li>
                </ul>
            </div>
            <form class="contact-form" method="post" enctype="multipart/form-data">
                <label class="form-label"> ????????????:</label><br>
                <input class="text-input" type="text" size="50" required name="title" id="title" <?php if(isset($type) && strcmp($type, $edit) == 0){
                    echo "value=\"$editTitle\"";
                }

                ?>><br><br>
                <label class="form-label"> ??????????????????:</label><br>
                <textarea rows="5" cols="40" required name="desc" id="desc"> <?php if(isset($type) && strcmp($type, $edit) == 0){echo $editDesc;}?></textarea><br><br>
                <label class="form-label"> ????????????:</label><br><br>
                <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
                <?php
                    if (isset($type) && strcmp($type, $edit) == 0) {
                        echo "<button class=\"send-button\" type=\"editdoc\" id=\"editdoc\" required name=\"editdoc\">?????????????????????? ????????????????</button>";
                    } else {
                        echo "<button class=\"send-button\" type=\"adddoc\" id=\"adddoc\" required name=\"adddoc\">???????????????? ???????? ????????????????</button>";
                    }
                ?>
            </form><br>
        </div>
    </div>

    <footer>
        <a href="<?php $url ?>" class="button">Back to top</a>
    </footer>


</body>

</html>