<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="scripts.js"></script>

    <link rel="stylesheet" type="text/css" href="./styles.css" />
    <title>
        Αρχική Σελίδα
    </title>
</head>

<body>

    <div class="page">
        <h1 class="title-container">Αρχική Σελίδα</h1>
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
                <h2 class="heading2">
                    Αποστολή e-mail μέσω web φόρμας
                </h2>
                <form action="mailto:tutor@csd.auth.gr" class="contact-form">
                    <label class="form-label"> Αποστολέας:</label><br>
                    <input class="text-input" type="text" size="50"><br><br>
                    <label class="form-label"> Θέμα:</label><br>
                    <input class="text-input" type="text" size="100"><br><br>
                    <label class="form-label"> Κείμενο:</label> <br>
                    <textarea name="body" id="body" rows="8" cols="60"></textarea><br>
                    <input class="send-button" type="submit" value="Αποστολή">
                </form><br>
                <h2 class="heading2">Αποστολή e-mail με χρήση e-mail διεύθυνσης</h2>
                <div class="inside-form">
                    <p class="text-div">
                        Εναλλακτικά μπορείτε να αποστείλετε e-mail στην παρακάτω διεύθυνση ηλεκτρονικού ταχυδρομείου <a
                            href="mailto: tutor@csd.auth.test.gr">tutor@csd.auth.test.gr</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <a href="./communication.html" class="button">Back to top</a>
    </footer>


</body>

</html>