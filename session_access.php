<?php
//Add page to the session
session_start();

//Access data from the session

echo "Username: ".$_SESSION["uname"]."<br>";
echo "User Type: ".$_SESSION["type"]."<br>";

?>