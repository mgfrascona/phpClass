<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $p1Dice = [rand(1,6), rand(1,6)];
        $p1Score = array_sum($p1Dice);

        $cpuDice = [rand(1,6), rand(1,6), rand(1,6)];
        $cpuScore = array_sum($cpuDice);

        $result = "Press 'Roll' to play!";
    }

    if($p1Score > $cpuScore) {
        $result = "You win!";
    }
    else {
        $result = "You lose!";
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
        <h2>Dice Game</h2>
        <form method="post">
            <h3>Your Score: <?=$p1Score?></h3>
            <img src = "images/dice_<?=$p1Dice[0]?>.png" alt="dice <?=$p1Dice[0]?>">
            <img src = "images/dice_<?=$p1Dice[1]?>.png" alt="dice <?=$p1Dice[1]?>">
            <h3>CPU Score: <?=$cpuScore?></h3>
            <img src = "images/dice_<?=$cpuDice[0]?>.png" alt="dice <?=$cpuDice[0]?>">
            <img src = "images/dice_<?=$cpuDice[1]?>.png" alt="dice <?=$cpuDice[1]?>">
            <img src = "images/dice_<?=$cpuDice[2]?>.png" alt="dice <?=$cpuDice[2]?>">
            <h3 class = "result"><?=$result?></h3>
            <input type="submit" value="Roll!">
        </form>
    </main>
</div>
<?php
include "../includes/footer.php"
?>
</body>
</html>