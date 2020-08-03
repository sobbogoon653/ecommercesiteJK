<?php

// Header ADD

    get_header();

?>



<?php
	if(have_posts()){
		while(have_posts()){
			the_post();
			the_content();
		}
	}else{
		echo "Empty Post !!!!";
	}

 ?>













<?php

// Footer Add

    get_footer();

?>