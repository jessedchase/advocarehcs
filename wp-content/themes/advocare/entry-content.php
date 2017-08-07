<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?Php
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<?php 
	if (strpos($actual_link,'resources') !== false){ the_excerpt();}
	if (strpos($actual_link,'resources') !== false){echo '<a class="button" href="'.get_permalink( $id ).'">READ MORE</a><br/><br/>';}  
	else{the_content();}
 ?>

<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>