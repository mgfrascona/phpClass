<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Michael's Website</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="./css/grid.css">
</head>
<body>
<?php
include "../includes/header.php"
?>
<div id="three-column">
    <?php
    include "../includes/navigation.php"
    ?>
    <main>
        <h1>Customer Listing</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <?php

            include "../includes/db.php";
            $con = getDBConnection();
            $result = mysqli_query($con, "SELECT * FROM customerListing");
            while ($row = mysqli_fetch_array($result)) {
                $customerID = $row["CustomerID"];
                $firstName = $row["FirstName"];
                $lastName = $row["LastName"];
                $address = $row["Address"];
                $city = $row["City"];
                $state = $row["State"];
                $zip = $row["Zip"];
                $phone = $row["Phone"];
                $email = $row["Email"];

                echo "<tr>";
                echo "      <td>";
                echo "          <a href=\"update-account.php?id=$customerID\">$customerID</a>";
                echo "      </td>";
                echo "      <td>$firstName</td>";
                echo "      <td>$lastName</td>";
                echo "      <td>$address</td>";
                echo "      <td>$city</td>";
                echo "      <td>$state</td>";
                echo "      <td>$zip</td>";
                echo "      <td>$phone</td>";
                echo "      <td>$email</td>";
                echo "      <td>SECRET</td>";
                echo "</tr>";
            }

            ?>

        </table>
        <a href = "create-account.php">Create an account</a>

    </main>
</div>
<?php
include "../includes/footer.php"
?>
</body>
</html>