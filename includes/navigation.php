
<?php

$isHome = $_SERVER['REQUEST_URI'] == '/';
$isLoops = $isHome = $_SERVER['REQUEST_URI'] == '/loops/';
$isCountdown = $isHome = $_SERVER['REQUEST_URI'] == '/countdown/';

?><nav>
    <?=$_SERVER['REQUEST_URI']?>

    <ul>
        <li class = "<?=$isHome?>"><a href="/">Home</a></li>
        <li class = "<?=$isLoops?>"><a href="/loops">Loops</a></li>
        <li class = "<?=$isCountdown?>"><a href="/countdown">Countdown</a></li>
    </ul>
</nav>