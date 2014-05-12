<?php 

session_start();

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

include("include/loggedout.php");

?>

	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="index.html" class="logo">
				<img src="assets/images/logo@2x.png" width="120" alt="" />
			</a>
			
			<p class="description">Dear user, Enter your username and email address!</p>

		</div>
		
	</div>
    
    
    
<div class="container">	  

	<div class="row">  
    
        <div class="col-sm-12">	
            
            <div class="login-form"  id="content_tab1" <?php if(isset($_REQUEST['role']) && $_REQUEST['role']=='buyer'){}else{?>style="display:none;"<?php } ?>>
                
                <div class="login-content">
                    
                      <?php
                      if(isset($_REQUEST['error_no']) && $_REQUEST['error_no']=='8')
                      {
                          ?>
                          <div class="form-login-error" style="display:block;">
                              <h3>Invalid login details</h3>
                              <p><?php echo $errors[8];?></p>
                          </div>
                          <?php
                      }
					  else if(isset($_REQUEST['success']))
					  {
						  ?>
                          <div class="form-login-error form-login-success" style="display:block;">
                              <h3>Password Send</h3>
                              <p>Your Password is sent on your Email</p>
                          </div>
                          <?php
					  }
                      ?>
        
                    <form method="post" action="forgotpassuser.php" role="form" onsubmit="return check_b();">
                        
                        <div class="form-group">
                            
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-user"></i>
                                </div>
                                
                                <input type="text" class="form-control" name="buyername" id="buyername" placeholder="UserName" autocomplete="off" />
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-mail"></i>
                                </div>
                                
                                <input type="text" class="form-control" name="email" id="emailbuyer" placeholder="Email" autocomplete="off" />
                            </div>
                        
                        </div>
                        
                        <div class="form-group">
                            <input type="hidden" name="role" value="3" />
                            <button type="submit" class="btn btn-primary btn-block btn-login">
                                <i class="entypo-login"></i>
                                Submit
                            </button>
                        </div>
        
                    </form>
                    
                    
                    
        
                </div>
                
            </div>
            
            <div class="col-lg-12 center-block" id="reg_tab1" <?php if(isset($_REQUEST['role']) && $_REQUEST['role']=='buyer'){}else{?>style="display:none;"<?php } ?>>
                        
                    <div class="col-lg-6">
                    
                        <h3>Don't have a CPC account?</h3>
                        <p><a href="register.php?role=buyer">Click here to register for your Buyer Account</a></p>
                    
                    </div>
                    
                    <div class="col-lg-6">
                    	
                        <p>&nbsp;</p>
                        <p>
                        	<a href="login.php">
                                <i class="entypo-lock"></i>
                                Return to Login Page
                            </a>
                        </p>
                    
                    </div>
                
            </div>
            
            <div class="login-form"  id="content_tab2" <?php if(isset($_REQUEST['role']) && $_REQUEST['role']=='seller'){}else{?>style="display:none;"<?php } ?>>
                
                <div class="login-content">
                    
                      <?php
                      if(isset($_REQUEST['error_no']) && $_REQUEST['error_no']=='8')
                      {
                          ?>
                          <div class="form-login-error" style="display:block;">
                              <h3>Invalid login details</h3>
                              <p><?php echo $errors[8];?></p>
                          </div>
                          <?php
                      }
					  else if(isset($_REQUEST['success']))
					  {
						  ?>
                          <div class="form-login-error form-login-success" style="display:block;">
                              <h3>Password Sent!</h3>
                              <p>Your Password is sent on your Email</p>
                          </div>
                          <?php
					  }
                      ?>
        
                    <form method="post" action="forgotpassuser.php" role="form" onsubmit="return check_s();">
                        
                        <div class="form-group">
                            
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-user"></i>
                                </div>
                                
                                <input type="text" class="form-control" name="sellername" id="sellername" placeholder="UserName" autocomplete="off" />
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-mail"></i>
                                </div>
                                
                                <input type="text" class="form-control" name="email" id="emailseller" placeholder="Email" autocomplete="off" />
                                
                            </div>
                        
                        </div>
                        
                        <div class="form-group">
                        <input type="hidden" name="role" value="2" />
                            <button type="submit" class="btn btn-primary btn-block btn-login">
                                <i class="entypo-login"></i>
                                Submit
                            </button>
                        </div>
        
                    </form>

                </div>
                
            </div>
            
            <div class="col-lg-12 center-block" id="reg_tab2" <?php if(isset($_REQUEST['role']) && $_REQUEST['role']=='seller'){}else{?>style="display:none;"<?php } ?>>
                        
                    <div class="col-lg-6">
                    
                        <h3>Don't have a CPC account?</h3>
                        <p><a href="register.php?role=seller">Click here to register for your Seller Account</a></p>
                    
                    </div>
                    
                    <div class="col-lg-6">
                    
                    	<p>&nbsp;</p>

                        <p>
                        	<a href="login.php">
                                <i class="entypo-lock"></i>
                                Return to Login Page
                            </a>
                        </p>
                    
                    </div>
                
            </div>
            
        </div>
        
    </div>  
    
