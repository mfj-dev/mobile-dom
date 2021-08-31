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
            <li><a href="post.php">Post</a></li>
            <li   class="active"><a href="message.php">Messages</a></li>
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
                                            <h3 class="panel-title">Messages    </h3>
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
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
        </div>
   

	</body>
</html>