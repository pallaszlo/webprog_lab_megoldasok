<?php
if (isset($_POST['elkuldott'])) {
    if (isset($_COOKIE['gszam'])) {
        logika($_POST["talalgatas"], $_COOKIE['gszam']);
    } else {
        $gszam = rand(1, 10);
        setcookie('gszam', $gszam, time() + 3600);
        logika($_POST["talalgatas"], $gszam);
    }
}

function logika($szam, $gszam)
{
    if ($szam > $gszam) {
        echo "<h3>A szám kisebb!</h3>";
        echo "<br>nem nyert,
		   játsszon újra!<hr>";
    } else if ($szam < $gszam) {
        echo "<h3>A szám nagyobb!</h3>";
        echo "<br>Anem nyert,
		   játsszon újra!<hr>";
    } else {
        echo "<br>A szám, amire gondoltam:
		 $gszam, Ön nyert! Játsszon újra!<hr>";
        setcookie('gszam', '', time() - 3600);
    }
}

?>

<form method="POST" action="f3.php">
    <input type="hidden" name="elkuldott" value="">
    Melyik számra gondoltam 1 és 10 között?
    <input name="talalgatas" type="text">
    <br>
    <br>
    <input type="submit" value="Elküld">
</form>

