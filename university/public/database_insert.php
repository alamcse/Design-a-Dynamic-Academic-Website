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
	
	$notices = " hall has been closed sortly new notice in ";
	
	 $query ="INSERT INTO notice ( ";
	 $query .="notice_text ";
	 $query .=") VALUES ( ";
	 $query .=" '{$notices}' ";
	 $query .=") ";
 
	$result = mysqli_query($connection, $query);
	
	//text if there was an error .....
	if($result){
		echo "success";
		}
		else
 			{die ("Database query failed.");}
	
	?>
    
 
</body>
</html>
 <?php //close database connection
 
 mysqli_close($connection);
 
 ?>