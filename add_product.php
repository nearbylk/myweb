<?php
if(isset($_POST["txtPID"]))
{
	//Accept HTML form Data
	$pid = $_POST["txtPID"];
	$name = $_POST["txtName"];
	$price = $_POST["txtPrice"];
	$filename = $_FILES["file1"]["name"];


	//Connect with MySQL Server
	$con = mysqli_connect("fdb30.awardspace.net","3575900_productdb","abc@1234");
	//Select the DB
	mysqli_select_db($con,"3575900_productdb");
	//Perform SQL
	$sql = "INSERT INTO tblproducts(pid,name,price,image) VALUES('$pid','$name',$price,'$filename')";
	$ret = mysqli_query($con,$sql);
	echo "No of records inserted: $ret";
	//Disconnect from Server
	mysqli_close($con);

	//Upload the file
	$path = "product_images/".$_FILES["file1"]["name"];
	if($ret == 1)
	{
		move_uploaded_file($_FILES['file1']['tmp_name'],$path);
	}
}
?>

<html>
<head>
	<title>Add Product</title>
</head>
<body>
	<form name="frmProduct" method="post" action="#" enctype="multipart/form-data">
		PID: <input type="text" name="txtPID"><br>
		Name: <input type="text" name="txtName"><br>
		Price: <input type="text" name="txtPrice"><br>
		Image: <input type="file" name="file1"><br>
		<input type="submit" name="btnAdd" value="Add Product">
	</form> 
</body>
</html>