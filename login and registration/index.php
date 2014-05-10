<?php 

session_start();

$login_status_r = 0;

if(isset($_SESSION['role']))
{
	
	if($_SESSION['role']==1)
	{
		?>
        <script type="text/javascript">
			document.location = "index_a.php";
		</script>
        <?php
		exit(); 
	}
	else if($_SESSION['role']==2)
	{
		?>
        <script type="text/javascript">
			document.location = "index_s.php";
		</script>
        <?php
		exit(); 
	}
	else if($_SESSION['role']==3)
	{
		?>
        <script type="text/javascript">
			document.location = "index_b.php";
		</script>
        <?php
		exit(); 
	}
}

include("include/header.php");

include("include/loggedin.php");

?>


<div class="row">

	<div class="col-sm-12">
	
		<h1>Landing Page</h1>
        <div class="col-sm-12">This is the Langing Page content</div>	

	</div>

</div>

<script type="text/javascript">

document.title = 'Home';

</script>

<?php 

include("include/footer.php");

?>    