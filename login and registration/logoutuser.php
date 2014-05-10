<?php

include("include/config.php"); 

session_start();
unset($_SERVER['role']);
unset($_SERVER['userid']);
session_destroy();

?>
	
<script type="text/javascript">
  document.location = "index.php";
</script>
