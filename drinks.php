<?php include("header.html") ?>

<style type="text/css">
	
	body { background:url("css3_tabbed_nav/images/black&white1.jpg") no-repeat center center fixed; ; font: 14px Georgia, serif;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;
 	}

</style>


	<section class="menu_categories">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">

			<div class="accordion" id='wine-accordion'>
			    <div class="accordion-section">
			        <a class="accordion-section-title" id="accordian-section-red" href="#accordion-1">Red</a>

			         
			        <div id="accordion-1" class="accordion-section-content">
	
		            	<div class="row">
		            		<div class="col-md-1"></div>
			            		<div class="col-md-10">
		            			<div class="menu">
		            					<?php 

							$string = file_get_contents("wine.json");
							$menu = json_decode($string, true);

							$variety = "red";

							if($menu['red']){
								foreach($menu['red']['wine'] as $wine){
										echo "<ul>";
											echo "<li>";
											echo "<hr />";
												echo "<div class='item_info'>";
													echo "<h3 class='item_name'>" .$wine['heading']."</h3>";
													echo "<p class='item_desc wine'>".$wine['description']."</p>";
														echo "<p class='wine-cost'>";
														if(isset($wine['cost-glass'])){
															echo "<span id='cost-glass'>glass: $" . $wine['cost-glass'] . "</span>";
														}	
														if(isset($wine['cost-half'])){
															echo "<span id='cost-half'>1/2: $" . $wine['cost-glass'] . "</span>";
														}
														if(isset($wine['cost-bottle'])){
															echo "<span id='cost-bottle'>bottle: $" . $wine['cost-bottle'] . "</span>";
														}
														echo "</p>";
												
												echo "</div>";
													}
												
											echo "</li>";
										echo "<ul/>";
										}
										echo "<hr />";

							?>
								</div>
		            		</div>
            		  		
		            		<div class="col-md-1"></div>
		            	</div>        
					</div><!--end .accordion-section-content-->
			    </div><!--end .accordion-section-->
			    			    <div class="accordion-section">
			        <a class="accordion-section-title" id="accordian-section-white"href="#accordion-2">White</a>

			         
			        <div id="accordion-2" class="accordion-section-content">
	
		            	<div class="row">
		            		<div class="col-md-1"></div>
			            		<div class="col-md-10">
		            			<div class="menu">
		            			<?php 

							$string = file_get_contents("wine.json");
							$menu = json_decode($string, true);

							$variety = "white";

							if($menu['white']){
								foreach($menu['white']['wine'] as $wine){
										echo "<ul>";
											echo "<li>";
											echo "<hr />";
												echo "<div class='item_info'>";
													echo "<h3 class='item_name'>" .$wine['heading']."</h3>";
													echo "<p class='item_desc wine'>".$wine['description']."</p>";
														echo "<p class='wine-cost'>";
														if(isset($wine['cost-glass'])){
															echo "<span id='cost-glass'>glass: $" . $wine['cost-glass'] . "</span>";
														}	
														if(isset($wine['cost-half'])){
															echo "<span id='cost-half'>1/2: $" . $wine['cost-glass'] . "</span>";
														}
														if(isset($wine['cost-bottle'])){
															echo "<span id='cost-bottle'>bottle: $" . $wine['cost-bottle'] . "</span>";
														}
														echo "</p>";
												
												echo "</div>";
													}
												
											echo "</li>";
										echo "<ul/>";
										}
										echo "<hr />";

							?>
								</div>
		            		</div>
            		  		
		            		<div class="col-md-1"></div>
		            	</div>        
					</div><!--end .accordion-section-content-->
			    </div><!--end .accordion-section-->

			    <div class="accordion-section">
			        <a class="accordion-section-title" id="accordian-section-sparkling" href="#accordion-3">Sparkling</a>

			         
			        <div id="accordion-3" class="accordion-section-content">
	
		            	<div class="row">
		            		<div class="col-md-1"></div>
			            		<div class="col-md-10">
		            			<div class="menu">
		            			<?php 

							$string = file_get_contents("wine.json");
							$menu = json_decode($string, true);

							$variety = "sparkling";

							if($menu['sparkling']){
								foreach($menu['sparkling']['wine'] as $wine){
										echo "<ul>";
											echo "<li>";
											echo "<hr />";
												echo "<div class='item_info'>";
													echo "<h3 class='item_name'>" .$wine['heading']."</h3>";
													echo "<p class='item_desc wine'>".$wine['description']."</p>";
														echo "<p class='wine-cost'>";
														if(isset($wine['cost-glass'])){
															echo "<span id='cost-glass'>glass: $" . $wine['cost-glass'] . "</span>";
														}	
														if(isset($wine['cost-half'])){
															echo "<span id='cost-half'>1/2: $" . $wine['cost-glass'] . "</span>";
														}
														if(isset($wine['cost-bottle'])){
															echo "<span id='cost-bottle'>bottle: $" . $wine['cost-bottle'] . "</span>";
														}
														echo "</p>";
												
												echo "</div>";
													}
												
											echo "</li>";
										echo "<ul/>";
										}
										echo "<hr />";

							?>
								</div>
		            		</div>
            		  		
		            		<div class="col-md-1"></div>
		            	</div>        
					</div><!--end .accordion-section-content-->
			    </div><!--end .accordion-section-->
			    <div class="accordion-section">
			        <a class="accordion-section-title" id="accordian-section-rose" href="#accordion-4">Rosé</a>

			         
			        <div id="accordion-4" class="accordion-section-content">
	
		            	<div class="row">
		            		<div class="col-md-1"></div>
			            		<div class="col-md-10">
		            			<div class="menu">
		            				<?php 

							$string = file_get_contents("wine.json");
							$menu = json_decode($string, true);

							$variety = "rose";

							if($menu['rose']){
								foreach($menu['rose']['wine'] as $wine){
										echo "<ul>";
											echo "<li>";
											echo "<hr />";
												echo "<div class='item_info'>";
													echo "<h3 class='item_name'>" .$wine['heading']."</h3>";
													echo "<p class='item_desc wine'>".$wine['description']."</p>";
														echo "<p class='wine-cost'>";
														if(isset($wine['cost-glass'])){
															echo "<span id='cost-glass'>glass: $" . $wine['cost-glass'] . "</span>";
														}	
														if(isset($wine['cost-half'])){
															echo "<span id='cost-half'>1/2: $" . $wine['cost-glass'] . "</span>";
														}
														if(isset($wine['cost-bottle'])){
															echo "<span id='cost-bottle'>bottle: $" . $wine['cost-bottle'] . "</span>";
														}
														echo "</p>";
												
												echo "</div>";
													}
												
											echo "</li>";
										echo "<ul/>";
										}
										echo "<hr />";

							?>
								</div>
		            		</div>
            		  		
		            		<div class="col-md-2"></div>
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