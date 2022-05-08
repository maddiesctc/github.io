<?php
    include_once 'header.php';
    $lifetime = 60 * 60 * 24 * 365;
    session_set_cookie_params($lifetime, '/');
    session_start();

    $_SESSION;

    echo date("D M d, Y G:i a");
?>

<section class="signup-form">

<h2>Log In</h2>
<form action="/includes/login.inc.php" method="post">
    <input type="text" name="uid" value="" placeholder="Username/Email" autocomplete="off" required/>
    <input type="password" name="pwd" value="" placeholder="Password" autocomplete="off" required/>
    <button type="submit" name="submit">Log In</button>
</form> 

<?php
    if(isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        } else if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect Login Info</p>";
        }
    }
?>

</section>
    
<?php
    include_once 'footer.php';
?>