</div>  
    

<script type="text/javascript">

var active = '';
var active2 = '';

<?php if(isset($_REQUEST['error_no']) && isset($_REQUEST['role']) && $_REQUEST['role']=='buyer'){?>

 active = $("#content_tab1");
 active2 = $("#reg_tab1"); 

<?php } ?>

<?php if(isset($_REQUEST['error_no']) && isset($_REQUEST['role']) && $_REQUEST['role']=='seller'){?>

 active = $("#content_tab2");
 active2 = $("#reg_tab2"); 

<?php } ?>

<?php if(isset($_REQUEST['error_no']) && isset($_REQUEST['role']) && $_REQUEST['role']=='admin'){?>

 active = $("#content_tab3");
 active2 = $("#reg_tab3"); 

<?php } ?>


$(document).ready(function() {

   $("#tabs_btn li a").click(function() { 

	  if(active!='')
	  {
		  active.hide();
		  active2.hide();	
	  }
	  
      $("#tabs_btn li a").find(".set").removeClass("set");
      $(this).addClass("set");
	  
      var id = $(this).attr("id").valueOf();
      $("#content_" + id).show();
	  $("#reg_" + id).show();
	  
	  active = $("#content_" + id);
      active2 = $("#reg_" + id); 
   });

});


function check_b(){

	if(document.getElementById("buyername") && document.getElementById("buyername").value.search(/\S/)==-1)
	{
		$("#buyername").parent(".input-group").addClass("validate-has-error");
		 return false;
	}
	else
	{
		$("#buyername").parent(".input-group").removeClass("validate-has-error");
	}
	
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var address = document.getElementById('emailbuyer').value;
	if(reg.test(address) == false) {
	
	  $("#emailbuyer").parent(".input-group").addClass("validate-has-error");
	  return false;
	}
	else
	{
		 $("#emailbuyer").parent(".input-group").removeClass("validate-has-error");
	}
	
}

function check_s(){

	
	if(document.getElementById("sellername") && document.getElementById("sellername").value.search(/\S/)==-1)
	{
		  $("#sellername").parent(".input-group").addClass("validate-has-error");
		  return false;
	}
	else
	{
		  $("#sellername").parent(".input-group").removeClass("validate-has-error");
	}
	
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var address = document.getElementById('emailseller').value;
	if(reg.test(address) == false) {
	
	  $("#emailseller").parent(".input-group").addClass("validate-has-error");
	  return false;
	}
	else
	{
		 $("#emailseller").parent(".input-group").removeClass("validate-has-error");
	}
	
}

document.title = 'Forgot Password';

</script>   


</div> 

	<!-- Bottom Scripts -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="assets/js/raphael-min.js"></script>
	<script src="assets/js/morris.min.js"></script>
	<script src="assets/js/toastr.js"></script>
	<script src="assets/js/neon-chat.js"></script>
	<script src="assets/js/neon-custom.js"></script>
	<script src="assets/js/neon-demo.js"></script> 
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/neon-register.js"></script>
	<script src="assets/js/jquery.inputmask.bundle.min.js"></script>   
    
</body>
</html>