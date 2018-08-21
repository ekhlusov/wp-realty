<?php
/**
 * Template Name: Home Page
 * @package understrap
 */
get_header();

while ( have_posts() ) : the_post();
    get_template_part( 'loop-templates/content', 'home' );
endwhile;

get_footer();
