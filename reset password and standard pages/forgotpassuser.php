<?php

include("include/config.php"); 

$role = $_POST['role'];

if($role==2)
{
	$username = $_POST['sellername'];
	$email = $_POST['email'];
	
	$sql_s = "select * from tbl_users where username = '$username' and email = '$email' and role = '$role' limit 1";
	$result_s = mysql_query($sql_s);
	$count_s = mysql_num_rows($result_s);
	if($count_s>0)
	{
		
		$row_s = mysql_fetch_array($result_s);
		
		$to="kamran8901@gmail.com";
		$subject="Seller's Forgotten Password Request";
		
		$message= "Dear User <br /><br /> Please find your Password below: <br /><br /> Password :  ".$row_s['password']." <br /><br />Thank you";
		
		
		$from=$main_admin_email;
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .="From:".$from;
		
		mail($to,$subject,$message,$headers);
		
		?>
	
			<script type="text/javascript">
                document.location = "forgotpass.php?role=seller&success=1";
            </script>
	
		<?php
	}
	else
	{
		//user not validated
		?>
	
		<script type="text/javascript">
			document.location = "forgotpass.php?role=seller&error_no=8";
		</script>
	
		<?php
	}
}
else if($role==3)
{
	$username = $_POST['buyername'];
	$email = $_POST['email'];
	
	$sql_b = "select * from tbl_users where `username`='$username' and `email`='$email' and `role`='$role' limit 1";
	$result_b = mysql_query($sql_b);
	$count_b = mysql_num_rows($result_b);
	
	if($count_b>0)
	{
		
		$row_s = mysql_fetch_array($result_s);
		
		$to="kamran8901@gmail.com";
		$subject="Buyer's Forgotten Password Request";
		
		$message= "Dear User <br /><br /> Please find your Password below: <br /><br /> Password :  ".$row_s['password']." <br /><br />Thank you";
		
		
		$from=$main_admin_email;
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .="From:".$from;
		
		mail($to,$subject,$message,$headers);

		?>
	
		<script type="text/javascript">
			document.location = "forgotpass.php?role=buyer&success=1";
		</script>
	
		<?php
	}
	else
	{
		//user not validated
		?>
	
		<script type="text/javascript">
			document.location = "forgotpass.php?role=buyer&error_no=8";
		</script>
	
		<?php
	}
}


?>