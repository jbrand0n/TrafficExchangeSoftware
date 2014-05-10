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

$role = $_REQUEST['role'];

?>

<body class="page-body login-page login-form-fall" data-url="http://neon.dev">


<!-- This is needed when you send requests via Ajax -->
<script type="text/javascript">
var baseurl = '';
</script>
	
<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="index.html" class="logo">
				<img src="assets/images/logo@2x.png" width="120" alt="" />
			</a>
			
			<p class="description">
            <?php 
			
				if($role=='buyer')
				{
				?>
                
					Create your Buyer Account
				
				<?php
				}else if($role=='seller')
				{
				?>
                
                	Create your Seller Account
                
				<?php
				}
				
			?>
            
            </p>
			
		</div>
		
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<form method="post" role="form" id="form_register" action="registeruser.php" onsubmit="return check_reg();">
            
				<?php
                if(isset($_REQUEST['error_no']))
                {
                    ?>
                    <div class="form-login-error" style="display:block;">
                        <h3>Invalid Registration Information</h3>
                        <p><?php echo $errors[$_REQUEST['error_no']];?></p>
                    </div>
                    <?php
                }
                ?>

				
                
                
                <?php 
					if($role=='buyer')
					{
				?>
                
                		<div class="form-steps">
					
                            <div class="step current" id="step-1">
                            
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-user"></i>
                                        </div>
                                        
                                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" autocomplete="off" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-user"></i>
                                        </div>
                                        
                                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" autocomplete="off" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-mail"></i>
                                        </div>
                                        
                                        <input type="text" class="form-control" name="email" id="email" data-mask="email" placeholder="E-mail" autocomplete="off" />
                                    </div>
                                </div>
                                
        
                                <div class="form-group">
                                    <button type="button" data-step="step-2" class="btn btn-primary btn-block btn-login">
                                        <i class="entypo-right-open-mini"></i>
                                        Next Step
                                    </button>
                                </div>
                                
                                <div class="form-group">
                                    Step 1 of 2
                                </div>
                            
                            </div>
                            
                            <div class="step" id="step-2">
                            
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-user-add"></i>
                                        </div>
                                        
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-lock"></i>
                                        </div>
                                        
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Choose Password" autocomplete="off" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-lock"></i>
                                        </div>
                                        
                                        <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password" autocomplete="off" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                
                                    <input type="hidden" name="role" value="3">
                                    <button type="submit" class="btn btn-success btn-block btn-login">
                                        <i class="entypo-right-open-mini"></i>
                                        Complete Registration
                                    </button>
                                </div>
                                
                                <div class="form-group">
                                    Step 2 of 2
                                </div>
                                
                            </div>
                            
                        </div>

                    
                <?php
					}else if($role=='seller')
					{
				?>
                
                		<div class="form-steps">
					
                            <div class="step current" id="step-1">
                            
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-user"></i>
                                        </div>
                                        
                                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" autocomplete="off" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-user"></i>
                                        </div>
                                        
                                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" autocomplete="off" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-mail"></i>
                                        </div>
                                        
                                        <input type="text" class="form-control" name="email" id="email" data-mask="email" placeholder="E-mail" autocomplete="off" />
                                    </div>
                                </div>
                                
        
                                <div class="form-group">
                                    <button type="button" data-step="step-2" class="btn btn-primary btn-block btn-login">
                                        <i class="entypo-right-open-mini"></i>
                                        Next Step
                                    </button>
                                </div>
                                
                                <div class="form-group">
                                    Step 1 of 2
                                </div>
                            
                            </div>
                            
                            <div class="step" id="step-2">
                            
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-user-add"></i>
                                        </div>
                                        
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" data-mask="[a-zA-Z0-1\.]+" data-is-regex="true" autocomplete="off" />
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-lock"></i>
                                        </div>
                                        
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Choose Password" autocomplete="off" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-lock"></i>
                                        </div>
                                        
                                        <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password" autocomplete="off" />
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                
                                    <input type="hidden" name="role" value="2">
                                    <button type="submit" class="btn btn-success btn-block btn-login">
                                        <i class="entypo-right-open-mini"></i>
                                        Complete Registration
                                    </button>
                                </div>
                                
                                <div class="form-group">
                                    Step 2 of 2
                                </div>
                                
                            </div>
                            
                        </div>

                    
                <?php
					}
				?>
				
			</form>
			
			
			<div class="login-bottom-links">
				
				<a href="login.php" class="link">
					<i class="entypo-lock"></i>
					Return to Login Page
				</a>
				
				<br />
				
				<a href="#">ToS</a>  - <a href="#">Privacy Policy</a>
				
			</div>
			
		</div>
		
	</div>


    
<script type="text/javascript">

function check_reg(){

	if(document.getElementById("username") && document.getElementById("username").value.search(/\S/)==-1)
	{
		 $("#username").parent(".input-group").addClass("validate-has-error");
		 return false;
	}
	else
	{
		 $("#username").parent(".input-group").removeClass("validate-has-error");
	}
	
	if(document.getElementById("password") && document.getElementById("password").value.search(/\S/)==-1)
	{
		 $("#password").parent(".input-group").addClass("validate-has-error");
		 return false;
	}
	else
	{
		 $("#password").parent(".input-group").removeClass("validate-has-error");
	}
	
	if(document.getElementById("cpassword") && document.getElementById("cpassword").value.search(/\S/)==-1)
	{
		$("#cpassword").parent(".input-group").addClass("validate-has-error");
		 return false;
	}
	else
	{
		 $("#cpassword").parent(".input-group").removeClass("validate-has-error");
	}

	  
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var address = document.getElementById('email').value;
	if(reg.test(address) == false) {
	
	  $("#email").parent(".input-group").addClass("validate-has-error");
	  return false;
	}
	else
	{
		 $("#email").parent(".input-group").removeClass("validate-has-error");
	}

}

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