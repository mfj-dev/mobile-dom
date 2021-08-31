<?php
include '../functions/db.php';

extract($_POST);
$sql = "INSERT INTO `tblsender`(`name`) VALUES ('$sender')";
$run = mysqli_query($connect,$sql);
if($run)
		{
			$a = mysqli_query($connect,"SELECT * FROM `tblsender` WHERE `name`='$sender' ");
			$aa = mysqli_fetch_array($a);
	
			if($a)
			{
					$aaa = $aa['sender_Id'];
				
					$sql1 = "INSERT INTO `tblmessage`(`message`, `sender_Id`) VALUES('$message',$aaa)";
					$run1 = mysqli_query($connect,$sql1);
				
			}
			
		}
header("Location:content.php");
?>