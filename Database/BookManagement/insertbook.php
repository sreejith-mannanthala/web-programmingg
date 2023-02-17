
<html>
	<head>
	<title>Insert Book</title>
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
	<form name method="POST">
	<br><br><br>
	<table align="center" cellpadding='8' width="50%" border>
	<tr>
	<th colspan="2"><center>Add BOOK Details</center></th>
	</tr>
	<tr>
	<td><b>Accession number</b></td>
	<td><input type="number" name="accessno"></td>
	</tr>
	<tr>
	<td><b>Title</b></td>
	<td><input type="text" name="title"></td>
	</tr>
	<tr>
	<td><b>Author</b></td>
	<td><input type="text" name="author"></td>
	</tr>
	<tr>
	<td><b>Edition</b></td>
	<td><input type="text" name="edition"></td>
	</tr>
	<tr>
	<td><b>Publisher</b></td>
	<td><input type="text" name="publisher"></td>
	</tr>
	<tr>
	<td colspan="2"><center><input type="submit" name="submit"></center></td>
	</tr>
	</table>
	</form>
	<form method="POST">
	<table align="center" cellpadding='8' width="50%" border>
	<tr>
	<th colspan="2"><center>Search BOOK</center></th>
	</tr>
	<tr>
	<td><b>Title</b></td>
	<td><input type="text" name="stitle"></td>
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
	if(isset($_POST["submit"]))
	{
	$accessno=$_POST["accessno"];
	$title=$_POST["title"];
	$author=$_POST["author"];
	$edition=$_POST["edition"];
	$publisher=$_POST["publisher"];
	$sql = "INSERT INTO book (accessno, title, author, edition, publisher) VALUES ('$accessno', '$title', '$author', '$edition', '$publisher')";
	if ($conn->query($sql) === TRUE)
	{
	echo"<script>alert ('Details added successfully!');</script>";
	}
	else
	{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}
	if(isset($_POST["ssubmit"]))
	{
	$stitle=$_POST["stitle"];
	$sqlreturn = "SELECT * FROM `book` WHERE title='$stitle'";
	$result_1=mysqli_query($conn,$sqlreturn);
	if (mysqli_num_rows($result_1)>0)
	{
	// output data of each row
	while($row=mysqli_fetch_assoc($result_1))
	{
	echo"<table align='center' cellpadding='8' width='50%' border>";
	echo"<tr><th colspan='2'><center>BOOK Details</center></th></tr>";
	echo"<tr><td>Accession number</td><td>" . $row["accessno"]."</td></tr>";
	echo"<tr><td>Title</td><td>" . $row["title"]."</td></tr>";
	echo"<tr><td>Author</td><td>" . $row["author"]."</td></tr>";
	echo"<tr><td>Edition</td><td>" . $row["edition"]."</td></tr>";
	echo"<tr><td>Publisher</td><td>" . $row["publisher"]."</td></tr>";
	echo"</table>";
	}
	}
	else
	{
	echo "No record" . "<br>" . mysqli_error($conn);
	}
	}
	if(isset($_POST["sssubmit"]))
	{
	header("Location: home1.php");
	}
	mysqli_close($conn);
	?>