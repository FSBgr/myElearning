<!DOCTYPE html>

<?php 
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    
    
    function loginForm($url){
        if (strpos($url, "login=true") == true){
            echo "<form class=\"contact-form\" method=\"post\">  <label class=\"form-label\"> Username:</label><br> 
            <input class=\"text-input\" type=\"text\" size=\"50\" required name=\"username\" id=\"username\"><br><br>
            <label class=\"form-label\"> Password:</label><br>
            <input class=\"text-input\" type=\"text\" size=\"100\" required name=\"pwd\" id=\"pwd\"><br><br>
            <button class=\"send-button\" type=\"submit\" id=\"submit\" required name=\"submit\">Log-in</button>
        </form><br>";
        } 
        if(strpos($url, "register")==true){
            echo "<form class=\"contact-form\" method=\"post\"> <label class=\"form-label\"> Όνομα:</label><br> 
            <input class=\"text-input\" type=\"text\" size=\"50\" required name=\"name\" id=\"name\"><br><br>  
            <label class=\"form-label\"> Επώνυμο:</label><br> 
            <input class=\"text-input\" type=\"text\" size=\"50\" required name=\"lastname\" id=\"lastname\"><br><br>
            <label class=\"form-label\"> Email:</label><br> 
            <input class=\"text-input\" type=\"text\" size=\"50\" required name=\"username\" id=\"username\"><br><br>
            <label class=\"form-label\"> Password:</label><br>
            <input class=\"text-input\" type=\"text\" size=\"100\" required name=\"pwd\" id=\"pwd\"><br><br>
            <label class=\"form-label\"> Pόλος: </label><br>
            <input type=\"radio\" id=\"tutor\" name=\"tutor\" value=\"tutor\">
            <label for=\"tutor\">Tutor</label><br>
            <input type=\"radio\" id=\"student\" name=\"student\" value=\"student\">
            <label for=\"student\">Student</label><br>  
            <button class=\"send-button\" type=\"submit\" id=\"submit\" required name=\"submit\">Register</button>
        </form><br>";
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
        Log-in
    </title>
</head>

<body>

    <div class="page">
        <h1 class="title-container">Log-in</h1>
        <div class="flex-parent-element">
            <div class="flex-child-element subflex first">
                <ul class="menu">
                    <li> <a href="./index.php" class="button">Αρχική Σελίδα</a></li>
                    <li> <a href="./announcement.php" class="button">Ανακοινώσεις</a></li>
                    <li> <a href="./communication.php" class="button">Επικοινωνία</a></li>
                    <li> <a href="./documents.php" class="button">Έγγραφα Μαθήματος</a></li>
                    <li> <a href="./homework.php" class="button">Εργασίες</a></li>
                    <li> <a href="./login.php?login=true" class="button">login/logout</a></li>
                </ul>
            </div>
            <?php 
                loginForm($url);
            ?>
            <div> 
                <a href="./login.php?register"> Register here </a>
            </div><br>
        </div>
    </div>

    <footer>
        <a href="<?php $url ?>" class="button">Back to top</a>
    </footer>


</body>

</html>