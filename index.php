<?php
    ini_set('display_errors', 1);

    include_once 'header.php';

    echo date("D M d, Y G:i a");

    if (isset($_SESSION["userid"])) {
        echo "<p>Hello there, " . $_SESSION["userid"] . "</p>";
    } else {

    }
?>

    <h1>IT Help Desk<br>Support</h1>
    <h2>
        Having technical issues?<br>
        You're in the right place.
    </h2>
        
    <h3>REGISTER FOR FREE</h3>

<?php
    include_once 'footer.php';
?>
    