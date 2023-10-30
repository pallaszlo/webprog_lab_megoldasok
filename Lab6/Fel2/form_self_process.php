<?php
if (isset($_POST['name'], $_POST["email"])) {
    //$name = $_POST['name']; //<script>alert('Hello');</script>
    //echo htmlspecialchars("<b>Hello</b>");
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    print "Név: " . $name;
    print "<br><br>";
    print "E-mail: " . $email;
}
?>

<form method="POST" action="">
    Név: <input type="text" name="name" value="">
    <br><br>
    E-mail: <input type="text" name="email" value="">
    <br><br>
    <input type="submit" value="Elküldés">
</form>
