<?php //homepage
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Home</h1>
<?php

/*if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}*/
?>

<?php
    //this is day which is the default
    require(__DIR__ . "/../../partials/scores_table.php");
    ?>
    <?php
    $duration = "week";
    require(__DIR__ . "/../../partials/scores_table.php");
    ?>
    <?php
    $duration = "month";
    require(__DIR__ . "/../../partials/scores_table.php");
    ?>
    <?php
    $duration = "lifetime";
    require(__DIR__ . "/../../partials/scores_table.php");
    ?>

<h1>Pong Game</h1>

<a href = http://localhost:3000/Project/arcade.php> Adam's Arcade Pong Game</a>

<summary>
Pong Game Description:<br>
1. When a player scores, a point is added to their side.<br>
2. To move up use either the UP key or W key. To move down use either the DOWN key or S key.<br>
3. The objective for the left side is to score as much points as they can before right side meets its set score.<br>
4. Game ends once right side scores 3 points.<br>
</summary>

<style>
summary{
    background-color: white;
    font-size: 18px;
}
</style>
    
<?php
require(__DIR__ . "/../../partials/flash.php");
?>