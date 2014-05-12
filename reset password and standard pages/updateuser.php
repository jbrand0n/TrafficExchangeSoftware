<?php

include("include/config.php"); 

session_start();

$userid = $_SESSION['userid'];

$role = $_SESSION['role'];

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$email = $_POST['email'];
$username = $_POST['username'];

if($role==1 || $role==2 || $role==3)
{
	//check if usrename is same or not
	$sql_a = "select * from tbl_users where role = $role and id = $userid limit 1";
	$result_a = mysql_query($sql_a);
	$count_a = mysql_num_rows($result_a);
	if($count_a>0)
	{
		$row_a = mysql_fetch_array($result_a);
		if($row_a['username']==$username)
		{
			//update password only
			$sql_aa = "select * from tbl_users where username = '$username' and role = $role limit 1";
			$result_aa = mysql_query($sql_aa);
			$count_aa = mysql_num_rows($result_aa);
			
			if($password==$cpassword && strlen($password)>0)
			{
				
				$sql_i = "update tbl_users `password`='$password',`firstname`='$firstname',`lastname`='$lastname',`email`='$email' where role = $role and id = $userid";
				$result_i = mysql_query($sql_i);
				
				?>
			
				<script type="text/javascript">
					document.location.href = "myaccount.php?success=1";
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
					document.location = "myaccount.php?error_no=<?php echo $error_no;?>";
				</script>
			
				<?php
			}
		}
		else
		{
			//check if username already exists or not
			$sql_aa = "select * from tbl_users where username = '$username' and role = $role limit 1";
			$result_aa = mysql_query($sql_aa);
			$count_aa = mysql_num_rows($result_aa);
			
			if($count_aa>0 || strlen($username)<1)
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
					document.location.href = "myaccount.php?error_no=<?php echo $error_no;?>";
				</script>
			
				<?php
			}
			else if($password==$cpassword && strlen($password)>0)
			{
				
				$sql_i = "update tbl_users `username`='$username',`password`='$password',`firstname`='$firstname',`lastname`='$lastname',`email`='$email' where role = $role and id = $userid";
				$result_i = mysql_query($sql_i);

				?>
			
				<script type="text/javascript">
					document.location.href = "myaccount.php?success=1";
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
					document.location = "myaccount.php?error_no=<?php echo $error_no;?>";
				</script>
			
				<?php
			}
			
		}
	}
	else
	{
		
		unset($_SERVER['role']);
		unset($_SERVER['userid']);
		session_destroy();
		?>
	
		<script type="text/javascript">
			document.location.href = "login.php";
		</script>
	
		<?php
	}
}
else
	{
		
		unset($_SERVER['role']);
		unset($_SERVER['userid']);
		session_destroy();
		?>
	
		<script type="text/javascript">
			document.location.href = "login.php";
		</script>
	
		<?php
	}

?>