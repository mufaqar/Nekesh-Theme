<?php 

/* Template Name: Location  */

get_header(); ?>


<div class="wrapper">
	<div id="location-container">
    	<div class="location-page-heading">
        <?php the_title()?>
        </div>
        <div class="location-area">

        <?php
$args = array(
    'post_type'      => 'locations',
    'posts_per_page' => -1, // or a number like 10
    'post_status'    => 'publish',
    'orderby'        => 'title',
    'order'          => 'ASC',
);

$locations_query = new WP_Query($args);

if ($locations_query->have_posts()) :
    while ($locations_query->have_posts()) : $locations_query->the_post(); ?>
        <div class="single-location">
            	<div class="location-content-area">
                    <div class="location-image">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/location-image-one.jpg" alt="Location Image" /></a>
                    </div><!--location image-->
                    <div class="location-content">
                        <span>Phone : <a href="#"><?php echo get_post_meta($post->ID, "phone", true); ?></a></span>
                        <span>Fax : <a href="#"><?php echo get_field( "fax" ); ?></a></span>
                        <span>Address: (Get Directions!)</span>
                        <span><?php echo get_field( "address" ); ?></span>
                    </div><!--location content-->
                    <div class="clear"></div>
                </div><!--location content area-->
                <div class="location-map">
                	<img src="<?php echo get_field( "map_image" ); ?>" alt="Map" />
                </div><!--location map-->
            </div>
    <?php endwhile;
    wp_reset_postdata();
else :
    echo '<p>No locations found.</p>';
endif;
?>





        	
            
            <div class="clear"></div>
        </div>
    </div>
</div>




<?php get_footer(); ?>