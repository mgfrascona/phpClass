<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Michael's Website</title>
    <link rel="stylesheet" href="/css/base.css">
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            table-layout: fixed;
            width: 80%;
            margin: 10px auto;
        }
        td {
            border: 1px solid black;
        }
    </style>
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
        <h1>My Movie List</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Rating</th>
            </tr>
            <tr>
                <td>343</td>
                <td>Beauty and the Beast</td>
                <td>G</td>
            </tr>
            <tr>
                <td>548</td>
                <td>The Shining</td>
                <td>R</td>
            </tr>
<?php

$con = mysqli_connect("localhost", "dbuser", "dbdev123")

?>

        </table>

    </main>
</div>
<?php
include "../includes/footer.php"
?>
</body>
</html>