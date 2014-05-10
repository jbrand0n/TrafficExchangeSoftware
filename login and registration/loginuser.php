<?php

include("include/config.php"); 

$role = $_POST['role'];

if($role==1)
{
	$email = $_POST['email'];
	$password = $_POST['adminpass'];
	
	$sql_a = "select * from tbl_users where email = '$email' and password = '$password' and role = '$role' limit 1";
	$result_a = mysql_query($sql_a);
	$count_a = mysql_num_rows($result_a);
	if($count_a>0)
	{
		//user validated so set the session
		session_start();
		
		$_SESSION['role'] = 1;
		
		$row = mysql_fetch_array($result_a);
		
		$_SESSION['userid'] = $row['id'];
		
		?>
	
		<script type="text/javascript">
			document.location = "index_a.php";
		</script>
	
		<?php
	}
	else
	{
		//user not validated
		?>
	
		<script type="text/javascript">
			document.location = "login.php?role=admin&error_no=7";
		</script>
	
		<?php
	}
}
else if($role==2)
{
	$username = $_POST['sellername'];
	$password = $_POST['sellerpass'];
	
	$sql_s = "select * from tbl_users where username = '$username' and password = '$password' and role = '$role' limit 1";
	$result_s = mysql_query($sql_s);
	$count_s = mysql_num_rows($result_s);
	if($count_s>0)
	{
		//user validated so set the session
		session_start();
		
		$_SESSION['role'] = 2;
		
		$row = mysql_fetch_array($result_s);
		
		$_SESSION['userid'] = $row['id'];
		
		?>
	
		<script type="text/javascript">
			document.location = "index_s.php";
		</script>
	
		<?php
	}
	else
	{
		//user not validated
		?>
	
		<script type="text/javascript">
			document.location = "login.php?role=seller&error_no=7";
		</script>
	
		<?php
	}
}
else if($role==3)
{
	$username = $_POST['buyername'];
	$password = $_POST['buyerpass'];
	
	$sql_b = "select * from tbl_users where `username`='$username' and `password`='$password' and `role`='$role' limit 1";
	$result_b = mysql_query($sql_b);
	$count_b = mysql_num_rows($result_b);
	
	if($count_b>0)
	{
		//user validated so set the session
		session_start();
		
		$_SESSION['role'] = 3;
		
		$row = mysql_fetch_array($result_b);
		
		$_SESSION['userid'] = $row['id'];
		
		?>
	
		<script type="text/javascript">
			document.location = "index_b.php";
		</script>
	
		<?php
	}
	else
	{
		//user not validated
		?>
	
		<script type="text/javascript">
			document.location = "login.php?role=buyer&error_no=7";
		</script>
	
		<?php
	}
}


?>