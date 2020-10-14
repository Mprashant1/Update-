
		<div id="sidebar">
			<div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			<?php 
				$file=basename($_SERVER['REQUEST_URI']);
				$productItem=array('ManageProduct.php','Categories.php','Tags.php');
				$prod=array('AddUser.php','ManageUser.php');
			?>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="#" title="Edit your profile">John Doe</a>, you have <a href="#messages" rel="modal" title="3 Messages">3 Messages</a><br />
				<br />
				<a href="#" title="View the Site">View the Site</a> | <a href="#" title="Sign Out">Sign Out</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="http://www.google.com/" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Dashboard
					</a>       
				</li>
				
				<li> 
					<a href="#" class="nav-top-item	<?php if(in_array($file,$productItem)): ?>current<?php endif; ?>"> <!-- Add the class "current" to current menu item -->
					Products
					</a>
					<ul>
						<li><a <?php if($file=='ManageProduct.php'): ?>class="current"<?php endif; ?> href="ManageProduct.php">Manage Products</a></li> <!-- Add class "current" to sub menu items also -->
						<li><a <?php if($file=='Tag.php'): ?>class="current"<?php endif; ?>href="Categories.php">Manage Tag</a></li>
						<li><a <?php if($file=='Category.php'): ?>class="current"<?php endif; ?>href="Tags.php">Manage Categories</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item <?php if(in_array($file,$prod)): ?>current<?php endif; ?>">
						Users
					</a>
					<ul>
						<li><a <?php if($file=='AddUser.php'): ?>class="current"<?php endif; ?> href="AddUser.php">Add User</a></li>
						<li><a <?php if($file=='ManageUser.php'): ?>class="current"<?php endif; ?> href="ManageUser.php">Manage Users</a></li>
					</ul>
				</li>

				<li>
					<a href="#" class="nav-top-item <?php if($file=='ManageOrder.php'): ?>current<?php endif; ?>">
						Orders
					</a>
					<ul>
						<li><a <?php if($file=='ManageOrder.php'): ?>class="current"<?php endif; ?>href="ManageOrder.php">Manage Orders</a></li>
					</ul>
				</li>
				
				
				<li>
					<a href="#" class="nav-top-item <?php if($file=='General.php'): ?>current<?php endif; ?>">
						Settings
					</a>
					<ul>
						<li><a <?php if($file=='General.php'): ?>class="current"<?php endif; ?> href="General.php">General</a></li>
					</ul>
				</li>      
				
			</ul> <!-- End #main-nav -->
			
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
				<h3>3 Messages</h3>
			 
				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
				
				<form action="#" method="post">
					
					<h4>New Message</h4>
					
					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>
					
					<fieldset>
					
						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>
						
						<input class="button" type="submit" value="Send" />
						
					</fieldset>
					
				</form>
				
			</div> <!-- End #messages -->
			
		</div></div> <!-- End #sidebar -->