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
			
			<p class="description">Dear user, log in to access your admin area!</p>
        
                    <div class="row">
                        <div class="col-lg-12 login_btns" style="text-align: center; margin-top: 40px; margin-bottom: 40px;">
                                <ul class="list-inline" id="tabs_btn">
                                    <li><a id="tab1" class="btn btn-default set"><span class="network-name">Buyer</span></a>
                                    </li>
                                    <li><a id="tab2" class="btn btn-default"><span class="network-name">Seller</span></a>
                                    </li>
                                    <li><a id="tab3" class="btn btn-default"><span class="network-name">Admin</span></a>
                                    </li>
                                </ul>
                        </div>
        
            </div>
            

		</div>
		
	</div>
    
    
    
<div class="container">	  

	<div class="row">  
    
        <div class="col-sm-12">	
            
            <div class="login-form"  id="content_tab1" <?php if(isset($_REQUEST['error_no']) && isset($_REQUEST['role']) && $_REQUEST['role']=='buyer'){}else{?>style="display:none;"<?php } ?>>
                
                <div class="login-content">
                    
                      <?php
                      if(isset($_REQUEST['error_no']) && $_REQUEST['error_no']=='7')
                      {
                          ?>
                          <div class="form-login-error" style="display:block;">
                              <h3>Invalid login</h3>
                              <p><?php echo $errors[7];?></p>
                          </div>
                          <?php
                      }
                      ?>
        
                    <form method="post" action="loginuser.php" role="form" onsubmit="return check_b();">
                        
                        <div class="form-group">
                            
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-user"></i>
                                </div>
                                
                                <input type="text" class="form-control" name="buyername" id="buyername" placeholder="BuyerName" autocomplete="off" />
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-key"></i>
                                </div>
                                
                                <input type="password" class="form-control" name="buyerpass" id="buyerpass" placeholder="Password" autocomplete="off" />
                            </div>
                        
                        </div>
                        
                        <div class="form-group">
                            <input type="hidden" name="role" value="3" />
                            <button type="submit" class="btn btn-primary btn-block btn-login">
                                <i class="entypo-login"></i>
                                Login In
                            </button>
                        </div>
        
                    </form>
        
                </div>
                
            </div>
            
            <div class="col-lg-12 center-block" id="reg_tab1" <?php if(isset($_REQUEST['error_no']) && isset($_REQUEST['role']) && $_REQUEST['role']=='buyer'){}else{?>style="display:none;"<?php } ?>>
                        
                    <div class="col-lg-6">
                    
                        <h3>Don't have a CPC account?</h3>
                        <p><a href="register.php?role=buyer">Click here to register for your Buyer Account</a></p>
                    
                    </div>
                    
                    <div class="col-lg-6">
                    
                        <h3>Forgotten your Buyer Account password?</h3>
                        <p><a href="forgotpass.php?role=buyer">Click here to reset your Buyer Account password</a></p>
                    
                    </div>
                
            </div>
            
            <div class="login-form"  id="content_tab2" <?php if(isset($_REQUEST['error_no']) && isset($_REQUEST['role']) && $_REQUEST['role']=='seller'){}else{?>style="display:none;"<?php } ?>>
                
                <div class="login-content">
                    
                      <?php
                      if(isset($_REQUEST['error_no']) && $_REQUEST['error_no']=='7')
                      {
                          ?>
                          <div class="form-login-error" style="display:block;">
                              <h3>Invalid login</h3>
                              <p><?php echo $errors[7];?></p>
                          </div>
                          <?php
                      }
                      ?>
        
                    <form method="post" action="loginuser.php" role="form" onsubmit="return check_s();">
                        
                        <div class="form-group">
                            
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-user"></i>
                                </div>
                                
                                <input type="text" class="form-control" name="sellername" id="sellername" placeholder="SellerName" autocomplete="off" />
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-key"></i>
                                </div>
                                
                                <input type="password" class="form-control" name="sellerpass" id="sellerpass" placeholder="Password" autocomplete="off" />
                            </div>
                        
                        </div>
                        
                        <div class="form-group">
                        <input type="hidden" name="role" value="2" />
                            <button type="submit" class="btn btn-primary btn-block btn-login">
                                <i class="entypo-login"></i>
                                Login In
                            </button>
                        </div>
        
                    </form>
        
                </div>
                
            </div>
            
            <div class="col-lg-12 center-block" id="reg_tab2" <?php if(isset($_REQUEST['error_no']) && isset($_REQUEST['role']) && $_REQUEST['role']=='seller'){}else{?>style="display:none;"<?php } ?>>
                        
                    <div class="col-lg-6">
                    
                        <h3>Don't have a CPC account?</h3>
                        <p><a href="register.php?role=seller">Click here to register for your Seller Account</a></p>
                    
                    </div>
                    
                    <div class="col-lg-6">
                    
                        <h3>Forgotten your Seller Account password?</h3>
                        <p><a href="forgotpass.php?role=buyer">Click here to reset your Seller Account password</a></p>
                    
                    </div>
                
            </div>
            
            <div class="login-form"  id="content_tab3" <?php if(isset($_REQUEST['error_no']) && isset($_REQUEST['role']) && $_REQUEST['role']=='admin'){}else{?>style="display:none;"<?php } ?>>
                
                <div class="login-content">
                    
                      <?php
                      if(isset($_REQUEST['error_no']) && $_REQUEST['error_no']=='7')
                      {
                          ?>
                          <div class="form-login-error" style="display:block;">
                              <h3>Invalid login</h3>
                              <p><?php echo $errors[7];?></p>
                          </div>
                          <?php
                      }
                      ?>
        
                    <form method="post" action="loginuser.php" role="form" onsubmit="return check_a();">
                        
                        <div class="form-group">
                            
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-user"></i>
                                </div>
                                
                                <input type="text" class="form-control" name="adminemail" id="adminemail" placeholder="AdminEmail" autocomplete="off" />
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-key"></i>
                                </div>
                                
                                <input type="password" class="form-control" name="adminpass" id="adminpass" placeholder="Password" autocomplete="off" />
                            </div>
                        
                        </div>
                        
                        <div class="form-group">
                        <input type="hidden" name="role" value="1" />
                            <button type="submit" class="btn btn-primary btn-block btn-login">
                                <i class="entypo-login"></i>
                                Login In
                            </button>
                        </div>
        
                    </form>
        
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
	
	if(document.getElementById("buyerpass") && document.getElementById("buyerpass").value.search(/\S/)==-1)
	{
		 $("#buyerpass").parent(".input-group").addClass("validate-has-error");
		 return false;
	}
	else
	{
		$("#buyerpass").parent(".input-group").removeClass("validate-has-error");
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
	
	if(document.getElementById("sellerpass") && document.getElementById("sellerpass").value.search(/\S/)==-1)
	{
		 $("#sellerpass").parent(".input-group").addClass("validate-has-error");
		 return false;
	}
	else
	{
		$("#sellerpass").parent(".input-group").removeClass("validate-has-error");
	}

}

function check_a(){

	
	if(document.getElementById("adminname") && document.getElementById("adminname").value.search(/\S/)==-1)
	{
		 $("#adminname").parent(".input-group").addClass("validate-has-error");
		 return false;
	}
	
	if(document.getElementById("adminpass") && document.getElementById("adminpass").value.search(/\S/)==-1)
	{
		 $("#adminpass").parent(".input-group").addClass("validate-has-error");
		 return false;
	}
	else
	{
		$("#adminpass").parent(".input-group").removeClass("validate-has-error");
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