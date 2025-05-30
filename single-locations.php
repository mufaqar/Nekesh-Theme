<?php get_header(); ?>

For Locations

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
    	<h1><?php the_title(); ?></h1>
    
		
		
		<div class="entry">
           <?php if ( has_post_thumbnail() ) { ?>
    		    <div class="featured-image">
			<?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
    		    </div>
			<?php } ?>		
			<?php the_content(); ?>
            <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
          
			
        </div>
    </div>


	
<?php endwhile; endif; ?>




<?php get_footer(); ?>