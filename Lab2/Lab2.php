<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>2.Laborgyakorlat</title>
    </head>
    <body>

        <?php        
            $szam = 3;
            $n = 1;
            while ($n < 10) {
                print $n . " x " . $szam . " = " . ($n * $szam) . "<br>";
                ++$n;
            }
        ?>

        <?php
            echo "<table border=1>";
            for ($y = 1; $y <= 12; $y++) {
                echo "<tr>"; // sor kezdete a HTML táblázatban
                for ($x = 1; $x <= 12; $x++) {
                    echo "<td>"; // cella kezdete
                    echo ($x * $y);
                    echo "</td>"; // cella vége
                }
                echo "</tr>"; // sor vége
            }
            echo "</table>"; // táblázat vége
        ?>


       
        <?php
            echo "<table border=1>";
            $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
            $color = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)];
            $r1 = rand(1, 255);
            $r2 = rand(1, 255);
            $r3 = rand(1, 255);
            for ($i = 1; $i <= 10; $i++) {
                print "<tr align='center'>";
                for ($j = 1; $j <= 10; $j++) {
                    if ($i == $j) {
                        print "<td bgcolor=rgb($r1,$r2,$r3)><font color='#FFFFFF' size=4>" . ($i * $j) . "</font></td>";
                    } else {
                        print "<td>" . ($i * $j) . "</td>";
                    }
                }
                print "</tr>";
            }
            echo "</table>";
        ?>

            <?php

            function atlag($a, $b) { //függvény létrehozása
                $ab_atlag = ($a + $b) / 2;
                return $ab_atlag;
            }

            $szam1 = 3;
            $szam2 = 5; //változók létrehozása
            $SZAM = atlag($szam1, $szam2); //az átlag kiszámítása
            echo "Átlag: " . $SZAM;
            ?>

            <?php
            $tomb = array(1, 2, 3, 4, 5);
            for ($i = 0; $i < count($tomb); $i++)
                echo "A $i.elem: " . "$tomb[$i] <br>";
            //---------------------------------------------    
            $osztalyzat = array("matek" => 2, "biológia" => 4, "kémia" => 4, "fizika" => 2, "földrajz" => 5);
            foreach ($osztalyzat as $kulcs => $ertek) {
                print $kulcs . ": " . $ertek . "<br>";
            }

            //----------------------------------------------
            function atlag2($osztalyzat) {
                $i = 0;
                $szum = 0;
                foreach ($osztalyzat as $jegy) {
                    ++$i;
                    $szum += $jegy;
                }
                return $szum / $i;
            }

            echo "Atlag: " . atlag2($osztalyzat) . "<br>";
            //----------------------------------------------
            $vevok = array
                (
                array(
                    "nev" => "Napfütő Bt",
                    "tevekenyseg" => "lógás",
                    "megalakulas" => 1990,
                    "cim" => "Budapest"
                ),
                array(
                    "nev" => "Nevesincs Kft.",
                    "tevekenyseg" => "reklám",
                    "megalakulas" => 1995,
                    "cim" => "Szeged"
                ),
                array(
                    "nev" => "Léhűtő Bt.",
                    "tevekenyseg" => "hűtéstechnika",
                    "megalakulas" => 1998,
                    "cim" => "Budapest"
                )
            );
            foreach ($vevok as $vevo) {
                foreach ($vevo as $kulcs => $ertek) {
                    print "$kulcs: $ertek<br>";
                }
                print "<br>";
            }
            //----------------------------------------------
            echo "<table border=1>";
            foreach ($vevok as $vevo) {
                echo "<tr>";
                foreach ($vevo as $kulcs => $ertek) {
                    //print "$kulcs: $ertek<br>";
                    echo "<td>";
                    echo $ertek;
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            //----------------------------------------------
            $napok = array(
                "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
                "EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
                "DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
            );

            foreach ($napok as $kulcs => $ertek) {
                echo "$kulcs:";
                foreach ($ertek as $napok) {
                    print "$napok,";
                }
                print "<br>";
            }
            //----------------------------------------------
            $str = "répa, retek, saláta, paprika, zeller, uborka";
            $zoldseg = explode(", ", $str);
            print_r($zoldseg);
            echo "<br>";

            //----------------------------------------------
            for ($i = 1; $i <= 10; $i++) {
                $t[] = rand(1, 50);
            }
            print_r($t);
            sort($t);
            print_r($t);
            ?>
 
    </body>
</html>
