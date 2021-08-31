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
<body>
	<div class="container" style="width:400px;margin:10% auto;">
		<div class="panel panel-info">
			<div class="panel-heading">
					<h3 class="panel-title text-center">Administrator</h3>
			</div>
			<div class="panel-body">
					<form method="POST" action="login.php">
						<table>
							<tr>
								<td>Username</td>
								<td width="10%"></td>
								<td><input type="text" name="uname"class="form-control"required></td>
							</tr>
							<tr>
								<td>Password</td>
								<td width="10%"></td>
								<td><input type="password" name="pwd"class="form-control"required></td>
							</tr>

						</table>

				
				</div>
				<div class="panel-footer">
						<input type="submit" class="btn btn-info" value="Login" style="width:100%;">
					</div>
						</form>
			</div>
	</div>
</body>
</html>