<?php if ($_SERVER['REQUEST_METHOD'] === 'GET') : ?>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" required="required" placeholder="Enter your name"/>
        </div>
        <div>
            <label for="name">Email:</label>
            <input type="email" name="email" required="required" placeholder="Enter your email"/>
        </div>
        <button type="submit">Subscribe</button>
    </form>
<?php else : ?>
    <?php
    if (isset($_POST['name'], $_POST['email'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

        print "Név: " . $name;
        print "<br><br>";
        print "E-mail: " . $email;
    }
    ?>
<?php endif ?>
