<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION["count"])) {
        $_SESSION["count"] = 0;
        echo "<p>Counter initialized</p>\n";
    } else {
        $_SESSION["count"]++;
    }
    echo "<p>The counter is now <b>$_SESSION[count]</b></p>\n";
    echo "<p>reload this page to increment</p>";
    ?>
</body>

</html>