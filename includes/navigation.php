<?php

$isHome = $_SERVER['REQUEST_URI'] == '/';
$isLoops = $isHome = $_SERVER['REQUEST_URI'] == '/loops/';
$isCountdown = $isHome = $_SERVER['REQUEST_URI'] == '/countdown/';
$isMagic8Ball = $isHome = $_SERVER['REQUEST_URI'] == '/magic-8ball/';
$isDiceGame = $isHome = $_SERVER['REQUEST_URI'] == '/dice-game/';
$isMovieList = $isHome = $_SERVER['REQUEST_URI'] == '/movielist/';
$isCustomerListing = $isHome = $_SERVER['REQUEST_URI'] == '/customer-listing/';
$isLogin = $isHome = $_SERVER['REQUEST_URI'] == '/login/';

?><nav>
    <ul>
        <li class="<?=$isHome?>"><a href="/">Home</a></li>
        <li class="<?=$isLoops?>"><a href="/loops">Loops</a></li>
        <li class="<?=$isCountdown?>"><a href="/countdown">Countdown</a></li>
        <li class="<?=$isMagic8Ball?>"><a href="/magic-8ball">Magic 8 Ball</a></li>
        <li class="<?=$isDiceGame?>"><a href="/dice-game">Dice Game</a></li>
        <li class="<?=$isMovieList?>"><a href="/movielist">Movie List</a></li>
        <li class="<?=$isCustomerListing?>"><a href="/customer-listing">Customer Listing</a></li>
        <li class="<?=$isLogin?>"><a href="/login">Login</a></li>
    </ul>
</nav>