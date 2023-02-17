<html>
<head>
<style>
body {
 	 background-image: url('libr.png');
	 background-repeat: no-repeat;
	background-attachment: fixed;
        background-size: cover;	
	}
table{
border-style: hidden;
}
 
input[type=submit] {
  background-color: #696969;
  border: none;
  color: white;
  font-size: 30px;	
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

	</style>
</head>
<body>
	 <br><br>
     	<br><br>
	<br><br>
     	<br><br>
	<br><br>
     	<br><br>
	
     	<table align="center" cellpadding='8' width="50%" ">
	<tr>
	<td colspan="2"><center><form action="insertbook.php" method="POST">
       	<input type="submit" value="Add Books" name="btn">
   	 </form></td>
	
	<td><b><form action="updatebook.php" method="POST">  		
    	<input type="submit" value="Update Books" name="btn">
    	</form></b></td>
		
	<td><form action="deletebook.php" method="POST"> 
		
    	<input type="submit" value="Delete Books" name="btn">
    	</form></center></td>
	<td><form action="displayall.php" method="POST"> 		
    	<input type="submit" value="Display All Bookdetails" name="btn">
    	</form></center></td>
	</tr>	
	</table>  
     


    </center> 
	
	
    </body>
</html>
