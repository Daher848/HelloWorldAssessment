<html>

    <head>
        <meta charset="UTF-8">
        <title>User Report</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    
    <body>

        <?php

            $connection = new mysqli("localhost", "DaherAbed", "helloworld", "HelloWorldRegistrationForm");

            $sql = "SELECT * FROM users ORDER BY date_registered DESC";
            $registeredUsers = $connection->query($sql);

            echo "<table align='center'>";
            echo "<tr><th>First Name</th><th>Last Name</th><th>Address 1</th><th>Address 2</th><th>City</th><th>State</th><th>Zip</th>                     <th>Country</th><th>Date Registered</th></tr>";

            while ($row = mysqli_fetch_array($registeredUsers, MYSQLI_ASSOC)) {

                echo "<tr><td>";
                echo $row['first_name'];
                echo "</td><td>";
                echo $row['last_name'];
                echo "</td><td>";
                echo $row['address_1'];
                echo "</td><td>";
                echo $row['address_2'];
                echo "</td><td>";
                echo $row['city'];
                echo "</td><td>";
                echo $row['state'];
                echo "</td><td>";
                echo $row['zip'];
                echo "</td><td>";
                echo $row['country'];
                echo "</td><td>";
                echo $row['date_registered'];
                echo "</td></tr>";
            }

            echo "</table>";
        ?>
    
    </body>
    
</html>

