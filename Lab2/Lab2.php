<?php

declare(strict_types=1); // strict requirement

/* ------------------------------ 1.Feladat ------------------------------------- */

$szam = 3;
$n = 1;
while ($n < 10) {
    print $n . " x " . $szam . " = " . ($n * $szam) . "<br>";
    ++$n;
}

$szam = 3;
for ($index = 1; $index < 10; $index++) {
    print $index . " x " . $szam . " = " . ($index * $szam) . "<br>";
}


/* ------------------------------ 2.Feladat ------------------------------------- */

$magassag = 5;
for ($i = 1; $i <= $magassag; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

/* ------------------------------ 3.Feladat ------------------------------------- */

echo "<table border='1'>";
for ($i = 1; $i <= 8; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 8; $j++) {
        if (($i + $j) % 2 == 0) {
            echo "<td style='background-color: white; width: 30px; height: 30px;'></td>";
        } else {
            echo "<td style='background-color: black; width: 30px; height: 30px;'></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

/* ------------------------------ 4.Feladat ------------------------------------- */

function szorzoTabla(int $szam): void
{
    for ($i = 1; $i <= 10; $i++) {
        print $i . " x " . $szam . " = " . ($i * $szam) . "<br>";
    }
}

szorzoTabla(4);
szorzoTabla(9);
//szorzoTabla(1.2); // strict mode

// Névtelen függvény
$szorzoTabla = function ($szam): void {
    for ($i = 1; $i <= 10; $i++) {
        print $i . " x " . $szam . " = " . ($i * $szam) . "<br>";
    }
};
$szorzoTabla(5);
//var_dump($szorzoTabla);

/* ------------------------------ 5.Feladat ------------------------------------- */

function atlag(float $a, float $b): float
{
    return ($a + $b) / 2;
}

echo "Átlag: " . atlag(2, 3);

// Névtelen függvény
$atlag = function (float $a, float $b): float {
    return ($a + $b) / 2;
};

echo "Átlag: " . atlag(2, 3);

// Arrow function
$c = 5;
$atlagAF = fn(float $a, float $b) => ($a + $b + $c ) / 2;
echo "Átlag: " . $atlagAF(2, 3);

/* ------------------------------ 6.Feladat ------------------------------------- */

$udvozloSzoveg = "Jo reggelt";
$udvozles = function ($nev) use ($udvozloSzoveg) {
    return "<br>" . $udvozloSzoveg . " " . $nev;
};

echo $udvozles("Kiss Lajos");
$udvozloSzoveg = "Hello";
echo $udvozles("Kiss Lajos");

/* ------------------------------ 7.Feladat ------------------------------------- */

$tomb = array(1, 2, 3, 4, 5);
for ($i = 0; $i < count($tomb); $i++)
    echo "A $i.elem: " . "$tomb[$i] <br>";

/* ------------------------------ 8.Feladat ------------------------------------- */

$osztalyzat = array(
    "matek" => 8,
    "biológia" => 9,
    "kémia" => 7,
    "fizika" => 9,
    "földrajz" => 10
);
/*
$osztalyzat = [
    "matek" => 8,
    "biológia" => 9,
    "kémia" => 7,
    "fizika" => 9,
    "földrajz" => 10
];
*/

foreach ($osztalyzat as $x => $y) {
    print $x . ": " . $y . "<br>";
}

/* ------------------------------ 9.Feladat ------------------------------------- */

function atlagOsztalyzat(array $osztalyzat): ?float
{
    $i = 0;
    $szum = 0;
    foreach ($osztalyzat as $jegy) {
        ++$i;
        $szum += $jegy;
    }
    return $szum / $i;
}

echo "Atlag: " . atlagOsztalyzat($osztalyzat) . "<br>";

/* ------------------------------ 10.Feladat ------------------------------------- */

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

// Html tablazatban

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
