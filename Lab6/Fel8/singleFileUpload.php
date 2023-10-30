<?php
if (isset($_POST['kep'])) {
    $valid_formats = array("image/jpg", "image/jpeg", "image/png", "image/bmp");
    if (!in_array($_FILES["kep"]["type"], $valid_formats)) {
        die("Csak JPG, PNG vagy BMP!");
    }

    if ($_FILES["kep"]["error"] != 0) {
        die("Hiba a feltöltés során");
    }


    if ($_FILES["kep"]["size"] > 10 * 1024 * 1024) {
        die("Túl nagy méretű fájl");
    }

    print_r($_FILES["kep"]);
    move_uploaded_file($_FILES["kep"]["tmp_name"], "../uploads/" . $_FILES["kep"]["name"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fajl feltoltes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="kep"/>
    <input type="submit" value="Upload!"/>
</form>
</body>
</html>
