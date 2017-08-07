<?php

/**
 * Advocare Inner Pages
 *
   Template Name:  Inner Pages
 *
 * @file           inner-page.php
 * @package        Advocare 
 * @author         Jesse Chase 
 * @copyright      Bozeman Interactive
 */

get_header(); ?>
    <div id="main"> 
            <div id="featuredimg">
                <?php the_post_thumbnail( $size, $attr ); ?> 
            </div>
            <div id="pagecontent">
                <h2><?php the_title();?></h2>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                        endwhile; else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
            <div class="clear"></div>
<?php get_footer(); ?>
