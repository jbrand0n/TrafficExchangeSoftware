<?php

include("include/config.php"); 

$role = $_POST['role'];

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$email = $_POST['email'];

if($role==1)
{
	?>
	
		<script type="text/javascript">
			document.location.href = "index.php";
		</script>
	
	<?php
}
else if($role==2)
{
	$username = $_POST['username'];
	
	$sql_s = "select * from tbl_users where username = '$username' and role = '2' limit 1";
	$result_s = mysql_query($sql_s);
	$count_s = mysql_num_rows($result_s);
	
	if($count_s>0 || strlen($username)<1)
	{
		//echo strlen($username)."<1";
		//user already exists///
		if(strlen($username)<1)
		{
			$error_no = 5;
		}
		else
		{
			$error_no = 1;
		}
		?>
	
		<script type="text/javascript">
		
			document.location.href = "register.php?role=seller&error_no=<?php echo $error_no;?>";
		</script>
	
		<?php
	}
	else if($password==$cpassword && strlen($password)>0)
	{
		
		$sql_i = "insert into tbl_users (`username`,`password`,`firstname`,`lastname`,`email`,`role`) values ('$username','$password','$firstname','$lastname','$email','2')";
		$result_i = mysql_query($sql_i);
		
		session_start();
		
		$_SESSION['role'] = 2;
		
		$_SESSION['userid'] = mysql_insert_id();
		
		?>
	
		<script type="text/javascript">
			document.location.href = "index_s.php";
		</script>
	
		<?php
	}
	else
	{
		if(strlen($password)<1)
		{
			$error_no = 6;
		}
		else
		{
			$error_no = 3;
		}
		?>
	
		<script type="text/javascript">
			document.location = "register.php?role=seller&error_no=<?php echo $error_no;?>";
		</script>
	
		<?php
	}
	
}
else if($role==3)
{
	$username = $_POST['username'];
	
	$sql_b = "select * from tbl_users where username = '$username' and role = '3' limit 1";
	$result_b = mysql_query($sql_b);
	$count_b = mysql_num_rows($result_b);
	
	if($count_b>0 || strlen($username)<1)
	{
		//user already exists///
		if(strlen($username)<1)
		{
			$error_no = 5;
		}
		else
		{
			$error_no = 1;
		}
		?>
	
		<script type="text/javascript">
		
			document.location = "register.php?role=buyer&error_no=<?php echo $error_no;?>";
		</script>
	
		<?php
	}
	else if($password==$cpassword && strlen($password)>0)
	{
		
		$sql_i = "insert into tbl_users (`username`,`password`,`firstname`,`lastname`,`email`,`role`) values ('$username','$password','$firstname','$lastname','$email','3')";
		$result_i = mysql_query($sql_i);
		
		session_start();
		
		$_SESSION['role'] = 3;
		
		$_SESSION['userid'] = mysql_insert_id();
		
		?>
	
		<script type="text/javascript">
			document.location = "index_b.php";
		</script>
	
		<?php
	}
	else
	{
		if(strlen($password)<1)
		{
			$error_no = 6;
		}
		else
		{
			$error_no = 3;
		}
		?>
	
		<script type="text/javascript">
			document.location = "register.php?role=buyer&error_no=<?php echo $error_no;?>";
		</script>
	
		<?php
	}
}


?>