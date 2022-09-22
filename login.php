<?php
include_once "header.php";
?>
<link rel="stylesheet" href="css/signup.css">
<section class="signup-form">
    <div class="container">
        <form action="includes/login.inc.php" method="POST">
            <h1 class="form_title">Login</h1>

            <div class="form_input-group">
                <input type="text" class="form_input" name="uid" autofocus placeholder="Username or Email...">
            </div>

            <div class="form_input-group">
                <input type="password" class="form_input" name="pwd" autofocus placeholder="Password...">
            </div>

            <button type="submit" class="form_button" name="submit">Sign In</button>
        </form>

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p class='form_input-error'>Incorrect login!</p>";
            } else if ($_GET["error"] == "wronglogin") {
                echo "<p class='form_input-error'>Choose a proper username!</p>";
            }
        }
        ?>
    </div>
</section>

<?php
include_once "footer.php";
?>