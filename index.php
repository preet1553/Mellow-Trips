<?php
// Function definitions
include('function.php');
?>
<?php include('top.php'); ?>

<!-- Hero Slider -->
<?php include('slider.php'); ?>

<!-- About Section -->
<section class="section" id="section-2">
	<div class="container text-center">
		<div class="section-title">
			<h3>About Us</h3>
			<span></span>
		</div>

		<div class="card-grid">
			<div class="feature-card">
				<span class="feature-icon">👁️</span>
				<h4>Our Vision</h4>
				<p>Tourism which is ethical, fair and a positive experience for both travellers and the people and
					places they visit.</p>
			</div>
			<div class="feature-card">
				<span class="feature-icon">🎯</span>
				<h4>Our Mission</h4>
				<p>To ensure tourism always benefits local people by challenging bad practice and promoting better
					tourism.</p>
			</div>
			<div class="feature-card">
				<span class="feature-icon">🛡️</span>
				<h4>Safety Information</h4>
				<p>Vacation is a time to relax in safe surroundings. For emergency aid of any kind, call 911 from any
					phone.</p>
				<div style="margin-top: 1rem;"><a href="aboutus.php" class="btn">Read More</a></div>
			</div>
		</div>
	</div>
</section>

<!-- Gallery Section -->
<section class="section" id="section-3" style="background-color: var(--white);">
	<div class="container text-center">
		<div class="section-title">
			<h3>Gallery</h3>
			<span></span>
		</div>

		<!-- Filter controls (can remain if compatible with mixitup, styling updated) -->
		<ul id="filters" class="clearfix">
			<li><span class="filter active btn" data-filter="all">ALL</span></li>
			<li><span class="filter btn" data-filter=".app">Domestic</span></li>
			<li><span class="filter btn" data-filter=".card">Foreign</span></li>
			<li><span class="filter btn" data-filter=".icon">Short Tours</span></li>
			<li><span class="filter btn" data-filter=".fun">Long Tours</span></li>
		</ul>

		<div id="portfoliolist" class="card-grid" style="margin-top: 2rem;">
			<!-- Gallery Items (Static for now, matching original logic) -->
			<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; width: 100%;">
				<div class="portfolio-wrapper">
					<img src="images/t1.jpg" alt="" class="img-responsive" />
				</div>
			</div>
			<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; width: 100%;">
				<div class="portfolio-wrapper">
					<img src="images/t2.jpg" alt="" class="img-responsive" />
				</div>
			</div>
			<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; width: 100%;">
				<div class="portfolio-wrapper">
					<img src="images/t3.jpg" alt="" class="img-responsive" />
				</div>
			</div>
			<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; width: 100%;">
				<div class="portfolio-wrapper">
					<img src="images/t4.jpg" alt="" class="img-responsive" />
				</div>
			</div>
			<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; width: 100%;">
				<div class="portfolio-wrapper">
					<img src="images/t5.jpg" alt="" class="img-responsive" />
				</div>
			</div>
			<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; width: 100%;">
				<div class="portfolio-wrapper">
					<img src="images/t6.jpg" alt="" class="img-responsive" />
				</div>
			</div>
			<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; width: 100%;">
				<div class="portfolio-wrapper">
					<img src="images/t7.jpg" alt="" class="img-responsive" />
				</div>
			</div>
			<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; width: 100%;">
				<div class="portfolio-wrapper">
					<img src="images/t8.jpg" alt="" class="img-responsive" />
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Advertisements Section -->
<section class="section" id="section-4">
	<div class="container text-center">
		<div class="section-title">
			<h3>Advertisements</h3>
			<span></span>
		</div>
		<p style="max-width: 800px; margin: 0 auto 2rem;">Mellow Trips guides are expensive, so first decide what you
			want to do...</p>

		<div class="card-grid">
			<?php
			// Database connection assumed from include('function.php') or similar
			// Re-using the logic from original file but cleaner
			$s = "select * from advertisement";
			$result = mysqli_query($cn, $s);
			while ($data = mysqli_fetch_array($result)) {
				?>
				<div class="feature-card">
					<img src="Admin1/addverimages/<?php echo $data[3]; ?>"
						style="width:100%; height: 200px; object-fit: cover;">
					<h4 style="margin-top: 1rem;"><?php echo $data[2]; ?></h4>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</section>

<!-- Contact Section -->
<section class="section" id="section-5" style="background-color: var(--white);">
	<div class="container">
		<div class="section-title text-center">
			<h3>Contact Us</h3>
			<span></span>
			<p>Plan Your Trip? Our travel experts can help you book now!</p>
		</div>

		<div class="card-grid" style="grid-template-columns: 1fr 1fr; align-items: start;">
			<div class="feature-card text-left" style="text-align: left;">
				<h4>Mellow Trips HQ</h4>
				<p><strong>Phone:</strong> (+91) 9409270312</p>
				<p><strong>Email:</strong> mellotrips5@gmail.com</p>
				<p style="margin-top: 1rem;">NEED HELP BOOKING PACKAGE? For fantastic suggestions you may also call our
					travel expert.</p>
			</div>

			<div class="feature-card">
				<?php
				if (isset($_POST["sbmt"])) {
					$cn = makeconnection();
					$s = "insert into contactus(Name,Phno,Email,Message) values('" . $_POST["t1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "')";
					mysqli_query($cn, $s);
					mysqli_close($cn);
					echo "<script>alert('Record Save');</script>";
				}
				?>
				<form method="post" style="display: flex; flex-direction: column; gap: 1rem;">
					<input type="text" name="t1" placeholder="Your Name" required class="form-control"
						style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
					<input type="text" name="t2" placeholder="Contact No" required pattern="[0-9]{10,12}"
						class="form-control" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
					<input type="email" name="t3" placeholder="Email" required class="form-control"
						style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
					<textarea name="t4" placeholder="Message..." required class="form-control"
						style="padding: 10px; border: 1px solid #ccc; border-radius: 4px; min-height: 100px;"></textarea>
					<input type="submit" value="Send Message" name="sbmt" class="btn">
				</form>
			</div>
		</div>
	</div>
</section>

<?php include('bottom.php'); ?>

<!-- Local script for gallery if needed, or move to main js file -->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
	$(function () {
		$('#portfoliolist').mixitup({
			targetSelector: '.portfolio',
			filterSelector: '.filter',
			effects: ['fade'],
			easing: 'snap'
		});
	});

	// Smooth scrolling link logic if not already in bottom.php or main js
	$('a[href^="#"]').on('click', function (event) {
		var target = $(this.getAttribute('href'));
		if (target.length) {
			event.preventDefault();
			$('html, body').stop().animate({
				scrollTop: target.offset().top - 100
			}, 1000);
		}
	});
</script>
</body>

</html>