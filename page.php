<?php

// Header Add

    get_header();



?>

<div class="single_page-body">
	<div class="container single_container">
		<div class="row">
			<div class="col-md-12">
				<?php
					if(have_posts()){
						while(have_posts()){
							the_post();
							the_content();
						}
					}

				 ?>
			</div>
		</div>
	</div>
</div>











<?php

// Footer Add

    get_footer();









?>