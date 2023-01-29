<html>

<body>
    <?php
        $con = mysql_connect("localhost", "root", "");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        mysql_select_db("cse");

        $results = mysql_query("SELECT * FROM persons1 where name='$_POST[name]'");
        if (!$results)
        {
            echo "There is no records";
        }
        echo "<table border='1'>
        <tr>
        <th>Name</th>
        <th>Address1</th>
        <th>Address2</th>
        <th>Email</th>
        </tr>";

        while($row = mysql_fetch_array($results))
        {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['address1'] . "</td>";
            echo "<td>" . $row['address2'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        mysql_close($con);
    ?>

</body>

</html>