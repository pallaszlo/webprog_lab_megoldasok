<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if(isset($_POST['submit'])){
    if(empty($_POST['name'])){
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST['name']);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
}


function test_input($data){
    return htmlspecialchars($data);
}

?>

<form method="post" action="f2.php">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    Website: <input type="text" name="website" value="<?php echo $website; ?>">
    <span class="error"><?php echo $websiteErr; ?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?>
           value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
    <span class="error">* <?php echo $genderErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>".$email;


?>
