<?php
  include "../functions/db.php";  
  if(isset($_GET['sender_Id'])){
                                             $id = $_GET['sender_Id'];
                                               }
                                              if(empty($id)){
                                                header("location:message.php");
                                             }
                                                  
                                                        $sql = "DELETE FROM `tblsender` WHERE `sender_Id`='$id'";
                                                        $run = mysql_query($sql);
	
	header("Location:message.php");
?>