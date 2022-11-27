<!DOCTYPE>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>View Your Settings</title>
    <style>
        p {
        <?php

        // Check for a font_size value:
        if (isset($_COOKIE['font_size'])) {
            print "font-size: " . $_COOKIE['font_size'] . ";\n";
        } else {
            print "font-size: medium;\n";
        }

        // Check for a font_color value:
        if (isset($_COOKIE['font_color'])) {
            print "color: #" . $_COOKIE['font_color'] . ";\n";
        } else {
            print "color: #000; \n";
        }

        ?>
        }
    </style>
</head>
<body>
<p><a href="customize.php">Customize Your Settings</a></p>
<p><a href="reset.php">Reset Your Settings</a></p>

<p>
    yadda yadda yadda yadda yadda
    yadda yadda yadda yadda yadda
    yadda yadda yadda yadda yadda
    yadda yadda yadda yadda yadda
    yadda yadda yadda yadda yadda
</p>

</body>
</html>
