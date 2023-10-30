<?php
if (isset($_POST["elkuld"])) {
    $szam1 = $_POST["szam1"];
    $szam2 = $_POST["szam2"];
    $muv = $_POST["muv"];
    if (is_numeric($szam1) && is_numeric($szam2)) {
        if ($muv == "+")
            print "$szam1 + $szam2 = " . ($szam1 + $szam2) . "<br>";
        if ($muv == "-")
            print "$szam1 - $szam2 = " . ($szam1 - $szam2) . "<br>";
        if ($muv == "*")
            print "$szam1 * $szam2 = " . ($szam1 * $szam2) . "<br>";
        if ($muv == "/")
            print "$szam1 / $szam2 = " . ($szam1 / $szam2) . "<br>";
    } else {
        echo "Mindket szamot meg kell adni!";
    }
}
?>


<form method="POST" action="">
    <br>Az első szám:
    <input type="number" name="szam1">
    <br>A második szám:
    <input type="text" name="szam2">
    <br>Műveleti jel:
    <select name="muv">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select><br>
    <input type="submit" name="elkuld" value="Számol">
</form>

