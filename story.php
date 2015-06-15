<?php include("header.html") ?>
	
	<section class="story">
			<section class="info">
				<div class="title">
					<h3>Our Story</h3>
					<span class="separator"></span>
				</div>
			</section>
		<div class="container">
			<div class="row">
				<div class="col-md-4"><img src="img/serving.jpg" /></div>
				<div class="col-md-8"><p><em>“…..A hidden gem”,</em> quickly becoming a favourite location by locals and visitors alike. 
					Olive ‘R Twist is a great place to kick back and relax; whether your looking to dine in a 
					casual atmosphere, sample some of our sumptuous martinis (including the favourite Raspberry 
					Lychee) or dining on fabulous fresh food, Oliver Twist is always a welcoming place.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8"><p>People often ask where we got our name from. Well, for those of you who aren’t martini drinkers, 
					when you order a classic martini, it is served with either an olive or twist. But don’t worry,
					if you’re not a martini drinker there is still plenty for you to enjoy. (Minors are welcome, 
					though we do not have high chairs or a children’s menu.)</p></div>
				<div class="col-md-4"><img src="img/martinis.jpg" /></div>
			</div>
			<div class="row">
				<div class="col-md-4"><img src="img/exterior.jpg" /></div>
				<div class="col-md-8"><p>In the summer come relax on one of the best patios in town overlooking quant Cochrane Main Street, 
		 			surrounded by beautiful flowers from our garden. The patio is open from May to September (Alberta 
		 			weather depending). </p></div>
			</div>	
		</div>	
	</section>

		<!--  start awards  -->
	<section class="awards">
		<div class="wrapper">
			<section class="info">
				<div class="title">
					<h3>Awards</h3>
					<span class="separator"></span>
				</div>
			</section>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			    <li data-target="#myCarousel" data-slide-to="3"></li>
			    <li data-target="#myCarousel" data-slide-to="4"></li>
			    <li data-target="#myCarousel" data-slide-to="5"></li>
			    <li data-target="#myCarousel" data-slide-to="6"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="img/awards/bfries.jpg" alt="Best Fries">
			    </div>

			     <div class="item">
			      <img src="img/awards/bpasta.jpg" alt="Best Pasta">
			      </div>


			     <div class="item">
			      <img src="img/awards/bunique.jpg" alt="Most Unique Item">
		    	</div>

			     <div class="item">
			      <img src="img/awards/gbrunch.jpg" alt="Gold Brunch">
			    </div>

			    <div class="item">
			      <img src="img/awards/glunch.jpg" alt="Gold Lunch">
			    </div>

			    <div class="item">
			      <img src="img/awards/gpatio.jpg" alt="Gold Patio">
			    </div>

			    <div class="item">
			      <img src="img/awards/gservice.jpg" alt="Gold Service">
			    </div>



			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</section>



	<script type="text/javascript">

$(document).ready(function() {
    $('#awardscarousel').carousel({
    //options here
    });
});

</script>  

<?php include("footer.html") ?>
