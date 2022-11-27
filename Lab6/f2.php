<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <?php

        if (isset($_POST["nev"]) && isset($_POST["email"])) {
            //print_r($_POST);
            $adatok = "Név: " . $_POST["nev"] . "<br><br>E-mail: " . $_POST["email"];
        } else {
            $adatok = "";
        }
        print $adatok;


        ?>

        <form method="POST" action="feldolgoz.php">
            Név: <input type="text" name="nev" value="">
            <br><br>
            E-mail: <input type="text" name="email" value="">
            <br><br>
            <input type="submit" value="Elküldés">
        </form>


    </body>
</html>
