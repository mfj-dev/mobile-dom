<?php
include "../functions/db.php";

	extract($_POST);
	$fileName = $_FILES["file"]["name"];
	   
	move_uploaded_file($_FILES["file"]["tmp_name"],
	"C:/xampp/htdocs/taylor/images/" . $_FILES["file"]["name"]);
 	$date=date("Y-m-d");

 	$sql = "INSERT INTO `tblmobilepost`(`name`, `brand`, `description`, `image`) VALUES ('$name','$brand','$desc','$fileName')";
 	$run = mysql_query($sql);

 	if($run)
		{
			$a = mysql_query("SELECT * FROM `tblmobilepost` WHERE `name`='$name' ");
			$aa = mysql_fetch_array($a);
	
			if($a)
			{
					$aaa = $aa['mobile_Id'];
				
					$sql1 = "INSERT INTO `tbldateposted`(`date`, `mobile_Id`) VALUES('$date',$aaa)";
					$run1 = mysql_query($sql1);
				
			}
			
		}
header("location:post.php");


?>