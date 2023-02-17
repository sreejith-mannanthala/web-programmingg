<html>
	<head>
	<title>Display All</title>
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
<form action="home1.php" method="POST">
<br><br>
<?php
 include'conn.php';
 $sql_4="SELECT * FROM book";
 $result_4=mysqli_query($conn,$sql_4);
 if(mysqli_num_rows($result_4)>0)
 {
 $n=1;
	
  while($row=mysqli_fetch_assoc($result_4))
 {
?>
   	<table  "cellpadding='8' width='20%' border>
	<tr><th colspan='2'>Display Book <?php echo $n; ?></th></tr>
	<tr><td><b>Title</b><input type="text" name="accno"value="<?php echo( ($row["accessno"]) ); ?>" /></td></tr>
 	<tr><td><b>Title</b><input type="text" name="title"value="<?php echo( htmlspecialchars($row["title"]) ); ?>" /></td></tr>
	<tr><td><b>Author</b><input type="text" name="author" value="<?php echo( htmlspecialchars($row["author"]) ); ?>" /></td></tr>
	<tr><td><b>Edition</b><input type="text" name="edition" value="<?php echo( htmlspecialchars($row["edition"]) ); ?>" /></td></tr>
 	<tr><td><b>Publisher</b><input type="text" name="publisher"value="<?php echo( htmlspecialchars( $row["publisher"]) ); ?>" /></td></tr>
	
	
<?php
	$n++;
 }
?>
</table>
<?php
}
mysqli_close($conn);
?>
<br><br>
<input type="submit" value="Home Page" name="btn">

</form>
</body>
</html>