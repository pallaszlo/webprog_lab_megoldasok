<?php
if (isset($_POST['elkuldott'])) {
    if (isset($_POST['kerdes1'])) {
        if ($_POST['kerdes1'] == "Lisszabon") {
            echo "Eltaláltad," . $_POST['kerdes1'] . "a helyes válasz!<hr>";
        }

        if ($_POST['kerdes1'] != "Lisszabon") {
            echo "Tévedsz, nem $_POST[kerdes1] a helyes válasz!<hr>";
        }
    } else
        echo "Valasztani kell!";
}
?>
<form method="POST" action="">
    <input type="hidden" name="elkuldott" value="true">
    Mi Portugália fővárosa?
    <br>
    <br>
    <input name="kerdes1" type="radio" value="Portó">
    Portó
    <br>
    <input name="kerdes1" type="radio" value="Lisszabon">
    Lisszabon
    <br>
    <input name="kerdes1" type="radio" value="Madrid">
    Madrid
    <br>
    <br>
    <input type="submit" value="Tipp elküldése">
</form>

