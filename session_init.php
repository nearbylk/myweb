<?php
//Start a session
session_start();

//Add data to the session
$_SESSION["uname"] = "Kamal";
$_SESSION["type"] = "admin";

echo "Session created...";
?>