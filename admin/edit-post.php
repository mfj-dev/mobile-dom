<?php
  session_start();
  if (isset($_SESSION['uname'])&&$_SESSION['uname']!=""){
  }
  else
  {
    header("Location:index.php");
  }
$uname=$_SESSION['uname'];

?>
<html>
<head>
	<title></title>
		<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	 <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../jquery.min.js"></script>
</head>
<body style="background-color:#000;">

        <div class="admin-header">
        <h2>Mobile Dome Information System Admin Page</h2>
            
        <ul class="nav nav-tabs nav-justified">
            <li><a href="home.php">Home</a></li>
            <li  class="active"><a href="post.php">Post</a></li>
            <li><a href="message.php">Messages</a></li>
            <li><a href="account.php">Account</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
</div>
    <div class="main-wrapper">
        <h4>Published Articles</h4>
        <hr>
        <div class="container" style="width:400px;">

        <div class="panel panel-info">
                        <div class="panel-heading">
                           Edit Post
                            
                        </div>
           <div class="panel-body">
                           

                                        
                                        <?php
                                        
                                        include "../functions/db.php";
                                         if(isset($_GET['mobile_Id'])){
                                             $id = $_GET['mobile_Id'];
                                               }
                                              if(empty($id)){
                                                header("location:post.php");
                                             }
                                                  //                                        $sql = "SELECT tblmobilepost.mobile_Id,tblmobilepost.name,tblmobilepost.brand,tblmobilepost.description,tblmobilepost.image,tbldateposted.date,tbldateposted.mobile_Id FROM `tblmobilepost`,`tbldateposted` WHERE tblmobilepost.mobile_Id=tbldateposted.mobile_Id ORDER BY `date`";
                                                        $sql = "SELECT tblmobilepost.mobile_Id,tblmobilepost.name,tblmobilepost.brand,tblmobilepost.description,tblmobilepost.image,tbldateposted.date,tbldateposted.mobile_Id FROM `tblmobilepost`,`tbldateposted` WHERE tblmobilepost.mobile_Id='$id' AND tbldateposted.mobile_Id='$id'";
                                                        $run = mysql_query($sql);

                                                        while($row=mysql_fetch_array($run))
                                                        {
                                                            $id = $row['mobile_Id'];
                                                   
                                                            $a = $row['name'];
                                                           $b = $row['brand'];
                                                            $c= $row['description'];
                                                           $d =$row['date'];
                                                           $e =$row['image'];

                                             
                                                        }
                                                        extract($_POST);
                              

                             if(isset($edit))
                             {
                                $sql = "UPDATE `tblmobilepost` SET `name`='$name',`description`='$desc',`brand`='$brand' WHERE `mobile_Id`='$id'";
                               $run = mysql_query($sql);
                               header("Location:post.php");

                             }

                                        

                                        ?>

                                      <form method="POST">
              
                        <input type="text" name="name" class="form-control" value="<?php echo $a;?>"><br>
                        <textarea name="desc"class="form-control">
                          <?php echo $b;?>
                        </textarea><br>
                        <select name="brand" class="form-control">
                                                <option><?php echo $c;?></option>
                                                <option>Samsung</option>
                                                <option>Apple</option>
                                                <option>Lenovo</option>
                                                <option>Cherry Mobile</option>
                                            </select>
                        <input type="text" class="form-control" value="<?php echo $d;?>"><br>
                        <input type="submit" name="edit" class="btn btn-info pull-right" value="Update">
                        
                   </form>



                                        
                                   
                             
                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
        </div>
   

	</body>
</html>