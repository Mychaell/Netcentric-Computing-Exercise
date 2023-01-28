<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Document</title>
</head>

<body>
    <?php
    $value = `date +%D%T`;
    $xyz = 60 * 60 * 24 * 60 + time();
    setcookie("TestCookie", $value, $xyz);
    echo "Cookie has been set";
    echo "The last visted Time and Date";
    echo $_COOKIE["TestCookie"];
    ?>
</body>

</html>