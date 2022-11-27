<?php
if (isset($_POST["elkuld"])) {
    $szam1 = $_POST["szam1"];
    $szam2 = $_POST["szam2"];
    $muv = $_POST["muv"];
    //if (isset($szam1) && isset($szam2)) {
    if (!empty($szam1) && !empty($szam2)) {
        if ($muv == "+")
            print "$szam1 + $szam2 = " . ($szam1 + $szam2) . "<br>";
        if ($muv == "Kivonás (-)")
            print "$szam1 - $szam2 = " . ($szam1 - $szam2) . "<br>";
        if ($muv == "Szorzás (*)")
            print "$szam1 * $szam2 = " . ($szam1 * $szam2) . "<br>";
        if ($muv == "Osztás (/)")
            print "$szam1 / $szam2 = " . ($szam1 / $szam2) . "<br>";
    }
    else {
        echo "Mindket szamot meg kell adni!";
    }
}
?>

<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="f6.php" >
            <br>Az elsõ szám:
            <input type="number" name="szam1">
            <br>A második szám:
            <input type="text" name="szam2">
            <br>Mûveleti jel:
            <select name="muv">
                <option>+</option>
                <option>-</option>
                <option> Szorzás (*)
                <option> Osztás (/)
            </select><br>
            <input type="submit" name ="elkuld" value="Számol">
        </form>
    </body>
</html>
