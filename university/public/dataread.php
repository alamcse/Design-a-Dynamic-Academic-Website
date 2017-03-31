 <?php 
 	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
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
	
	$query = "SELECT * ";
	$query .= "FROM notice";
 
	$result = mysqli_query($connection, $query);
	
	//text if there was an error .....
	if(!$result){die ("Database query failed.");}
	
	?>
    
    <?php 
	//3. use return data (if any)............
	
	while($notice = mysqli_fetch_assoc($result)){
	 ?>
    <li style="color:#CEDEDE" >  <?php  echo $notice["notice_text"]."(".$notice["nid"].") <br>";?> </li>
	 
		
 		
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