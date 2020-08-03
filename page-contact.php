<?php
// Header ADD
get_header();
?>

<div class="container">
	<div class="page_title">
		<h2>CONTACT US</h2>
	</div>
</div>
<!-- Form  -->
<div class="container container_bg">
	<div class="contact_form_wraper">
		<div class="form_header">
			<p>Feel free to drop us a line below!</p>
		</div>
		<div class="form_body">
			<?php echo do_shortcode("[contact-form-7 id='47' title='Contact Form']") ?>
		</div>
	</div>
</div>

<?php
// Footer Add
get_footer();
?>