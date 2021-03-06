<?php 
	include 'header.php';
	include 'sidebar.php';
	include 'config.php';
?>	
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome John</h2>
			<p id="page-intro">What would you like to do?</p>
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Products</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Manage</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">Add</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<!--<div class="notification attention png_bg">
							<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
							</div>
						</div>-->
						
						<table>
							
							<thead>
								<tr>
								   <th>Product Id</th>
								   <th>Name</th>
								   <th>Price</th>
								   <th>Image</th>
								   <th>Category</th>
								   <th>Discription</th>
								   <th>Action</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="7">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
										
										<div class="pagination">
											<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
											<a href="#" class="number" title="1">1</a>
											<a href="#" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
								<?php
								$sql = "SELECT * FROM products";
								$result = $c->query($sql);
								
								if ($result->num_rows > 0) {
								  while($row = $result->fetch_assoc()) {
									echo '<tr>
									<td>'.$row["product_id"].'</td>
									<input type="hidden" name="id" value='.$row["product_id"].'>
									<td>'.$row["name"].'</td>
									<td>'.$row["price"].'</td>
									<td><img src=resources/images/'.$row["image"].' width="50" height="50"></td>
									<td>'.$row["category"].'</td>
									<td>'.$row["discription"].'</td>
									<td>
										<!-- Icons -->
										 <a href="#" title="Edit"  class="edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a href="#" title="Delete" data-id='.$row["product_id"].' class="delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
									</td>
								</tr>';
									
								  }
								} else {
								  echo "0 results";
								}
								$c->close();
								?>
							</tbody>	
						</table>
						<!--<script>
							$(document).ready(function(){
								$('.delete').click(function(){
									var id=$(this).data(id);
									console.log(id);
									$.ajax({
											method: "POST",
											url: "delete.php",
											data: {pid: id  }
											})
											.done(function( msg ) {
												alert( "Data Saved: " + msg );
											});
								});
							});
						</script>-->
						
					</div> <!-- End #tab1 -->
					
					<div class="tab-content" id="tab2">
					
						<form action="add_product.php" method="post" enctype="multipart/form-data">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>Product Name</label>
										<input class="text-input small-input" type="text" id="small-input" name="name" required/> <!--<span class="input-notification success png_bg">Successful message</span>  Classes for input-notification: success, error, information, attention -->
										<br />
								</p>
								
								<p>
									<label>Price</label>
									<input class="text-input small-input " type="text" id="small-input" name="price" required /> <!--<span class="input-notification error png_bg">Error message</span>-->
								</p>
								
								<p>
									<label>Image</label>
									<input  type="file"  name="image"/>
								</p>
								
								<p>
									<label>Tags</label>
									<input type="checkbox" name="tag[]"  value="Fashion"/> Fashion <input type="checkbox" name="tag[]"  value="E-commerce"/> E-commerce <input type="checkbox" name="tag[]"  value="Shop"/> Shop <input type="checkbox" name="tag[]"  value="Hand Bag"/> Hand Bag <input type="checkbox" name="tag[]"  value="Laptop"/> Laptop <input type="checkbox" name="tag[]"  value="HeadPhone"/> HeadPhone
								</p>
								
								<p>
									<label>Category</label>              
									<select name="category" class="small-input">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Kids">Kids</option>
									</select> 
								</p>
								
								<p>
									<label>Description</label>
									<textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15" required></textarea>
								</p>
								
								<p>
									<input class="button" type="submit" value="Submit" name="submit"/>
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<div class="clear"></div>
			
			
			<!-- Start Notifications -->
			
			<!--<div class="notification attention png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Attention notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero. 
				</div>
			</div>
			
			<div class="notification information png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Information notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			
			<div class="notification success png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Success notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>
			
			<div class="notification error png_bg">
				<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
				<div>
					Error notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
				</div>
			</div>-->
			
			<!-- End Notifications -->
			<?php include 'footer.php';?>
