<?php include('function.php'); ?>
<?php include('top.php'); ?>
<?php include('slider.php'); ?>

<section class="section" style="min-height: 500px;">
	<div class="container">
		<div class="section-title text-center">
			<h3>Category</h3>
			<span></span>
		</div>

		<div class="card-grid" style="grid-template-columns: 250px 1fr; align-items: start;">
			<!-- Sidebar / Category List -->
			<div class="feature-card text-left" style="padding: 1rem;">
				<h4 style="border-bottom: 2px solid var(--gold-color); padding-bottom: 10px; margin-bottom: 20px;">
					Categories</h4>
				<ul class="xml-category-list">
					<?php
					$s = "select * from category";
					$result = mysqli_query($cn, $s);
					while ($data = mysqli_fetch_array($result)) {
						echo "<li style='margin-bottom:10px; border-bottom:1px solid #eee; padding-bottom:5px;'><a href='subcat.php?catid=$data[0]' style='color:var(--text-dark); display:block;'>$data[1]</a></li>";
					}
					mysqli_close($cn);
					?>
				</ul>
			</div>

			<!-- Content Area -->
			<div class="feature-card text-left">
				<h4 style="color: var(--primary-color);">Welcome to Mellow Trips</h4>
				<p style="text-align: justify; margin-bottom: 20px;">
					Plan and Book Your Perfect Trip. Create your dream holiday. Do what you like. Do what you love.
					What's New? Explore new experiences, attractions, food and wine trends.
					What will you find during your visit to My Tour? Awe-inspiring natural beauty and the dramatic red
					rock landscape of the Colorado National Monument.
				</p>
				<div class="promo-banner"
					style="background: linear-gradient(to right, #0F4C75, #3282B8); color: white; padding: 2rem; border-radius: 8px; position: relative; overflow: hidden;">
					<h3 style="color: white; z-index: 2; position: relative;">HAVE A GOOD TIME</h3>
					<p style="z-index: 2; position: relative;">without spending a dime</p>
					<img src="images/13.jpg"
						style="position: absolute; top:0; right:0; height: 100%; opacity: 0.3; width:auto;">
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('bottom.php'); ?>