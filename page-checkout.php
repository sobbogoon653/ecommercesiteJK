<?php
// Header Add
	get_header();

 ?>
<div class="checkout_page_body">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-12">
				<?php echo do_shortcode("[woocommerce_checkout]") ?>
			</div>
		</div>
	</div>
</div>



 <?php
 // Footer Add
 	get_footer();
  ?>