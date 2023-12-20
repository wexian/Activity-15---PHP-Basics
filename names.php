<?php

session_start();

$greetings = "Hi " . $_REQUEST["name"];

if(!isset($_SESSION["greetings"])){
    $_SESSION["greetings"] = [];
}
array_push($_SESSION["greetings"], $greetings);

header("location: index.php");

?>