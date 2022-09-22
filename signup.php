<?php
include_once "header.php";
?>
<link rel="stylesheet" href="css/signup.css">
<section class="signup-form">
    <div class="container">
        <form action="includes/signup.inc.php" method="POST">
            <h1 class="form_title">Create Account</h1>

            <div class="form_input-group">
                <input type="text" class="form_input" name="name" autofocus placeholder="Full Name...">
            </div>

            <div class="form_input-group">
                <input type="text" class="form_input" name="email" autofocus placeholder="E-mail...">
            </div>

            <div class="form_input-group">
                <input type="text" class="form_input" name="uid" autofocus placeholder="Username...">
            </div>

            <div class="form_input-group">
                <input type="password" class="form_input" name="pwd" autofocus placeholder="Password...">
            </div>

            <div class="form_input-group">
                <input type="password" class="form_input" name="pwdrepeat" autofocus placeholder="Confirm Password...">
            </div>

            <button class="form_button" type="submit" name="submit">Sign Up</button>
        </form>

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p class='form_input-error'>Fill in all fields!</p>";
            } else if ($_GET["error"] == "invaliduid") {
                echo "<p class='form_input-error'>Choose a proper username!</p>";
            } else if ($_GET["error"] == "invalidemail!") {
                echo "<p class='form_input-error'>Choose a proper email!</p>";
            } else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p class='form_input-error'>Passwords dosen't match!</p>";
            } else if ($_GET["error"] == "stmtfailed") {
                echo "<p class='form_input-error'>something went wrong, try again!</p>";
            } else if ($_GET["error"] == "usernametaken") {
                echo "<p class='form_input-error'>username already taken!</p>";
            } else if ($_GET["error"] == "none") {
                echo "<p class='form_input-success'>You have succesfully signed up!</p>";
            }
        }
        ?>
    </div>
</section>

<?php
include_once "footer.php";
?>