<?php

/**
 * Advocare Homepage
 *
   Template Name:  Home Page
 *
 * @file           homepage.php
 * @package        Advocare 
 * @author         Jesse Chase 
 * @copyright      Bozeman Interactive
 */

get_header(); ?>
    <div id="main">
    
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
    
<?php get_footer(); ?>
