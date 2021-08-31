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
                        <div class="panel-heading text-center">
                            Add New Post
                            
                        </div>
                         <div class="panel-body">
                             <form method="POST" enctype="multipart/form-data" action="add-post-function.php">
                                <table>
                                    <tr>
                                        <td>Name</td>
                                        <td width="10%"></td>
                                        <td><input type="text" name="name"class="form-control"required></td>
                                    </tr>
                                    <tr>
                                        <td>Brand</td>
                                        <td width="10%"></td>
                                        <td>
                                            <select name="brand" class="form-control">
                                                <option></option>
                                                <option>Samsung</option>
                                                <option>Apple</option>
                                                <option>Lenovo</option>
                                                <option>Cherry Mobile</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td width="10%"></td>
                                        <td>
                                            <textarea name="desc"class="form-control" style="height:150px;"></textarea>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>Featured Image</td>
                                        <td width="10%"></td>
                                        <td>
                                            <input type="file" name="file" class="form-control">
                                        </td>
                                    </tr>
                                </table>
                            
                        </div>
                          <div class="panel-footer">
                        <input type="submit" class="btn btn-info" value="Add New Post" style="width:100%;">
                    </div>

                             </form>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
        </div>
   

	</body>
</html>