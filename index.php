<html>
<head>
	<title></title>
		<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
</head>
<body style="background-color:#006BCE;">
	<div class="main-wrapper">
	
		<div class="pull-left">
			<h2>Mobile Dome Information System</h2>

		</div>
		<form class="navbar-form navbar-right" method="POST" action="tabs/search.php"role="search">
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
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="tabs/about.php">About Us</a></li>
					<li><a href="tabs/mobile.php">Developers</a></li>
					<li><a href="tabs/contact.php">Contact Us</a></li>
					
				</ul>
			</div>
			</nav>
			<div class="row">
        <div class="col-sm-7 col-md-8 sidebar">
  
			

            <h4>Latest Mobile Phones</h4>
            <table class="table table-stripped">
        
            	<?php

	

	include 'functions/db.php';
		
	$run = mysqli_query($connect,"SELECT tblmobilepost.mobile_Id,tblmobilepost.name,tblmobilepost.brand,tblmobilepost.description,tblmobilepost.image,tbldateposted.date,tbldateposted.mobile_Id FROM `tblmobilepost`,`tbldateposted` WHERE tblmobilepost.mobile_Id=tbldateposted.mobile_Id ORDER BY `date` ");
	while($row = mysqli_fetch_array($run))
  {
  	$cont = $row['description'];
	$limit = 100;
	$content = substr($cont, 0, $limit); 
  	$id = $row['mobile_Id'];
	echo "<tr>";
	echo "<td style='width:15%;'>";?><img class="img-thumbnail" alt="Featured Image" style="width:100px;height:100px;"src="images/<?php echo $row['image'];?>"><?php  "</td>";
	echo "<td style='width:8%;'></td>";
	echo "<td>" ."<p>".$content ."</p>". 
		"<a href='tabs/content.php?mobile_Id=$id'>Read more</a> ".
		"</td>";
	echo "</tr>";
}
	echo "</table>";

	?>
            </table>

            </div>
                <div class="col-sm-4 col-md-3">
                   <div class="row">
                    	<div class="panel panel-info">
							<div class="panel-heading">
									<h3 class="panel-title">Random Post	</h3>
								</div>
							<div class="panel-body">
								<?php
								include 'functions/db.php';

							$run = "SELECT * FROM tblmobilepost ORDER BY RAND() DESC LIMIT 5";
							$result = mysqli_query($connect,$run);

							while($row=mysqli_fetch_array($result)){

								$id = $row['mobile_Id'];
								echo "<ul>";
								echo "<li><a href='tabs/content.php?mobile_Id=". $row['mobile_Id']. "'>" .$row['name']."</a></li>";
								echo "</ul>";

							}

								?>
							</div>
					</div>
					
                </div>
                
			</div>
		</div>
		</div>
	</body>
</html>