<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Cornerstone
 * @since Cornerstone 1.0
 */

get_header(); ?>

<div class="row">
<?php 
if ( is_singular( 'member' ) ) { ?>
	<div id="" class="site-content large-12 columns">
<?php } else { ?>
	<div id="primary" class="site-content medium-8 columns">
<?php } ?>
		<div id="content" role="main">
		
			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; 

			if ( is_singular( 'member' ) ) {
					// conditional content/code
 /*
$user_email = get_the_author_meta('first_name');
	echo $user_email;
*/
 
			// check if the repeater field has rows of data
			if( have_rows('gallery_images') ):
			 
			 	// loop through the rows of data
			    while ( have_rows('gallery_images') ) : the_row();
			 
			        // display a sub field value
			        ?> <img class="member-gallery" src="<?php the_sub_field('image');?>"><?php
			 
			    endwhile;
			 
			else :
			 
			    // no rows found
			 
			endif;
 					
    		}
?>
		</div>
	</div>

	<?php 
	if ( is_singular( 'member' ) ) {
	
		} else {
	get_sidebar(); 
		}
	?>

</div>

<?php get_footer(); ?>