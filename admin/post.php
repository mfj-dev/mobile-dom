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
        <div class="container" style="width:800px;">

        <div class="panel panel-info">
                        <div class="panel-heading">
                            List of Products Posted
                            <div class="pull-right">
                                <div class="btn-group">
                                    <a href="new-post.php" class="btn btn-default btn-xs dropdown-toggle">Add New</a>
                                   
                                </div>
                            </div>
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
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
        </div>
   

	</body>
</html>