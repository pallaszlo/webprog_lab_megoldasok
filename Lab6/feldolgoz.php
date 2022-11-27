<?php
    print "Név: ".  htmlspecialchars($_POST["nev"]);
    print "<br><br>";
    print "E-mail: ".$_POST["email"];
    print "Rejtett: ". ($_POST["rejtett"] ?? "");
?>
