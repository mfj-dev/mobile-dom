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
                                  <?php
                                        
                                        include "../functions/db.php";
                                         if(isset($_GET['sender_Id'])){
                                             $id = $_GET['sender_Id'];
                                               }
                                              if(empty($id)){
                                                header("location:message.php");
                                             }
                                                  //                                        $sql = "SELECT tblmobilepost.mobile_Id,tblmobilepost.name,tblmobilepost.brand,tblmobilepost.description,tblmobilepost.image,tbldateposted.date,tbldateposted.mobile_Id FROM `tblmobilepost`,`tbldateposted` WHERE tblmobilepost.mobile_Id=tbldateposted.mobile_Id ORDER BY `date`";
                                                        $sql = "SELECT tblsender.sender_Id,tblsender.name,tblmessage.message_Id,tblmessage.message,tblmessage.sender_Id FROM `tblsender`,`tblmessage` WHERE tblsender.sender_Id=tblmessage.sender_Id";
                                                        $run = mysql_query($sql);

                                                        while($row=mysql_fetch_array($run))
                                                        {
                                                            $id = $row['sender_Id'];
                                                   
                                                            $a = $row['name'];
                                                           $e =$row['message'];

                                             
                                                        }

                                        

                                        ?>

                                      <label>Sender Name: </label>
                                      <i><?php echo $a;?></i>
                                      <br>
                                      <label>Message:</label><br>
                                      <i><?php echo $e;?></i>

                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
        </div>
   

  </body>
</html>