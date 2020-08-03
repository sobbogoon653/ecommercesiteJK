<?php
	// Header Add
 	get_header();
 ?>

<div class="cart_page_body">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-12">
				<h2>Cart items :</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-12">
				<?php echo do_shortcode("[woocommerce_cart]") ?>
			</div>
		</div>
	</div>
</div>



 <?php 
 	// Footer Add
	 get_footer();

  ?>