<html>

<body>
    <?php
    $con = mysql_connect("localhost", "root", "");

    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db("cse");

    $sql = "INSERT INTO Books (accn, title, authors, edition, publisher) VALUES ('$_POST[accn]', '$_POST[title]', '$_POST[authors]', '$_POST[edition]', '$_POST[publisher]')";

    if (!mysql_query($sql, $con)) {
        die('Error: ' . mysql_error());
    }

    echo "1 record added";

    mysql_close($con);
    ?>

    <form action="eg4results.php" method="post">
        Name: <input type="text" name="name">
        <input type="submit">
    </form>

</body>

</html>