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
			<div class="row">
        <div class="col-sm-7 col-md-8 sidebar">
				
				<table class="table table-stripped">
      	
<?php
	include "../functions/db.php";
	extract($_POST);
	if(isset($search))
		{
			$name = $_POST['searchkey'];
			$brand = $_POST['searchkey'];
			$desc = $_POST['searchkey'];

	$result = mysqli_query($connect,"SELECT * FROM tblmobilepost where name like '%$name%' or brand like '%$brand%'  or description like '%$desc%'")
		or die(mysqli_error());
	if(mysqli_num_rows($result)==0)
		{
		echo "<p class='alert alert-danger'>"."No records have been found"."</p>";
		}
		else							
		{
			echo "<h3 class='text-left'>Search Result!</h3>";
	while($row = mysqli_fetch_array($result))
		{
  	$cont = $row['description'];
	$limit = 100;
	$content = substr($cont, 0, $limit); 
  	$id = $row['mobile_Id'];
	echo "<tr>";
	echo "<td style='width:15%;'>";?><img class="img-thumbnail" alt="Featured Image" style="width:100px;height:100px;"src="../images/<?php echo $row['image'];?>"><?php  "</td>";
	echo "<td style='width:8%;'></td>";
	echo "<td>" ."<p>".$content ."</p>". 
		"<a href='content.php?mobile_Id=$id'>Read more</a> ".
		"</td>";
	echo "</tr>";
}
	echo "</table>";
		
	}

}
?>
		</div>
		</div>
	</body>
</html>