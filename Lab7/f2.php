<?php
if (!isset($_COOKIE['visits']))
    $_COOKIE['visits'] = 0;
    $visits = $_COOKIE['visits'] + 1;
    setcookie('visits', $visits, time() + 3600 * 24 * 365);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>    

    <body>
        <?php
        if ($visits > 1) {
            echo("Ez a $visits. látogatásod");
        } else {
            // Elso latogatas
            echo'Üdvözöllek a honlapomon!';
        }
        ?>
    </body>
</html>


