<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Home</h1>
<?php

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
?>
<a href = http://localhost:3000/Project/arcade.php> Pong Game</a>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>