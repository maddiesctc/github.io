<?php

include_once 'header.php';

$lifetime = 60 * 60 * 24 * 365;

session_set_cookie_params($lifetime, '/');
session_start();

$_SESSION;

echo date("D M d, Y G:i a");

?>


<section class="signup-form">

<h2>Sign Up</h2>
<form action="/includes/signup.inc.php" method="post">
    <input type="text" value="test" name="name" placeholder="Name" autocomplete="off" required>
    <input type="text" value="test@test.com" name="email" value="" placeholder="Email" autocomplete="off" required/>
    <input type="text" value="test" name="uid" value="" placeholder="Username" autocomplete="off" required/>
    <input type="password" value="test" name="pwd" value="" placeholder="Password" autocomplete="off" required/>
    <input type="password" value="test" name="pwdrepeat" value="" placeholder="Confirm Password" autocomplete="off" required/><br><br>

    <button type="submit" name="submit">Sign Up</button>
</form>

<?php
if(isset($_GET["error"])) {
    if($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";
    } else if ($_GET["error"] == "invaliduid") {
        echo "<p>Choose a proper username!</p>";
    } else if ($_GET["error"] == "invalidemail") {
        echo "<p>Choose a proper email!</p>";
    } else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords don't match!</p>";
    } else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong! Try again.</p>";
    } else if ($_GET["error"] == "usernametaken") {
        echo "<p>That username is already taken. Please choose a new one.</p>";
    } else if ($_GET["error"] == "none") {
        echo "<p>You have signed up!</p>";
    }
}
?>
</section>
    
<?php
    include_once 'footer.php';
?>