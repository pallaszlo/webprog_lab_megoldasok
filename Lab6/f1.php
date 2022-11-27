<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = 20;
        $b = 3;

        function szum_ab() {
            $szum = $GLOBALS["a"] + $GLOBALS["b"];
            return $szum;
        }

        echo szum_ab();
        print_r($GLOBALS);
        ?>

        <?php
        print"<table border=0>";
        foreach ($_SERVER as $key => $val) {
            echo "<tr><td>" . $key . "</td><td>" . $val . "</tr>";
        }
        print"</table>";
        ?>

    </body>
</html>
