<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    session_register("count");

    if (!sset($_SESSION)) {
        $_SESSION["count"] = 0;
        echo "<p>Counter initialized</p>\n";
    } else {
        $_SESSION["count"]++;
    }
    echo "<p>The counter is now<b>$_SESSION[count]</b></p>\n";
    "<p>reload this page to increment</p>";
    ?>
</body>

</html>