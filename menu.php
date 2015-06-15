<?php 
include("header.html") 

?>

	<section class="menu_categories">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">

			<div class="accordion">
			    <div class="accordion-section">
			        <a class="accordion-section-title accordian-section-soups" href="#accordion-1">Soups and Salads </a>

			         
			        <div id="accordion-1" class="accordion-section-content">

		            	<div class="row">
		            		<div class="col-md-1"></div>	
		            	<div class="col-md-10">
		            	<h2 class="course_title center">Soups and Salads</h2>
            				<h4 class="time-avail center">All Day Every Day</h4>
		            	</div>
		            	<div class="col-md-1"></div>	
		            	</div>	
		            	<div class="row">
		            		<div class="col-md-1"></div>
			            		<div class="col-md-5">
		            			<div class="menu">
		            			<?php 

		            				$string = file_get_contents("menu.json");
		            				$menu = json_decode($string, true);

		            				$course = "soupsalads";

	            					echo "<ul>";
									foreach ($menu[$course]['menu_item'] as $item) {
										echo "<li>";
											echo "<div class='item_info'>";
												echo "<h3 class='item_name'>" .$item['title']."</h3>";
												echo "<p class='item_desc'>".$item['description']."</p>";
												echo "<h4 class='price'>".$item['cost']."</h4>";

												echo "<hr />";
											echo "</div>";
										echo "</li>";
									}
									echo "<ul/>";
		            				?>
								</div>
		            		</div>
            		  		<div class="col-md-5">
		            			<div class="menu">
		            			<?php 

		            				$string = file_get_contents("menu.json");
		            				$menu = json_decode($string, true);

		            				$course = "soupsalads";

	            					echo "<ul>";
									foreach ($menu[$course]['menu_item2'] as $item) {
										echo "<li>";
											echo "<div class='item_info'>";
												echo "<h3 class='item_name'>" .$item['title']."</h3>";
												echo "<p class='item_desc'>".$item['description']."</p>";
												echo "<h4 class='price'>".$item['cost']."</h4>";

												echo "<hr />";
											echo "</div>";
										echo "</li>";
									}
									echo "<ul/>";
		            				?>
								</div>
		            		</div>
		            		<div class="col-md-1"></div>
		            	</div>        
					</div><!--end .accordion-section-content-->
			    </div><!--end .accordion-section-->

			    <div class="accordion-section">
			        <a class="accordion-section-title accordian-section-appys" href="#accordion-2">Appetizers</a>
			         
			        <div id="accordion-2" class="accordion-section-content">
			            <div class="row">
		            		<div class="col-md-1"></div>	
		            	<div class="col-md-10">
		            	<h2 class="course_title center">Appetizers</h2>
            				<h4 class="time-avail center">All Day Every Day*</h4>
		            	</div>
		            	<div class="col-md-1"></div>	
		            	</div>
		            		<div class="row">
		            		<div class="col-md-1"></div>
		            		<div class="col-md-5">
		            			<div class="menu">
		            			<?php 

		            				$string = file_get_contents("menu.json");
		            				$menu = json_decode($string, true);

		            				$course = "appetizers";

	            					echo "<ul>";
									foreach ($menu[$course]['menu_item'] as $item) {
										echo "<li>";
											echo "<div class='item_info'>";
												echo "<h3 class='item_name'>" .$item['title']."</h3>";
												echo "<p class='item_desc'>".$item['description']."</p>";
												echo "<h4 class='price'>".$item['cost']."</h4>";

												echo "<hr />";
											echo "</div>";
										echo "</li>";
									}
									echo "<ul/>";
		            				?>
								</div>
		            		</div>
            		  		<div class="col-md-5">
		            			<div class="menu">
		            			<?php 

		            				$string = file_get_contents("menu.json");
		            				$menu = json_decode($string, true);

		            				$course = "appetizers";

	            					echo "<ul>";
									foreach ($menu[$course]['menu_item2'] as $item) {
										echo "<li>";
											echo "<div class='item_info'>";
												echo "<h3 class='item_name'>" .$item['title']."</h3>";
												echo "<p class='item_desc'>".$item['description']."</p>";
												echo "<h4 class='price'>".$item['cost']."</h4>";

												echo "<hr />";
											echo "</div>";
										echo "</li>";
									}
									echo "<ul/>";
		            				?>
								</div>
		            		</div>
		            		<div class="col-md-1"></div>
		            	</div>        
		            	
			        </div><!--end .accordion-section-content-->
			    </div><!--end .accordion-section-->
			    <div class="accordion-section">
			        <a class="accordion-section-title accordian-section-lunch" href="#accordion-3">Lunch</a>
			         
			        <div id="accordion-3" class="accordion-section-content">
			           <div class="row">
			           			
	            				
		            		<div class="row">
		            		<div class="col-md-1"></div>
		            		<div class="menu_desc col-md-10">
	            				<h2 class="course_title center pad underlined">Lunch</h2>
            				<h4 class="time-avail center">Daily 11am - 4:30pm</h4>
	            				<h5 class='menu_details'>All burgers, paninis, and tacos are served with your choice of sweet-potato fries, hand-cut fries, soup of the day or house salad (salad contains nuts). </h5>
			           			<h5 class='menu_details'> Delicious Homemade Salad Dressings: Spicy Stone-ground Honey Mustard Vinagrette, Champagne Vinagrette, Asian Vinagrette, Butterminl Pepercorn Ranch, or Lemon Yoghurt. </h5>
	            				<h5 class='menu_details'>Upgrade your side: Roasted Corn and Smoked Salmon Chowder $1, Grilled Romain $4, Grilled Greek $4.</h5>
	            				
            				
		            			<div class="col-md-6">
			            			<div class="menu">

			            				<h2 class="course_title">Burgers</h2>
			            				<p>All burgers served on a kaiser bun with lettuce, tomato, raw onion and a pickle.</p>
			            			     <?php 

			            				$string = file_get_contents("menu.json");
			            				$menu = json_decode($string, true);

			            				$course = "lunch";

			            				if($menu[$course]['add-ons']){
											echo "<ul>";
											echo "<li>";
											echo "<div class='item_info sub_menu'>";
				            				echo "<h3 class='item_name'>Burger Toppings</h3>";

				            				foreach ($menu[$course]['add-ons'] as $addon) {
												echo "<h4 class='item_desc sub'>" .$addon['item']."</h4>";
												}
				            				echo "</div>";
				            				echo "</li>";
				            				echo "</ul";
			            				}

		            					echo "<ul>";
										foreach ($menu[$course]['menu_item'] as $item) {
											echo "<li>";
												echo "<div class='item_info'>";
													echo "<h3 class='item_name'>" .$item['title']."</h3>";
													echo "<p class='item_desc'>".$item['description']."</p>";
													echo "<h4 class='price'>".$item['cost']."</h4>";
													echo "<hr />";
												echo "</div>";
												
											echo "</li>";
										}
										echo "<ul/>";

			

			            				?>
			            				<h2 class="course_title">Pasta</h2>
			            				<p>Served with a slice of fresh Rosemarry focaccia.</p>
            			     			<?php 

			            				$string = file_get_contents("menu.json");
			            				$menu = json_decode($string, true);

			            				$course = "pasta";

		            					echo "<ul>";
										foreach ($menu[$course]['menu_item'] as $item) {
											echo "<li>";
												echo "<div class='item_info'>";
													echo "<h3 class='item_name'>" .$item['title']."</h3>";
													echo "<p class='item_desc'>".$item['description']."</p>";
													echo "<h4 class='price'>".$item['cost']."</h4>";
													echo "<hr />";
												echo "</div>";
												
											echo "</li>";
										}
										echo "<ul/>";
			            				?>
									</div>
								</div>
								<div class="col-md-6">
				    			<div class="menu">

			            				<h2 class="course_title">Panini Press Sandwiches</h2>
			            				<p>Served on fresh Rosemary focaccia unless otherwise specified.</p>
			            			     <?php 

			            				$string = file_get_contents("menu.json");
			            				$menu = json_decode($string, true);

			            				$course = "paninis";

		            					echo "<ul>";
										foreach ($menu[$course]['menu_item'] as $item) {
											echo "<li>";
												echo "<div class='item_info'>";
													echo "<h3 class='item_name'>" .$item['title']."</h3>";
													echo "<p class='item_desc'>".$item['description']."</p>";
													echo "<h4 class='price'>".$item['cost']."</h4>";
													echo "<hr />";
												echo "</div>";
												
											echo "</li>";
										}
										echo "<ul/>";

			

			            				?>
									</div>
			            			<div class="menu">

			            				<h2 class="course_title">Tacos</h2>
			            				<p>Served on homemade flour tortillias. Gluten free corn tortillias available.</p>
            			     			<?php 

			            				$string = file_get_contents("menu.json");
			            				$menu = json_decode($string, true);

			            				$course = "tacos";

		            					echo "<ul>";
										foreach ($menu[$course]['menu_item'] as $item) {
											echo "<li>";
												echo "<div class='item_info'>";
													echo "<h3 class='item_name'>" .$item['title']."</h3>";
													echo "<p class='item_desc'>".$item['description']."</p>";
													echo "<h4 class='price'>".$item['cost-day']."</h4>";
													echo "<hr />";

												echo "</div>";
											echo "</li>";
										}
										echo "<ul/>";
			            				?>

			            				<h2 class="course_title">Pizza</h2>
			            				<p>Served on a homemade thin crust. Gluten free crust available.</p>
            			     			<?php 

			            				$string = file_get_contents("menu.json");
			            				$menu = json_decode($string, true);

			            				$course = "pizza";



		            					echo "<ul>";
										foreach ($menu[$course]['menu_item'] as $item) {
											echo "<li>";
												echo "<div class='item_info'>";
													echo "<h3 class='item_name'>" .$item['title']."</h3>";
													echo "<p class='item_desc'>".$item['description']."</p>";
													echo "<h4 class='price'>".$item['cost']."</h4>";
													echo "<hr />";
												echo "</div>";


											echo "</li>";
										}
										echo "<ul/>";

										if($menu[$course]['add-ons']){
											echo "<ul>";
											echo "<li>";
											echo "<div class='item_info sub_menu'>";
				            				echo "<h3 class='item_name'>Pizza Toppings</h3>";

				            				foreach ($menu[$course]['add-ons'] as $addon) {
												echo "<h4 class='item_desc sub pizza'>" .$addon['item']."</h4>";
												echo "<h4 class='price'>".$addon['cost']."</h4>";
												echo "<hr />";
												}
				            				echo "</div>";
				            				echo "</li>";
				            				echo "</ul";
			            				}

			

			            				?>
			            				</div>
									</div>
								</div>	
		            		</div>
		            		<div class="col-md-1"></div>
		            	</div>        
		            	</div> 
			        </div><!--end .accordion-section-content-->
			    </div><!--end .accordion-section-->
			        <div class="accordion-section">
			        <a class="accordion-section-title accordian-section-dinner" href="#accordion-4">Dinner</a>
			         
			        <div id="accordion-4" class="accordion-section-content">
			           <div class="row">
		            	
	            		<div class="col-md-1"></div>
		            		<div class="menu_desc col-md-10">
	            		<h2 class="course_title center pad underlined">Dinner</h2>
            				<h4 class="time-avail center">Daily 4:30pm - Close</h4>
            				
		            			<div class="col-md-6">
			            			<div class="menu">

			            				<h2 class="course_title">Entrées</h2>
			            				<p>Served with seasonal vegetables and your choice of Dutchess mashed potatoes or a wild rice pilaf.</p>
			            			     <?php 

			            				$string = file_get_contents("menu.json");
			            				$menu = json_decode($string, true);

			            				$course = "dinner";

		            					echo "<ul>";
										foreach ($menu[$course]['menu_item'] as $item) {
											echo "<li>";
												echo "<div class='item_info'>";
													echo "<h3 class='item_name'>" .$item['title']."</h3>";
													echo "<p class='item_desc'>".$item['description']."</p>";
													echo "<h4 class='price'>".$item['cost']."</h4>";
													echo "<hr />";
													
												echo "</div>";
												
											echo "</li>";
											
										}
										echo "<ul/>";

			

			            				?>

			            				<h2 class="course_title">Tacos</h2>
			            				<p>Served on homemade flour tortillias. Gluten free corn tortillias available.</p>
            			     			<?php 

			            				$string = file_get_contents("menu.json");
			            				$menu = json_decode($string, true);

			            				$course = "tacos";

		            					echo "<ul>";
										foreach ($menu[$course]['menu_item'] as $item) {
											echo "<li>";
												echo "<div class='item_info'>";
													echo "<h3 class='item_name'>" .$item['title']."</h3>";
													echo "<p class='item_desc'>".$item['description']."</p>";
													echo "<h4 class='price'>".$item['cost-night']."</h4>";
													echo "<hr />";
												echo "</div>";
												
											echo "</li>";
										}
										echo "<ul/>";
			            				?>
									</div>
								</div>
								<div class="col-md-6">
			            			<div class="menu">
			            				<h2 class="course_title">Pasta</h2>
			            				<p>Served with a slice of fresh Rosemarry focaccia.</p>
            			     			<?php 

			            				$string = file_get_contents("menu.json");
			            				$menu = json_decode($string, true);

			            				$course = "pasta";


		            					echo "<ul>";
										foreach ($menu[$course]['menu_item'] as $item) {
											echo "<li>";
												echo "<div class='item_info'>";
													echo "<h3 class='item_name'>" .$item['title']."</h3>";
													echo "<p class='item_desc'>".$item['description']."</p>";
													echo "<h4 class='price'>".$item['cost']."</h4>";
													echo "<hr />";
												echo "</div>";
												
											echo "</li>";
										}
										echo "<ul/>";
			            				?>

			            				

			            				<h2 class="course_title">Pizza</h2>
			            				<p>Served on a homemade thin crust. Gluten free crust available.</p>
            			     			<?php 

			            				$string = file_get_contents("menu.json");
			            				$menu = json_decode($string, true);

			            				$course = "pizza";



		            					echo "<ul>";
										foreach ($menu[$course]['menu_item'] as $item) {
											echo "<li>";
												echo "<div class='item_info'>";
													echo "<h3 class='item_name'>" .$item['title']."</h3>";
													echo "<p class='item_desc'>".$item['description']."</p>";
													echo "<h4 class='price'>".$item['cost']."</h4>";
													echo "<hr />";
												echo "</div>";
												
											echo "</li>";
										}
										echo "<ul/>";

											if($menu[$course]['add-ons']){
											echo "<ul>";
											echo "<li>";
											echo "<div class='item_info sub_menu'>";
				            				echo "<h3 class='item_name'>Pizza Toppings</h3>";

				            				foreach ($menu[$course]['add-ons'] as $addon) {
												echo "<h4 class='item_desc sub pizza'>" .$addon['item']."</h4>";
												echo "<h4 class='price'>".$addon['cost']."</h4>";
												echo "<hr />";
												}
				            				echo "</div>";
				            				echo "</li>";
				            				echo "</ul";
			            				}

			

			            				?>
			            				</div>
									</div>
								</div>	
		            		</div>
		            		<div class="col-md-1"></div>
		            	</div>        
			        </div><!--end .accordion-section-content-->
			    </div><!--end .accordion-section-->
			            <div class="accordion-section">
			        <a class="accordion-section-title accordian-section-brunch" href="#accordion-5">Brunch</a>
			         
			        <div id="accordion-5" class="accordion-section-content">
			           <div class="row">
		            		
	            		<div class="col-md-1"></div>
		            	<div class="menu_desc col-md-10">
	            		
	            		<h2 class="course_title center pad underlined">Brunch</h2>
            				<h4 class="time-avail center">Sundays 11am - 2pm</h4>
		            			<div class="col-md-6">
			            			<div class="menu">

			            				
			            			     <?php 

			            				$string = file_get_contents("menu.json");
			            				$menu = json_decode($string, true);

			            				$course = "brunch";
			            				echo "<ul>";
			            				foreach($menu[$course]['menu-item'] as $item){
			            					echo "<li>";
			            					echo "<div class='item_info'>";
			            						echo "<h3 class='item_name'>" .$item['title']."</h3>";
												echo "<p class='item_desc'>".$item['description']."</p>";
												if($item['cost']){
													echo "<h4 class='price'>".$item['cost']."</h4>";
													echo "<hr />";
												}
												

			            					echo "</div>";
			            					echo "</li>";
			            				}
			            				echo "</ul>";
			            		
			            		
			            				?>
           				
			            				</div>
									</div>
									<div class="col-md-6">
			            				<div class="menu left">

											<?php

												$string = file_get_contents("menu.json");
					            				$menu = json_decode($string, true);

					            				$course = "brunch";
					            				echo "<ul>";
					            				foreach($menu[$course]['menu-item2'] as $item){
					            					echo "<li>";
					            					echo "<div class='item_info'>";
					            						echo "<h3 class='item_name'>" .$item['title']."</h3>";
														echo "<p class='item_desc'>".$item['description']."</p>";
														if($item['cost']){
															echo "<h4 class='price'>".$item['cost']."</h4>";
															echo "<hr />";
														}
														

					            					echo "</div>";
					            					echo "</li>";
					            				}
					            				echo "</ul>";
			            						if($menu[$course]['add-ons']){
					            					echo "<div class='item_info sub_menu brunch'>";
													echo "<ul>";
													echo "<li>";
													

						            				foreach ($menu[$course]['add-ons'] as $addon) {
														echo "<h4 class='item_desc sub '>" .$addon['item']." <span class='right'>".$addon['cost']."</span></h4>";
														
				
														}
						            				
						            				echo "</li>";
						            				echo "</ul>";
						            				echo "</div>";
					            				}

					            		

											?>
										</div>
	            					</div>

	            					<div class="col-md-12"><h2 class='course_title center pad underlined'>Brunch Sides</h2>
	            					</div>
	            					

			            			<div class="col-md-4">
			            				<div class="menu left">
											<?php 
											if($menu[$course]['brunch-add-ons']){
					            					echo "<div class='item_info sub_menu brunch-adds'>";
					            					
													echo "<ul>";
													
													
													$count = 0;
						            				foreach ($menu[$course]['brunch-add-ons'] as $addon) {
						            					echo "<li>";
						            					

														echo "<h4 class='item_desc sub '>" .$addon['item']." <span class='right'>".$addon['cost']."</span></h4>";
														
														$count ++ ;
														if($count == 4){
															echo "</li></ul>
															</div></div></div><div class='col-md-4'><div class='menu right'><div class='item_info sub_menu brunch-adds'>
															<ul class=''>";
														}
														echo "</li>";
														if($count == 8){
															echo "</li></ul>
															</div></div></div><div class='col-md-4'><div class='menu right'><div class='item_info sub_menu brunch-adds'>
															<ul class=''>";
														}
														echo "</li>";
														}
						            				
						            				
						            				echo "</ul>";
						            				echo "</div>";
					            				}
					            				?>

			            				</div>
									</div>
									<div class="col-md-12"><h2 class='course_title center pad underlined'>Lunch Items</h2>
	            					</div>
	            					
									<div class="col-md-6">
			            				<div class="menu left">
									<?php
    				     			echo "<h2 class='course_title'>Soups and Salads</h2>";

		            				$string = file_get_contents("menu.json");
		            				$menu = json_decode($string, true);

		            				$course = "soupsalads";

	            					echo "<ul>";
									foreach ($menu[$course]['menu_item'] as $item) {
										echo "<li>";
											echo "<div class='item_info'>";
												echo "<h3 class='item_name'>" .$item['title']."</h3>";
												echo "<p class='item_desc'>".$item['description']."</p>";
												echo "<h4 class='price'>".$item['cost']."</h4>";

												echo "<hr />";
											echo "</div>";
										echo "</li>";
									}
								
									foreach ($menu[$course]['menu_item2'] as $item) {
										echo "<li>";
											echo "<div class='item_info'>";
												echo "<h3 class='item_name'>" .$item['title']."</h3>";
												echo "<p class='item_desc'>".$item['description']."</p>";
												echo "<h4 class='price'>".$item['cost']."</h4>";

												echo "<hr />";
											echo "</div>";
										echo "</li>";
									}
			            				echo '<h2 class="course_title">Panini Press Sandwiches</h2>';
			            				echo '<p>Served on fresh Rosemary focaccia unless otherwise specified.</p>';
			            			     

			            				$string = file_get_contents("menu.json");
			            				$menu = json_decode($string, true);

			            				$course = "paninis";

		            					echo "<ul>";
										foreach ($menu[$course]['menu_item'] as $item) {
											echo "<li>";
												echo "<div class='item_info'>";
													echo "<h3 class='item_name'>" .$item['title']."</h3>";
													echo "<p class='item_desc'>".$item['description']."</p>";
													echo "<h4 class='price'>".$item['cost']."</h4>";
													echo "<hr />";
												echo "</div>";
												
											echo "</li>";
										}
										echo "<ul/>";

			


									echo "<ul/>";
		            				?>
			            				</div>
		            				</div>
		            				<div class="col-md-6">
			            				<div class="menu left">
			      							<h2 class="course_title">Burgers</h2>
			            				<p>All burgers served on a kaiser bun with lettuce, tomato, raw onion and a pickle.</p>
			            			     <?php 

			            				$string = file_get_contents("menu.json");
			            				$menu = json_decode($string, true);

			            				$course = "lunch";

			            				if($menu[$course]['add-ons']){
											echo "<ul>";
											echo "<li>";
											echo "<div class='item_info sub_menu burgs'>";
				            				echo "<h3 class='item_name'>Burger Toppings</h3>";

				            				foreach ($menu[$course]['add-ons'] as $addon) {
												echo "<h4 class='item_desc sub'>" .$addon['item']."</h4>";
												}
				            				echo "</div>";
				            				echo "</li>";
				            				echo "</ul";
			            				}

		            					echo "<ul>";
										foreach ($menu[$course]['menu_item'] as $item) {
											echo "<li>";
												echo "<div class='item_info'>";
													echo "<h3 class='item_name'>" .$item['title']."</h3>";
													echo "<p class='item_desc'>".$item['description']."</p>";
													echo "<h4 class='price'>".$item['cost']."</h4>";
													echo "<hr />";
												echo "</div>";
												
											echo "</li>";
										}
										echo "<ul/>";
										?>
			            				</div>	
									</div>	

		            			</div>
		            		<div class="col-md-1"></div>
		            	</div>        
			        </div><!--end .accordion-section-content-->
			    </div><!--end .accordion-section-->

			</div><!--end .accordion-->
		</div>
	</div>

	</section>

		<script>
			$(document).ready(function() {
			    function close_accordion_section() {
			        $('.accordion .accordion-section-title').removeClass('active');
			        $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
			    }
			 
			    $('.accordion-section-title').click(function(e) {
			        // Grab current anchor value
			        var currentAttrValue = $(this).attr('href');

			        if($(e.target).is('.active')) {
			            close_accordion_section();
			        }else {
			            close_accordion_section();
			 
			            // Add active class to section title
			            $(this).addClass('active');
			            // Open up the hidden content panel
			            $('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
			        }
			 
			        e.preventDefault();
			    });
			});
		</script>

	<?php include("footer.html") ?>