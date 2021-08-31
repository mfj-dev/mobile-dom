<?php
    session_start();
	
	include '../functions/db.php';

	$uname = $_POST['uname'];
   $pwd = $_POST['pwd'];
   $pass =  md5($pwd);


	$uname = mysql_real_escape_string($_POST['uname']);
    $pwd = mysql_real_escape_string($_POST['pwd']);

    $query = "SELECT * FROM tbladmin WHERE uname = '$uname' AND pwd = '$pass'";
    $result = mysql_query($query) or die ("Verification error");
    $array = mysql_fetch_array($result);
    
    if ($array['uname'] == $uname){
        $_SESSION['uname'] = $uname;
        header("Location: home.php");
    }
    
    else{
    	echo '<script language="javascript">';
        echo 'alert("Incorrect username or password")';
        echo '</script>';
        echo '<meta http-equiv="refresh" content="0;url=index.php" />';
    }


?>
