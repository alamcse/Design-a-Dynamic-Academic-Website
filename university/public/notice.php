<?php require_once("../include/session.php") ?>
<?php include("../include/layout/header.php") ?>
 <?php include("../include/db_connection.php") ?>
 <?php require_once("../include/functions.php") ?>
 <?php

if(isset($_POST["submit"])){
	
	$notice = mysql_prep($_POST["notice_text"]);
	 
	$required_field = array("menu_name", "position","visible");
	validate_presence($required_field);
	
	$fields_with_max_length = array("menu_name" => 30);
	validate_max_length($fields_with_max_length);
	
	
	if(!empty($errors)){
	$_SESSION["errors"] = $errors;
	redirect_to("new_subject.php");	
	}
	
	$query  = "INSERT INTO subjects ( ";
	$query .= "menu_name, position, visible ";
	$query .= ") VALUES ( ";
	$query .= "'{$menu_name}', {$position}, {$visible} ";
	$query .= ")";
	
	$result = mysqli_query($connection, $query);
		if($result){ 
			$_SESSION["message"] = "Subject created.";
			redirect_to("manage_content.php");
		}
		else{
			$_SESSION["message"] = "Subject creation failed.";
			redirect_to("new_subject.php");
		}
}else{
// Probably get request
redirect_to("new_subject.php");	
}

?>

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
    <li style="color:#39F" >  <?php  echo $notice["notice_text"]."(".$notice["nid"].") <br>";?> </li>
	 
		
 		
   	 <?php	
 		}
 		?>
    
    
    <?php 
		mysqli_free_result($result);
	
	?>
 <?php include("../include/layout/footer.php") ?>