<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        if (isset($_POST['submit'])) {
            $nev = $_POST['nev'];
            $szak = $_POST['szak'];
            $atlag = $_POST['atlag'];
            // Create connection
            $conn = new mysqli("localhost", "root", "", "egyetem");
            // Check connection
             if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "INSERT INTO hallgatok (nev,szak,atlag) VALUES ('$nev','$szak','$atlag')";

            if ($conn->query($sql) === TRUE) {
                $conn->close();
                echo "Köszönjük! Az adatokat elmentettük.<br>";
                echo "<a href='bevitel.php'>Uj adat</a><br>";
                echo "<a href='listazas.php'>Adatok listazasa</a><br>";
            }else{
                echo "Muveleti hiba.\n";
            }
        } else {
            // formot megmutat:
            ?>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                Nev:<input type="Text" name="nev" required><br>
                Szak:<input type="Text" name="szak"><br>
                Atlag:<input type="Text" name="atlag"><br>
                <input type="Submit" name="submit" value="Elkuld">
            </form>

            <?php
        } // end if
        ?>

    </body>
</html>
