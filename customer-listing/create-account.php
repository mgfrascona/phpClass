<?php

    $customerKey = sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));

    if (!empty($_GET["txtFirstName"]) &&
        !empty($_GET["txtLastName"]) &&
        !empty($_GET["txtEmail"]) &&
        !empty($_GET["stateInitials"]) &&
        !empty($_GET["txtPassword"]))
    {
        include "../includes/db.php";
        $con = getDBConnection();

        $txtFirstName = $_GET["txtFirstName"];
        $txtLastName = $_GET["txtLastName"];
        $txtPhone = $_GET["txtPhone"];
        $txtEmail = $_GET["txtEmail"];
        $txtAddress = $_GET["txtAddress"];
        $txtCity = $_GET["txtCity"];
        $stateInitials = $_GET["stateInitials"];
        $txtZip = $txtZip = $_GET["txtZip"];
        $txtPassword = password_hash($_GET["txtPassword"], PASSWORD_DEFAULT);

        try {
            $query = "INSERT INTO customerListing (FirstName, LastName, Phone, Email, Address, City, State, Zip, Password, CustomerID, CustomerKey) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
            $stmt = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($stmt, "sssssssssis", $txtFirstName, $txtLastName, $txtPhone, $txtEmail, $txtAddress, $txtCity, $stateInitials, $txtZip, $txtPassword, $customerID, $customerKey);
            mysqli_stmt_execute($stmt);

            header("Location:index.php");
        }
        catch (mysqli_sql_exception $ex) {
            echo $ex;
        }

    }

?><!doctype html>
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
        <form method="get">
            <div class="grid-container">
                <div class="grid-header">
                    <h3>Customer Info:</h3>
                </div>

                <div class="first-name">
                     <label for="txtFirstName">First Name</label>
                </div>

                <div class="first-name-input">
                    <input type="text" name="txtFirstName" id="txtFirstName">
                </div>

                <div class="last-name">
                    <label for="txtLastName">Last Name</label>
                </div>

                <div class="last-name-input">
                    <input type="text" name="txtLastName" id="txtLastName">
                </div>

                <div class="phone-number">
                    <label for="txtPhoneNumber">Phone Number</label>
                </div>

                <div class="phone-number-input">
                    <input type="tel" name="txtPhoneNumber" id="txtPhoneNumber">
                </div>

                <div class="email">
                    <label for="txtEmail">Email</label>
                </div>

                <div class="email-input">
                    <input type="email" name="txtEmail" id="txtEmail">
                </div>

                <div class="address">
                    <label for="txtAddress">Address</label>
                </div>

                <div class="address-input">
                    <input type="text" name="txtAddress" id="txtAddress">
                </div>

                <div class="city">
                    <label for="txtCity">City</label>
                </div>

                <div class="city-input">
                    <input type="text" name="txtCity" id="txtCity">
                </div>

                <div class="state">
                    <label for="txtState">State</label>
                </div>

                <div class="state-input">
                    <label for="stateInitials"></label>
                    <select name="stateInitials" id="stateInitials">
                        <option value="selectState">Select your state</option>
                        <option value="AL">AL</option>
                        <option value="AK">AK</option>
                        <option value="AR">AR</option>
                        <option value="AS">AS</option>
                        <option value="AZ">AZ</option>
                        <option value="CA">CA</option>
                        <option value="CO">CO</option>
                        <option value="CT">CT</option>
                        <option value="DC">DC</option>
                        <option value="DE">DE</option>
                        <option value="FL">FL</option>
                        <option value="GA">GA</option>
                        <option value="GU">GU</option>
                        <option value="HI">HI</option>
                        <option value="IA">IA</option>
                        <option value="ID">ID</option>
                        <option value="IL">IL</option>
                        <option value="IN">IN</option>
                        <option value="KS">KS</option>
                        <option value="KY">KY</option>
                        <option value="LA">LA</option>
                        <option value="MA">MA</option>
                        <option value="MD">MD</option>
                        <option value="ME">ME</option>
                        <option value="MI">MI</option>
                        <option value="MN">MN</option>
                        <option value="MO">MO</option>
                        <option value="MP">MP</option>
                        <option value="MS">MS</option>
                        <option value="MT">MT</option>
                        <option value="NC">NC</option>
                        <option value="NE">NE</option>
                        <option value="NH">NH</option>
                        <option value="NJ">NJ</option>
                        <option value="NM">NM</option>
                        <option value="NV">NV</option>
                        <option value="NY">NY</option>
                        <option value="ND">ND</option>
                        <option value="OH">OH</option>
                        <option value="OK">OK</option>
                        <option value="OR">OR</option>
                        <option value="PA">PA</option>
                        <option value="PR">PR</option>
                        <option value="RI">RI</option>
                        <option value="SC">SC</option>
                        <option value="SD">SD</option>
                        <option value="TN">TN</option>
                        <option value="TX">TX</option>
                        <option value="UM">UM</option>
                        <option value="UT">UT</option>
                        <option value="VI">VI</option>
                        <option value="VT">VT</option>
                        <option value="VA">VA</option>
                        <option value="WA">WA</option>
                        <option value="WI">WI</option>
                        <option value="WV">WV</option>
                        <option value="WY">WY</option>
                    </select>
                </div>

                <div class="zip">
                    <label for="txtZip">Zip</label>
                </div>

                <div class="zip-input">
                    <input type="text" name="txtZip" id="txtZip">
                </div>

                <div class="password">
                    <label for="txtPassword">Password</label>
                </div>

                <div class="password-input">
                    <input type="password" name="txtPassword" id="txtPassword" minlength="8" maxlength="20">
                </div>

                <div class="grid-footer">
                     <input type="submit" value="Create Account">
                </div>
            </div>
        </form>
    </main>
</div>
<?php
include "../includes/footer.php"
?>
</body>
</html>