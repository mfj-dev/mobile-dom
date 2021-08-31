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
<body style="background-color:#006BCE;">
	<div class="main-wrapper">
		<div class="pull-left">
			<h2>Mobile Dome Information System</h2>
		</div>
			<form class="navbar-form navbar-right" method="POST" action="search.php"role="search">
							<div class="form-group">
								<input type="text" name="searchkey" class="form-control" placeholder="Search">
							</div>
								<button type="submit" name="search" class="btn btn-default">Search</button>
						</form>
		<nav class="navbar navbar-default navbar-custom" role="navigation" style="margin:8% auto;">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">MDIS</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="../index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="mobile.php">Developers</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					
				</ul>
			</div>
			</nav>
			<div class="container" style="width:100%;margin:0 auto;">
     
            	
            	<?php

	

	include '../functions/db.php';
	if(isset($_GET['mobile_Id'])){
			$id = $_GET['mobile_Id'];
		}
		if(empty($id)){
			header("location:../index.php");
		}
		
	$run = mysqli_query($connect,"SELECT tblmobilepost.mobile_Id,tblmobilepost.name,tblmobilepost.brand,tblmobilepost.description,tblmobilepost.image,tbldateposted.date,tbldateposted.mobile_Id FROM `tblmobilepost`,`tbldateposted` WHERE tblmobilepost.mobile_Id='$id' AND tbldateposted.mobile_Id='$id' ");
	while($row = mysqli_fetch_array($run))
  {
  	$a = $row['name'];
  	$b = $row['brand'];
  	$cont = $row['description'];
  	$id = $row['mobile_Id'];
  	echo "<div class='container' style='width:700px;'>";
	echo "";?><img class="img-thumbnail" alt="Featured Image" style="width:200px;height:200px;"src="../images/<?php echo $row['image'];?>"><?php ;
	echo "<h4> Mobile Name: ".$a ."</h4>";
	echo "<h4> Mobile Brand: ".$b ."</h4>";
	echo "<h4> Mobile Specs: <br>"."<p class='well'>".$cont ."</p>"."</h4>";

	

}	
	

	?>	
	<h3>Send Us your Reactions</h3>
	<hr>
			<form method="POST" action="send-message.php">	
				<table>
					<tr>
						<td>Name</td>
						<td style="width:15%;"></td>
						<td><input type="text" name="sender" class="form-control"></td>
					</tr>
					<tr>
						<td>Message</td>
						<td style="width:15%;"></td>
						<td>
							<textarea name="message" class="form-control"></textarea>
						</td>
					</tr>
				</table><br>
				<input type="submit" class="btn btn-info" value="Send" style="width:320px;">
			</form>

			</div>
                
		</div>
		</div>
	</body>
</html>