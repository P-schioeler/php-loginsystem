<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project 01</title>
</head>

<body>
    <header>
        <nav class="topnav">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<li><a href='profile.php'>Profile page</a></li>";
                        echo "<li><a href='files.php'>Files</a></li>";
                        echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                        echo "<li><P>Hi " . $_SESSION["useruid"] . "</P></li>";
                    } else {
                        echo "<li><a href='signup.php'>Sign Up</a></li>";
                        echo "<li><a href='login.php'> Login</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </header>