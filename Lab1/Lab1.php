<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>1.Laborgyakorlat</title>
    </head>
    <body>
        <?php
            //phpinfo();
        ?>
        <?php
            echo "Hello World";
            echo "<p>PHP is Fun!</p>";
            echo "This ", "string ", "was ", "made ", "with multiple parameters.";
            print "I'm about to learn PHP!<br>";
        ?>
        <?php                    
            // Egysoros megjegyzés
            # Ez is egysoros megjegyzés
            /* Többsoros
                megjegyzés */        
        ?>
        
        <?php
            $testing; // declare without assigning
            print gettype( $testing ); // NULL
            print "<br />";
            $testing = 5;
            print gettype( $testing ); // integer
            print "<br />";
            $testing = "five";
            print gettype( $testing ); // string
            print "<br />";
            $testing = 5.0;
            print gettype( $testing ); // double
            print "<br />";
            $testing = true;
            print gettype( $testing ); // boolean
            print "<br />";
        ?>
        
        <?php
            $undecided = 3.14;
            print gettype( $undecided ); // double
            print " -- $undecided<br />";  // 3.14
            settype( $undecided, 'string' );
            print gettype( $undecided ); // string
            print " -- $undecided<br />";  // 3.14
            settype( $undecided, 'integer' );
            print gettype( $undecided ); // integer
            print " -- $undecided<br />";  // 3
            settype( $undecided, 'double' );
            print gettype( $undecided ); // double
            print " -- $undecided<br />";  // 3.0
            settype( $undecided, 'boolean' );
            print gettype( $undecided ); // boolean
            print " -- $undecided<br />";  // 1
        ?>
        
        <?php
            $undecided = 3.14;
            $holder = ( double ) $undecided;
            print gettype( $holder ) ; // double
            print " -- $holder<br />";   // 3.14
            $holder = ( string ) $undecided;
            print gettype( $holder );  // string
            print " -- $holder<br />";   // 3.14
            $holder = ( int ) $undecided;
            print gettype( $holder );  // integer
            print " -- $holder<br />";   // 3
            $holder = ( double ) $undecided;
            print gettype( $holder );  // double
            print " -- $holder<br />";   // 3.14
            $holder = ( bool ) $undecided;
            print gettype( $holder );  // boolean
            print " -- $holder<br />";   // 1
        ?>
        
        <?php
            define ( "USER", "Gerald" );
            print "Welcome ".USER;	
        ?>
        
        <?php
            $x = 5;
            $y = 10;
            $z1 = $x + $y;
            $z2 = $x * $y;
            $z3 = $x / $y;
            echo $z1;
            echo "$z1";
            echo '$z1';
            echo "<br>Összeg: ".$z1;
            echo "<p>Összeg: $z1</p>";
            $z = $x . "*" . $y . " eredménye:" . ($x * $y) . " lesz";
            print $z;                        
        ?>
        
        <?php
            echo "<table border=\"1\" align=\"center\">";
            echo "<tr><th>Quantity</th>";
            echo "<th>Price</th></tr>";
            echo "<tr><td>";
            echo 1;
            echo "</td><td>";
            echo 12;
            echo "</td></tr>";
            echo "</table>";
        ?>

        <?php
            echo <<<EOD
            <table border=\"1\" align=\"center\">
            <tr><th>Quantity</th><th>Price</th></tr>
            <tr><td>1</td><td>12</td></tr>
            </table>
            EOD;
        ?>
        
        <?php
            $a = 'Variables';
           $str = <<<EOD
            Example of string
            spanning multiple lines
            using nowdoc syntax.
            $a are parsed.
            EOD;
           echo $str;
        ?>        
        
        <?php
            $t = date("H");
            if ($t < "20") {
                echo "Have a good day!";
            } else {
                echo "Have a good night!";
            }
        ?>
        
        <?php
            $t = date("H");
            if ($t < "10") {
                echo "Have a good morning!";
            } elseif ($t < "20") {
                echo "Have a good day!";
            } else {
                echo "Have a good night!";
            }
        ?>
        
        <?php
            $x = rand(0,3);
            switch($x){
                case 0: echo 'x is equal 0';
                        break;
                case 1: echo 'x is equal 1';
                        break;
                case 2: echo 'x is equal 2';
                        break;
                case 3: echo 'x is equal 3';
                break;
            }
        ?>
    </body>
</html>
