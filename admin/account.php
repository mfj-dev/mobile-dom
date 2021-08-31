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
            <li><a href="message.php">Messages</a></li>
            <li    class="active"><a href="account.php">Account</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
</div>
    <div class="main-wrapper">
        <h4>Published Articles</h4>
        <hr>
        <div class="container" style="width:500px;">

        <div class="panel panel-info">
            <div class="panel-heading">
                Update Account
            </div>
        <div class="panel-body">
            <form method="POST">
                 <table>
                    <tr>
                        <td>New Username</td>
                        <td width="10%"></td>
                        <td><input type="text" name="n" class="form-control"required></td>
                    </tr>
                     <tr>
                        <td>New Password</td>
                        <td width="10%"></td>
                        <td><input type="password" name="p" class="form-control"required></td>
                    </tr>
             
                </table>
            
        </div>
                    <!-- /.panel-body -->
                     <div class="panel-footer">
                        <input type="submit" name="u"class="btn btn-info" value="Update Account" style="width:100%;">
                    </div>

                             </form>
    </div>
            <!-- /.panel -->


            <?php
            require "../functions/db.php";
            extract($_POST);
            if(isset($u))
            {


                mysql_query("UPDATE tbladmin SET uname ='$n',pwd=md5('$p') WHERE Id")
                            or die(mysql_error()); 
                
                header("Location:account.php");           
            }

            ?>
        </div>
	</body>
</html>