<?php

if (empty($_GET["id"]))
{
    header("Location: /customerListing");
}

include "../includes/db.php";
$con = getDBConnection();

$customerID = $_GET["id"];

try {
    $query = "SELECT * FROM customerListing WHERE CustomerID = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "s", $customerID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_array($result);
    $firstName = $row["FirstName"];
    $lastName = $row["LastName"];
    $phone = $row["Phone"];
    $email = $row["Email"];
    $address = $row["Address"];
    $city = $row["City"];
    $state = $row["State"];
    $zip = $row["Zip"];
    $password = $row["Password"];
}
catch (mysqli_sql_exception $ex) {
    echo $ex;
}

if (!empty($_POST["txtFirstName"]) &&
    !empty($_POST["txtLastName"]) &&
    !empty($_POST["txtEmail"]) &&
    !empty($_POST["stateInitials"]) &&
    !empty($_POST["txtPassword"]))
{

    $txtFirstName = $_POST["txtFirstName"];
    $txtLastName = $_POST["txtLastName"];
    $txtPhone = $_POST["txtPhone"];
    $txtEmail = $_POST["txtEmail"];
    $txtAddress = $_POST["txtAddress"];
    $txtCity = $_POST["txtCity"];
    $stateInitials = $_POST["stateInitials"];
    $txtZip = $txtZip = $_POST["txtZip"];
    $txtPassword = $_POST["txtPassword"];

    try {
        $query = "UPDATE customerListing SET FirstName = ?, LastName = ?, Phone = ?, Email = ?, Address = ?, City = ?, State = ?, Zip = ?, Password = ? WHERE CustomerID = ?;";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "sssssssssi", $txtFirstName, $txtLastName, $txtPhone, $txtEmail, $txtAddress, $txtCity, $stateInitials, $txtZip, $txtPassword, $customerID);
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
        <form method="post">
            <div class="grid-container">
                <div class="grid-header">
                    <h3>Customer Info:</h3>
                </div>

                <div class="first-name">
                    <label for="txtFirstName">First Name</label>
                </div>

                <div class="first-name-input">
                    <input type="text" name="txtFirstName" id="txtFirstName" value="<?=$firstName?>">
                </div>

                <div class="last-name">
                    <label for="txtLastName">Last Name</label>
                </div>

                <div class="last-name-input">
                    <input type="text" name="txtLastName" id="txtLastName" value="<?=$lastName?>">
                </div>

                <div class="phone-number">
                    <label for="txtPhoneNumber">Phone Number</label>
                </div>

                <div class="phone-number-input">
                    <input type="tel" name="txtPhoneNumber" id="txtPhoneNumber" value="<?=$phone?>">
                </div>

                <div class="email">
                    <label for="txtEmail">Email</label>
                </div>

                <div class="email-input">
                    <input type="email" name="txtEmail" id="txtEmail" value="<?=$email?>">
                </div>

                <div class="address">
                    <label for="txtAddress">Address</label>
                </div>

                <div class="address-input">
                    <input type="text" name="txtAddress" id="txtAddress" value="<?=$address?>">
                </div>

                <div class="city">
                    <label for="txtCity">City</label>
                </div>

                <div class="city-input">
                    <input type="text" name="txtCity" id="txtCity" value="<?=$city?>">
                </div>

                <div class="state">
                    <label for="txtState">State</label>
                </div>

                <div class="state-input">
                    <label for="stateInitials"></label>
                    <select name="stateInitials" id="stateInitials" value="<?=$state?>">
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
                    <input type="text" name="txtZip" id="txtZip" value="<?=$zip?>">
                </div>

                <div class="password">
                    <label for="txtPassword">Password</label>
                </div>

                <div class="password-input">
                    <input type="password" name="txtPassword" id="txtPassword" minlength="8" maxlength="20" value="<?=$password?>">
                </div>

                <div class="grid-footer">
                    <input type="submit" value="Update Account">
                    <input type="button" value="Delete Account" id="delete">
                </div>
            </div>
        </form>
    </main>
</div>
<?php
include "../includes/footer.php"
?>
<script>
    const deleteButton = document.querySelector('#delete')
    deleteButton.addEventListener('click', () => {
        window.location = './delete.php?id=<?=$customerID?>'
    })
</script>
</body>
</html>