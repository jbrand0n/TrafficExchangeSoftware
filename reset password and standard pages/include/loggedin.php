<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
	<div class="sidebar-menu">
		
			
		<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="index.html">
					<img src="assets/images/logo@2x.png" width="120" alt="" />
				</a>
			</div>
			
						<!-- logo collapse icon -->
						
			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
									
			
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
		</header>
				
		
		
				
		
				
		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<!-- Search Bar -->
			<li id="search">
				<form method="get" action="">
					<input type="text" name="q" class="search-input" placeholder="Search something..."/>
					<button type="submit">
						<i class="entypo-search"></i>
					</button>
				</form>
			</li>
            
            <?php 
					
			if($login_status_r==1)
			{
				?>
				
					<li class="active opened active">
                        <a href="index_b.php">
                            <i class="entypo-gauge"></i>
                            <span>Dashboard</span>
                        </a>
                        <ul>
                        	<li>
                                <a href="myaccount.php">
                                    <span>My Account</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="buyers.php">
                                    <span>Buyers</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="sellers.php">
                                    <span>Sellers</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="quarantined.php">
                                    <span>Quarantined Traffic</span>
                                </a>
                            </li>

                        </ul>
                    </li>
				
				<?php
			}
			else if($login_status_r==2)
			{
				?>
					<li class="active opened active">
                        <a href="index_b.php">
                            <i class="entypo-gauge"></i>
                            <span>Dashboard</span>
                        </a>
                        <ul>
                        
                            <li class="active">
                                <a href="myaccount.php">
                                    <span>My Account</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="mycompaigns.php">
                                    <span>My Campaigns</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="mycommissions.php">
                                    <span>My Commissions</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="nonustraffic.php">
                                    <span>Non-US Traffic</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="quarantined.php">
                                    <span>Quarantined Traffic</span>
                                </a>
                            </li>
        
                        </ul>
                    </li>
				
				<?php
			}
			else if($login_status_r==3)
			{
				?>
                
                    <li class="active opened active">
                        <a href="index_b.php">
                            <i class="entypo-gauge"></i>
                            <span>Dashboard</span>
                        </a>
                        <ul>
                        
                        	<li>
                                <a href="myaccount.php">
                                    <span>My Account</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="placeorder.php">
                                    <span>Place an order</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="">
                                    <i class="entypo-star-empty"></i>
                                    <span>Campaigns</span>
                                </a>
                                <ul>
                                	<li>
                                        <a href="activecampains.php">
                                            <span>Active Campaigns</span>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="finishedcampains.php">
                                            <span>Finished Campaigns</span>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="activecampains.php">
                                            <span>Queued Campaigns</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="archivedsubid.php">
                                    <span>Archive SubID</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="mycommission.php">
                                    <span>My Commission</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="foreignredirect.php">
                                    <span>Foreign Redirect</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="placeorder.php">
                                    <span>Place an order</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="quarantined.php">
                                    <span>Quarantined Traffic</span>
                                </a>
                            </li>
        
                        </ul>
                    </li>

				<?php
			}
			
			?>
            
			
		</ul>
				
	</div>	
	<div class="main-content">
    
<div class="row">
	
	<!-- Profile Info and Notifications -->
	<div class="col-md-6 col-sm-8 clearfix">
		
        
        <?php 
		if($login_status_r)
		{
		?>
            <ul class="user-info pull-left pull-none-xsm">
            
                <!-- Profile Info -->
                <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
                    
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/images/thumb-1@2x.png" alt="" class="img-circle" style="visibility: hidden; width: 2px; height: 44px;" />
                        <?php echo $row_u['firstname']." ".$row_u['lastname'];?>
                    </a>

                </li>
            
            </ul>
		<?php
		}
		?>
	
	</div>
	
	
	<!-- Raw Links -->
	<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
		<ul class="list-inline links-list pull-right">
        
        	  <?php
			
			  if($login_status_r)
			  {
			  ?>

                  <li>
                      <a href="logoutuser.php">
                          Log Out <i class="entypo-logout right"></i>
                      </a>
                  </li>
                  
			  <?php
			  }
			  else
			  {
			  ?>
              <li>
                  <a href="login.php">
                      Log In <i class="entypo-login right"></i>
                  </a>
              </li>
			  <?php
			  }
			  ?>

		</ul>
		
	</div>
	
</div>

<hr />