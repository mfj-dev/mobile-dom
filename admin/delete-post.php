<?php
include "../functions/db.php";
  if(isset($_GET['mobile_Id'])){
		$id = $_GET['mobile_Id'];
	}
	if(empty($id)){
		header("location:home.php");
	}
("DELETE FROM `tblmobilepost` WHERE `mobile_Id` = '$id'")
	or die(mysql_error());  	

	header("Location:post.php");
	
?>