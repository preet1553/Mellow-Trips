<?php include('function.php'); ?>
<?php include('top.php'); ?>
<?php include('slider.php'); ?>

<section class="section">
	<div class="container">
		<div class="section-title text-center">
			<h3>Subcategories</h3>
			<span></span>
		</div>

		<div class="card-grid" style="grid-template-columns: 250px 1fr; align-items: start;">
			<!-- Category Sidebar (Static List for context) -->
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
					?>
				</ul>
			</div>

			<!-- Subcategory Content -->
			<div class="feature-card" style="background: transparent; box-shadow: none; padding: 0;">
				<div class="card-grid" style="grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px;">
					<?php
					$s = "select * from subcategory where Catid='" . $_GET["catid"] . "'";
					$result = mysqli_query($cn, $s);
					$r = mysqli_num_rows($result);

					while ($data = mysqli_fetch_array($result)) {
						?>
						<div class="feature-card" style="padding: 0; overflow: hidden; text-align: center;">
							<div
								style="background-color: var(--secondary-color); color: white; padding: 10px; font-weight: bold;">
								<?php echo $data[1]; ?>
							</div>
							<img src="Admin/Admin/subcatimages/<?php echo $data[3]; ?>"
								style="width: 100%; height: 200px; object-fit: cover;" />
							<div style="padding: 15px;">
								<a href="package.php?subcatid=<?php echo $data[0]; ?>" class="btn"
									style="font-size: 0.9rem;">View Detail</a>
							</div>
						</div>
						<?php
					}
					mysqli_close($cn);
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('bottom.php'); ?>