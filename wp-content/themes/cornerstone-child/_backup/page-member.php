<?php
/**
 * Template Name: Members
 *
 * Description: Cornerstone loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Cornerstone
 * @since Cornerstone 2.3.2
 */

get_header(); ?>

<div class="row">
	<div id="primary" class="site-content medium-12 columns">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>

						<?php $args = array( 'post_type' => 'member', 'meta_key' => 'last_name', 'orderby' => 'meta_value', 'order' => 'ASC', 'posts_per_page' => 200 );
						$loop = new WP_Query( $args );
						echo '<ul>';
						while ( $loop->have_posts() ) : $loop->the_post();
							?><li class="member-list"><a href="<?php the_permalink() ?>"><?php the_field('first_name');?> <?php the_field('last_name');?><?php
							$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							$rows = get_field('gallery_images' ); // get all the rows
							$rand_row = $rows[ array_rand( $rows ) ]; // get the first row
							$rand_row_image = $rand_row['image']; // get the sub field value 							
							if($feat_image) {
								echo '<div style="background-image:url('. $feat_image .');" class="fwrap">';
							} elseif(empty($feat_image)) {
								echo '<div style="background-image:url('. $rand_row_image['sizes']['medium'] .');" class="fwrap">';
							}
							if(empty($rand_row_image)) {
								echo '<div style="background-image:url(/wp-content/themes/cornerstone-child/images/default-img.png);" class="fwrap">';					
							}
			?>
			<div class="fwrap member-pot" style="background-image:url(<?php 
			
			if($rand_row_image) {
				echo $rand_row_image['sizes']['medium'];
			} else {
				echo '/wp-content/themes/cornerstone-child/images/default-img.png';
			}
			
			?>);"></div></div></a></li>

						
						<?php endwhile; 
						echo '</ul>';
						?>
				</article>


			<?php endwhile; ?>

		</div>
	</div>
</div>
	<div class="" id="home-third">
			<div id="" class="row"> 
		<?php if(get_field('action_blocks', 2)): ?>
	 		<?php while(has_sub_field('action_blocks', 2)): ?>
				<ul class="action-block">
					<h3><?php the_sub_field('block_title'); ?></h3>
					<span class="sub-title"><?php the_sub_field('block_sub_title'); ?></span>
					<span class="block-text"><?php the_sub_field('block_text'); ?></span>
					<div class="block-button"><center><a href="<?php the_sub_field('block_link'); ?>" class="button small">Read More</a></center></div>
				</ul>		 
				<?php endwhile; ?>
		 
	 
		<?php endif; ?> 
		</div>
	</div>
<?php get_footer(); ?>