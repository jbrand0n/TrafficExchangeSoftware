<?php 

session_start();

$login_status_r = 0;

if(isset($_SESSION['role']))
{
	if($_SESSION['role']==1)
	{
		 $login_status_r = 1;
	}
	else if($_SESSION['role']==2)
	{
		$login_status_r = 2; 
	}
	else if($_SESSION['role']==3)
	{
		$login_status_r = 3; 
	}
	else
	{

		unset($_SERVER['role']);
		unset($_SERVER['userid']);
		session_destroy();
		?>
        <script type="text/javascript">
			document.location = "index.php";
		</script>
        <?php
		exit();
	}
}

include("include/header.php");

include("include/loggedin.php");

?>

    <script type="text/javascript">
jQuery(document).ready(function($) 
{

	
	$(".monthly-sales").sparkline([1,2,3,5,6,7,2,3,3,4,3,5,7,2,4,3,5,4,5,6,3,2], {
		type: 'bar',
		barColor: '#485671',
		height: '100px',
		barWidth: 20,
		barSpacing: 2
	});	

	
	
});


function getRandomInt(min, max) 
{
	return Math.floor(Math.random() * (max - min + 1)) + min;
}

document.title = 'My Account';

$("#main-menu").find("ul li.active").removeClass("active");
$("#main-menu").find("ul li a span:contains(My Account)").parent().parent().addClass("active");


</script>


<div class="row">
	<div class="col-sm-12">
	
		<div class="panel panel-primary" id="charts_env">
		
			<div class="panel-heading">
				<div class="panel-title">My Account</div>
				
				<div class="panel-options">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#account-details" data-toggle="tab">Account Details</a></li>
						<li class=""><a href="#billing" data-toggle="tab">Billing</a></li>
						<li class=""><a href="#receipts" data-toggle="tab">Receipts</a></li>
					</ul>
				</div>
			</div>
	
			<div class="panel-body">
			
				<div class="tab-content">
				
					<div class="tab-pane active" id="account-details">
                    
                    
                    	<div class="row">
                        
                        	<div class="col-sm-12">
                            
                            	<h3>Basic Information <small class="edit_me"><i class="entypo-pencil"></i></small></h3>
                                
                                <div class="col-sm-12">
                                
                                <form method="post" action="updateuser.php" class="user_edit" onsubmit="return check_reg();">

									<?php
                                    if(isset($_REQUEST['error_no']))
                                    {
                                        ?>
                                        <div class="alert alert-danger" style="display:block;">
                                            <p><?php echo $errors[$_REQUEST['error_no']];?></p>
                                        </div>
                                        <?php
                                    }
									
									if(isset($_REQUEST['success']))
                                    {
                                        ?>
                                        <div class="alert alert-success" style="display:block;">
                                            <p>Your account information is updated successfully.</p>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                
                                
                                	<p><h4><label class="col-sm-2 no-padding">Frist Name : </label>
                                    
                                    <small><?php echo $row_u['firstname'];?></small>
                                    <input type="text" name="fristname" id="firstname" placeholder="FirstName" value="<?php echo $row_u['firstname'];?>" class="form-control"/>
                                    
                                    </h4></p>
                                    
                                    <p><h4><label class="col-sm-2 no-padding">Last Name : </label>
                                    
                                    <small><?php echo $row_u['lastname'];?></small>
                                    <input type="text" name="lastname" id="lastname" placeholder="LastName" value="<?php echo $row_u['lastname'];?>" class="form-control"/>
                                    
                                    </h4></p>
                                    
                                    <p><h4><label class="col-sm-2 no-padding">UserName : </label>
                                    
                                    <small><?php echo $row_u['username'];?></small>
                                    <input type="text" name="username" id="username" placeholder="UserName" value="<?php echo $row_u['username'];?>" class="form-control"/>
                                    
                                    </h4></p>
                                
                                    
                                    <p><h4><label class="col-sm-2 no-padding">Email : </label>
                                    
                                    <small><?php echo $row_u['email'];?></small>
                                    <input type="text" name="email" id="email" placeholder="Email" value="<?php echo $row_u['email'];?>" class="form-control"/>
                                    
                                    </h4></p>
                                    
                                    <p><h4><label class="col-sm-2 no-padding">Password : </label>
                                    
                                    <small><?php echo $row_u['password'];?></small>
                                    <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $row_u['password'];?>" class="form-control"/>
                                    
                                    </h4></p>
                                    
                                    <p class="cpass"><h4><label class="col-sm-2 no-padding">Confirm Password : </label>
                                    
                                    <small><?php echo $row_u['password'];?></small>
                                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirmation Password" class="form-control" value="<?php echo $row_u['password'];?>"/>
                                    
                                    </h4></p>
                                    
                                    <p><h4><label class="col-sm-2 no-padding">Role : </label> <small class="role"><?php if($row_u['role']==1){echo "Admin";}else if($row_u['role']==2){echo "Seller";}else if($row_u['role']==3){echo "Buyer";};?></small></h4></p>
                                    
                                    <input type="hidden" value="<?php echo $row_u['role'];?>" name="role" id="role" />
                                    
                                    <input type="submit" class="btn btn-primary" value="Update" name="submit"/>
                                    
                                    
                                </form>    
                                
                                </div>
                            
                            
                            
                            </div>
                        
                        </div>
                    							
						
					</div>
					
					<div class="tab-pane" id="billing">
                    
                        <div class="row">
        
                            <div class="col-sm-12">
                                
                                <div class="panel panel-primary">
                                    <table class="table table-bordered table-responsive">
                                        <thead>
                                            <tr>
                                                <th class="padding-bottom-none text-center">
                                                    <br />
                                                    <br />
                                                    <span class="monthly-sales"></span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="panel-heading">
                                                    <h4>Monthly Sales</h4>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
    
                        </div>
						
					</div>
					
					<div class="tab-pane" id="receipts">
						
					</div>
					
				</div>
				
			</div>

			
			
		</div>	

	</div>

	
</div>

<script type="text/javascript">

function check_reg(){

	if(document.getElementById("username") && document.getElementById("username").value.search(/\S/)==-1)
	{
		 $("#username").addClass("has-error");
		 return false;
	}
	else
	{
		 $("#username").removeClass("has-error");
	}
	
	if(document.getElementById("password") && document.getElementById("password").value.search(/\S/)==-1)
	{
		 $("#password").addClass("has-error");
		 return false;
	}
	else
	{
		 $("#password").removeClass("has-error");
	}
	
	if(document.getElementById("cpassword") && document.getElementById("cpassword").value.search(/\S/)==-1)
	{
		$("#cpassword").addClass("has-error");
		 return false;
	}
	else
	{
		 $("#cpassword").removeClass("has-error");
	}

	  
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var address = document.getElementById('email').value;
	if(reg.test(address) == false) {
	
	  $("#email").addClass("has-error");
	  return false;
	}
	else
	{
		 $("#email").removeClass("has-error");
	}

}

$(".edit_me").click(function(e) {
	$(".user_edit input,.cpass").fadeIn();
	$(".user_edit small").fadeOut();
	$(".role").fadeIn();
});

</script>

<?php 

include("include/footer.php");

?>