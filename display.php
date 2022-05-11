<?php
//Accept HTML Form Data
$id = $_REQUEST["txtSID"];
$name = $_POST["txtName"];
$age = $_POST["txtAge"];

//Display
echo "SID: $id <br>";
echo "Name: $name <br>";
echo "Age: $age";

?>