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
			<li class="active"><a href="home.php">Home</a></li>
			<li><a href="post.php">Post</a></li>
			<li><a href="message.php">Messages</a></li>
			<li><a href="account.php">Account</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
</div>
	<div class="main-wrapper">
		<h4>Dashboard</h4>
		<hr>
		<div class="container" style="width:800px;">

			 <div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">Recently Published</h3>
						</div>
					<div class="panel-body">
			             <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                           
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Brand</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        
                                        <?php
                                        
                                        include "../functions/db.php";
                                      //                                        $sql = "SELECT tblmobilepost.mobile_Id,tblmobilepost.name,tblmobilepost.brand,tblmobilepost.description,tblmobilepost.image,tbldateposted.date,tbldateposted.mobile_Id FROM `tblmobilepost`,`tbldateposted` WHERE tblmobilepost.mobile_Id=tbldateposted.mobile_Id ORDER BY `date`";

                                        $sql = "SELECT * FROM `tblmobilepost`";
                                        $run = mysql_query($sql);

                                        while($row=mysql_fetch_array($run)){
                                            $id = $row['mobile_Id'];
                                            echo '<tr class="odd gradeX">';
                                            echo "<td>"?><img class="img-thumbnail" alt="Featured Image" style="width:100px;height:100px;"src="../images/<?php echo $row['image'];?>"> <?php "</td>";
                                            echo "<td>".$row['name']."</td>";
                                            echo "<td>".$row['brand']."</td>";
                                            echo "<td>".
                                                "<a href='post-detail.php?mobile_Id=$id'>Details</a>"." | ".
                                                "<a href='edit-post.php?mobile_Id=$id'>Edit</a>"." | ".
                                                "<a href='delete-post.php?mobile_Id=$id'>Delete</a>"
                                                ."</td>";
                                            echo "</tr>";
                       
                                     
                                        }
                                        

                                        ?>
                                   
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
		            </div>
		        </div>
		       <div class="panel panel-info">
									<div class="panel-heading">
											<h3 class="panel-title">Messages	</h3>
										</div>
									<div class="panel-body">
										 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                           
                                            
                                            <th>Sender</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        
                                        <?php
                                        
                                        include "../functions/db.php";

                                        $sql = "SELECT * FROM `tblsender`";
                                        $run = mysql_query($sql);

                                        while($row=mysql_fetch_array($run)){
                                            $id = $row['sender_Id'];
                                            echo '<tr class="odd gradeX">';
                                           
                                            echo "<td>".$row['name']."</td>";
                                            
                                            echo "<td>".
                                                "<a href='message-detail.php?sender_Id=$id'>View</a>"." | ".
                                                "<a href='delete-message.php?sender_Id=$id'>Delete</a>"
                                                ."</td>";
                                            echo "</tr>";
                       
                                     
                                        }
                                        

                                        ?>
                                   
                                        
                                    </tbody>
                                </table>
		</div>

		</div>
	</body>
</html>