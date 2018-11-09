<?php

    if ($_POST) {
        
        $email = $_POST["email"];
        $text = $_POST["text"];
        echo $text;

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email address '$email' is considered valid.\n";
        } else {
            echo "Email invalid";
        }

    }

    

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontant Form</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet"> 
</head>

<body>

    <div class="container-form">

        <header>
            <img src="http://place4code.com/img-git/avatar128.jpg" alt="avatar">
            <p><b>Send</b> to: <span id="to"></span></p>
        </header>

        <article>

            <form action="kontakt_form.php" method="post" id="my-form">

            <input class="nice-border" type="email" name="email" id="email" value="email@email.com" placeholder="e-mail">

            <br>
            <textarea class="nice-border" name="text" id="text"></textarea>
            <br>
            
            <button type="submit" class="btn-submit">Submit <i class="fas fa-location-arrow"></i></button>
            <button type="button" class="btn-clear">Clear</button>
            </form>

        </article>

        <div class="err"><i class="fas fa-exclamation-triangle"></i></div>

        
    </div>

    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>