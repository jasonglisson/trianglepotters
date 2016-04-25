<?php
/**
 * Template Name: Homepage
 *
 * @package WordPress
 * @subpackage Cornerstone
 * @since Cornerstone 2.3.2
 */

get_header(); ?>
	<div class="" id="" style="background-color:#ddd;">
		<div class="row" id="home-top-section">
			<div id="container">
			<?php $x=1; $y=1;
					query_posts(array('post_type' => 'member')); while (have_posts()) { the_post(); 
					
				// check if the repeater field has rows of data
					if( have_rows('gallery_images') ):
					 	
					 	// loop through the rows of data
					    while ( have_rows('gallery_images') ) : the_row();
					 
					        // display a sub field value
					        ?><div class="fwrap fimage-wrapper<?php echo $y; $y++;?>"><a href='<?php the_permalink() ?>' rel="bookmark"><img src="<?php the_sub_field('image');?>" class="front-image item fimage<?php 
						        
								    echo $x;
								    $x++;

					        ?> " /></a></div> <?php
					 
					    endwhile;
					 
					else :
				 
				    // no rows found
				 
				endif;
				 
				?>
		    <?php } ?>
		    </div>
		</div>
	</div>

	<div class="" id="" style="background-color:#666;">
		<div id="home-middle-section" class="row">
			test of middle section
		</div>	
	</div>


<?php get_footer(); ?>