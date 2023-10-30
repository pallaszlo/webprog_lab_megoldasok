<?php
if (isset($_POST['elkuldott'])) {
    $szam = rand(1, 10);
    //echo $_POST['elkuldott'];
    if ($_POST['talalgatas'] > $szam) {
        echo "<h3>A szám kisebb!</h3>";
        echo "<br>A szám, amire gondoltam $szam, nem nyert,
		   játsszon újra!<hr>";
    } else if ($_POST['talalgatas'] < $szam) {
        echo "<h3>A szám nagyobb!</h3>";
        echo "<br>A szám, amire gondoltam: $szam, nem nyert,
		   játsszon újra!<hr>";
    } else {
        echo "<br>A szám, amire gondoltam:
		 $szam, Ön nyert! Játsszon újra!<hr>";
    }
}
?>
<form method="POST" action="">
    <input type="hidden" name="elkuldott" value="<?php echo $szam; ?>">
    Melyik számra gondoltam 1 és 10 között?
    <input name="talalgatas" type="text">
    <br>
    <br>
    <input type="submit" value="Elküld">
</form>

