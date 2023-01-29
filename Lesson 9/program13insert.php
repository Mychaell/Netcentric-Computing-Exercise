<html>
    <body>
     <?php
        $con = mysql_connect("localhost", "root", "");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }

        mysql_select_db("cse");

        $sql = "INSERT INTO persons (name, address1, address2, email) VALUES ('$_POST[name]', '$_POST[address1]', '$_POST[address2]', '$_POST[email]')";
        if (!mysql_query($sql, $con)) {
            die('Error: ' . mysql_error());
        }
        echo "1 record added";
        mysql_close($con);
     ?>
     
     <form action="eg3results.php" method="post">
        Name: <input type="text" name="name">
        <input type="submit">
     </form>

    </body>
</html>