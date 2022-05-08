<?php
    $lifetime = 60 * 60 * 24 * 365;
    session_set_cookie_params($lifetime, '/');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>PHP Final</title>
        <link rel="stylesheet" href="/css/mystyles.css">
    </head>

<nav>
    <div class="wrapper">
    <a href="index.php"><img src= "" alt= "Logo"></a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php 
            if (isset($_SESSION["useruid"])){
                echo "<li><a href='profile.php'>Profile Page</a></li>";
                echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
            }
            else { 
                echo  "<li><a href='login.php'>Login</a></li>";
                echo "<li><a href='signup.php'>Sign Up</a></li>";
            }
            ?>
        </ul>
        </div>
</nav>
