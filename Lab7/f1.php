<?php
    setcookie("user", "Futyula Joska", time()+3600);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>    
    <body>
    <?php
        if (isset($_COOKIE["user"]))
            echo "Üdvözöllek " . $_COOKIE["user"] . "!<br />";
        else
            echo "Üdvözöllek első látogatásod alkalmából!<br />";
    ?>
    </body>
</html>




