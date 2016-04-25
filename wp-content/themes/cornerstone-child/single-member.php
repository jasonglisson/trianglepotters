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
	<div id="" class="site-content large-12 columns">
		<div id="content" role="main" class="large-9 medium-12 member-info">
		
			<?php while (have_posts()) : the_post(); ?>
			
			<h2><?php the_field('first_name');?> <?php the_field('last_name');?></h2>
			<?php 
			$city = get_field('city_state');
			if($city) {
			 echo '<h4>'.$city.'</h4>';
			}
			$email = get_field('email_address');
			if($email) {
			 echo '<div><h5>Email: </h5><span>'.$email.'</span></div>';
			}
			$phone = get_field('phone_number');
			if($phone) {
			 echo '<div><h5>Phone: </h5><span>'.$phone.'</span></div>';
			}							
			$site = get_field('website');
			if($site) {
			 echo '<div><h5>Website: </h5><span><a href="'.$site.'" target="_blank">'.$site.'</a></span></div>';
			}	
			?>
		</div>	
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		  <div class="member-pic large-3"><?php
			  echo '<a href="'.$image[0].'" data-lightbox="pottery"><img src="'. $image[0] .'"></a>';
		?></div>
		<?php endif; ?>				
	</div>
</div>
<div class="row">
		<div id="" class="site-content large-12 columns">
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
</div>
<div class="row">
		<div id="" class="site-content large-12 columns">

<?php
$row              = 0;
$images_per_page  = 12; // How many images to display on each page
$images           = get_field('gallery_images');
$total            = count( $images );
$pages            = ceil( $total / $images_per_page );
$min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
$max              = ( $min + $images_per_page ) - 1;
 
// ACF Loop
if( have_rows( 'gallery_images' ) ) : ?>
 
  <?php while( have_rows( 'gallery_images' ) ): the_row();
 
    $row++;
 
    // Ignore this image if $row is lower than $min
    if($row < $min) { continue; }
 
    // Stop loop completely if $row is higher than $max
    if($row > $max) { break; } ?>                     
     
    <?php $img_obj = get_sub_field( 'image' ); ?>
    <a href="<?php echo $img_obj['sizes']['large']?>" data-lightbox="pottery" class="member-pottery large-2" style="background-image:url(<?php echo $img_obj['sizes']['thumbnail'];?>);"><img class="member-gallery" src="<?php echo $img_obj['sizes']['thumbnail'];?>"></a>
 
  <?php endwhile; endif;?>			
			
		</div>
</div>

<?php get_footer(); ?>