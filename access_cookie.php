<html> <head> 
<title>Accessing Cookies with PHP</title> </head>
 <body> 
<?php 
if(isset($_COOKIE["name"]))
{
	echo "Hello, ".$_COOKIE["name"]." welcome back...";
}
else
{
	echo "Hello new user1";
}
?> 
</body> </html>
