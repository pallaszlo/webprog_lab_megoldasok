<?php
if (isset($_POST['formSubmit'])) {
    $doors = $_POST["formDoor"] ?? [];
    //$doors  = isset($_POST["formDoor"]) ? $_POST["formDoor"] : [];
    if (empty($doors)) {
        echo "Nem valasztottal ki egyet sem!<br>";
    } else {
        echo "Doors:<br>";
        foreach ($doors as $door) {
            echo $door . "<br>";
        }
    }

    if (isset($_POST["formWheelchair"])) {
        echo "You need wheelchair";
    } else {
        echo "You don't need wheelchair";
    }
}
?>

<form action="" method="post">
    <p>
        Which buildings do you want access to?<br/>
        <input type="checkbox" name="formDoor[]" value="A"/>Acorn Building<br/>
        <input type="checkbox" name="formDoor[]" value="B"/>Brown Hall<br/>
        <input type="checkbox" name="formDoor[]" value="C"/>Carnegie Complex<br/>
        <input type="checkbox" name="formDoor[]" value="D"/>Drake Commons<br/>
        <input type="checkbox" name="formDoor[]" value="E"/>Elliot House
    </p>
    <p>
        Do you need wheelchair access?
        <input type="checkbox" name="formWheelchair" value="Yes"/>
    </p>
    <input type="submit" name="formSubmit" value="Submit"/>
</form>

