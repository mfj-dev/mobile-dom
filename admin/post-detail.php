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
                            Product Details
                            
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
                                                        $sql = "SELECT tblmobilepost.mobile_Id,tblmobilepost.name,tblmobilepost.brand,tblmobilepost.description,tblmobilepost.image,tbldateposted.date,tbldateposted.mobile_Id FROM `tblmobilepost`,`tbldateposted` WHERE tblmobilepost.mobile_Id=tbldateposted.mobile_Id";
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

                                        

                                        ?>

                                      <label>Name: <?php echo $a;?></label><br>
                                      <label>Brand: <?php echo $b;?></label><br>
                                      <label>Description: <?php echo $c;?></label><br>
                                      <label>Date Posted: <?php echo $d;?></label><br>



                                        
                                   
                             
                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
        </div>
   

	</body>
</html>