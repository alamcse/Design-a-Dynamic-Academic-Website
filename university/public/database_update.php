 <?php 
 	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "amir";
	$dbname = "just";
	
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	if(mysqli_connect_errno()){
		
		die("Database connection failed ".mysqli_connect_error()."(".mysqli_connect_errno().")");
		}
 
 
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

    <?php    
	// 2 . perform database query
	
	$id = 2;
	$notice_text="new notice has been u[dated";
	
	$query = "UPDATE notice SET ";
	$query .= "notice_text = '{$notice_text}'";
	$query .= "WHERE id = {$id}";
 
	$result = mysqli_query($connection, $query);
	
	//text if there was an error .....
	if($result && mysqli_affected_rows($connection)==1){die ("succes.");}
	
	else
 			{die ("Database query failed.");}
	
	?>
    
    <?php 
	//3. use return data (if any)............
	
	while($notice = mysqli_fetch_assoc($result)){
	 ?>
    <li style="color:#39F" >  <?php  echo $notice["notice_text"]."(".$notice["id"].") <br>";?> </li>
	 
		
 		
   	 <?php	
 		}
 		?>
    
    
    <?php 
		mysqli_free_result($result);
	
	?>
</body>
</html>
 <?php //close database connection
 
 mysqli_close($connection);
 
 ?>