<html>
	<head>
	<title>Update Book</title>
	<style>
	input[type=text], input[type=number]
	{
	width:100%;
	}
	body {
 	 background-image: url('book1.jpg');
	 background-repeat: no-repeat;
	background-attachment: fixed;
        background-size: cover;	
	}
	</style>
	</head>
	<body>
		
	<form method="POST">
	<br><br>
	<table align="center" cellpadding='8' width="50%" border>
	<tr>
	<th colspan="2"><center>Accession Number to Update </center></th>
	</tr>
	<tr>
	<td><b>Accession Number</b></td>
	<td><input type="text" name="accessno"></td>
	</tr>
	<tr>
	<td colspan="2"><center><input type="submit" name="ssubmit"></center></td>
	</tr>
	<tr>
	<td colspan="2"><center><input type="submit" value="Home"name="sssubmit"></center></td>
	</tr>
	</table>
	</form>
	</body>
	</html>
	<?php
	include'conn.php';
	
	if(isset($_POST["ssubmit"]))
	{
	$accno=$_POST["accessno"];
	$sqlreturn = "SELECT * FROM book WHERE accessno='$accno'";
	$result_1=mysqli_query($conn,$sqlreturn);
	if (mysqli_num_rows($result_1)>0)
	{
	// output data of each row
	while($row=mysqli_fetch_assoc($result_1))

	{

	?>
	<form method="POST">
	<table align='center' cellpadding='8' width='50%' border>
	<tr><th colspan='2'><center>Update Book Details</center></th></tr>
	<tr><td><b>Title</b><input type="text" name="accno"value="<?php echo( ($row["accessno"]) ); ?>" /></td></tr>
 	<tr><td><b>Title</b><input type="text" name="title"value="<?php echo( htmlspecialchars($row["title"]) ); ?>" /></td></tr>
	<tr><td><b>Author</b><input type="text" name="author" value="<?php echo( htmlspecialchars($row["author"]) ); ?>" /></td></tr>
	<tr><td><b>Edition</b><input type="text" name="edition" value="<?php echo( htmlspecialchars($row["edition"]) ); ?>" /></td></tr>
 	<tr><td><b>Publisher</b><input type="text" name="publisher"value="<?php echo( htmlspecialchars( $row["publisher"]) ); ?>" /></td></tr>
	<tr>
	<td colspan="2"><center><input type="submit"value="Edit" name="submit1"></center></td>
	</tr>
	</table>
 	</form>
 	<?php
	
	}
	}
			
	else
	{
	echo "No record" . "<br>" . mysqli_error($conn);
	}
	}
	if(isset($_POST["submit1"]))
	{
	$accno1=$_POST["accno"];
	$title=$_POST["title"];
	$author=$_POST["author"];
	$edition=$_POST["edition"];
	$publisher=$_POST["publisher"];
	$sql = "UPDATE book SET title='$title',author='$author',edition='$edition',publisher='$publisher' WHERE accessno='$accno1'";
	if ($conn->query($sql) === TRUE)
	{
	echo"<script>alert ('Details Updated successfully!');</script>";
	
	}
	
	else
	{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	}
	else
	{
	echo "No record" . "<br>" . mysqli_error($conn);
	}
	
	if(isset($_POST["sssubmit"]))
	{
	header("Location: home1.php");
	}
	mysqli_close($conn);
	?>
