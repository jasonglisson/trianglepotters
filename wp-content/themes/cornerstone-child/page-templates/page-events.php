<?php
/**
 * Template Name: Events
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
						<h3 style="color:#666;border-bottom:1px dotted #ddd;">Upcoming Events</h3> 
						<?php /*
$args = array( 
							'post_type' => 'event', 
							'order_by' => 'date', 
							'order' => 'DESC', 
							'posts_per_page' => -1
						);
*/

						$event0 = current_time('Ymd');
						$args = array(
						    'post_type' => 'event',
							'post_status' => 'publish',
							'posts_per_page' => '10',
							'meta_query' => array(
								array(
									'key' => 'event_date',
									'compare' => '>=',
									'value' => $event0,
									)
									),
							'meta_key' => 'event_date',
							'orderby' => 'meta_value',
							'order' => 'DESC',
							'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
						);						
						
						$loop = new WP_Query( $args ); /* print_r($loop); */
/*
						echo '<ul>';
						while ( $loop->have_posts() ) : $loop->the_post();
							?><li class="event-list"><h3><a href="<?php the_permalink() ?>"><?php the_title();?> - 
							<?php $date = DateTime::createFromFormat('Ymd', get_field('event_date'));
								  echo $date->format('m/d/Y');?></a></h3>
								  <?php the_excerpt(); ?></li>
							<?php				
							endwhile; 
						echo '</ul>';
*/
						
						if ( !empty( $loop->posts ) ) {
							while ( $loop->have_posts() ) : $loop->the_post();
							?><li class="event-list"><h3><a href="<?php the_permalink() ?>"><?php the_title();?> - 
							<?php $date = DateTime::createFromFormat('Ymd', get_field('event_date'));
								  echo $date->format('m/d/Y');?></a></h3>
								  <?php the_excerpt(); ?></li>
							<?php				
							endwhile; 
							echo '</ul><br><br><br><br>';
						} else {
							echo 'No upcoming events.<br><br><br><br><br><br>';
						}
						
						?>						
						<h3 style="color:#666;border-bottom:1px dotted #ddd;">Past Events </h3> 
						<?php /*
$args = array( 
							'post_type' => 'event', 
							'order_by' => 'date', 
							'order' => 'DESC', 
							'posts_per_page' => -1
						);
*/

						$event1 = current_time('Ymd');
						$args = array(
						    'post_type' => 'event',
							'post_status' => 'publish',
							'posts_per_page' => '10',
							'meta_query' => array(
								array(
									'key' => 'event_date',
									'compare' => '<=',
									'value' => $event1,
									)
									),
							'meta_key' => 'event_date',
							'orderby' => 'meta_value',
							'order' => 'DESC',
							'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
						);						
						
						$loop = new WP_Query( $args );
						echo '<ul>';
						while ( $loop->have_posts() ) : $loop->the_post();
							?><li class="event-list"><h3><a href="<?php the_permalink() ?>"><?php the_title();?> - 
							<?php $date = DateTime::createFromFormat('Ymd', get_field('event_date'));
								  echo $date->format('m/d/Y');?></a></h3>
								  <?php the_excerpt(); ?></li>
							<?php				
							endwhile; 
						echo '</ul>';
						?>						
					</div>

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