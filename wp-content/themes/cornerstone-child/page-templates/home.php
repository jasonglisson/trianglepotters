<?php
/**
 * Template Name: Homepage
 *
 * @package WordPress
 * @subpackage Cornerstone
 * @since Cornerstone 2.3.2
 */
get_header(); ?>
	<div class="" id="home-first">
		<div class="top-headline">
			<div class="row">Promoting the art and craft of ceramics in North Carolina.</div>
		</div>
		<div class="row" id="home-top-section">
			<div class="home-images">
			<?php 
			$front_image = get_field('featured_image');
			$front_image_link = get_field('featured_image_link');
			$front_image_link_ex = get_field('external_featured_image_link');
			
			if($front_image){

				if($front_image_link){			
					echo '<a href="'. $front_image_link .'">';
						echo '<img src="'. $front_image .'">';
					echo '</a>';
				}elseif($front_image_link_ex){
					echo '<a href="'. $front_image_link_ex .'">';
						echo '<img src="'. $front_image .'">';
					echo '</a>';
				}
				
				if(!$front_image_link_ex && !$front_image_link){
					echo '<img src="'. $front_image .'">';
				}	
			
			 } else {
			 	homepage_pottery(); 
			 }
			?>
			</div>
			<div class="front-sidebar small-12 columns">
				<h3>Next TPG Event</h3>
				<div class="event-wrap">
<!-- 					<?php pottery_event(); ?> -->
				<?php 
					
						$posts2 = get_field('event_link');
						
						if ( !empty( $posts2 ) ): ?>	
						    <?php foreach( $posts2 as $post): // variable must be called $post (IMPORTANT) ?>
						        <?php setup_postdata($post); ?>
						        <div>
						            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						        </div>
						        <div class="home-text"><?php
								$date = DateTime::createFromFormat('Ymd', get_field('event_date'));?>
								<strong>Date:</strong> <?php echo $date->format('d/m/Y');?></br>
								<strong>Location:</strong> <?php echo get_field('location');	?></br>
								<strong>Time:</strong> <?php echo get_field('time');	?></br></br>
								<?php $content = $post->post_content;
								$excerpt = substr($content, 0, 305);
								$excerpt_post = strip_tags($excerpt);
								echo $excerpt_post; echo '...';
									?><a href="<?php the_permalink(); ?>">Read More</a>
						        </div>
						    <?php endforeach; 
							  else:
							  echo the_field('top_message'); 
						    ?>
						<?php endif; 
						wp_reset_postdata();	
							
						?>					

				</div>
			</div> 
		</div>
	</div>

	<div class="" id="home-second">
		<div id="home-middle-section" class="row"> 
			<?php while (have_posts()) : the_post(); ?>
			<div id="page-content">
				<?php the_content(); 
				endwhile; 
				wp_reset_postdata();	?>
<!-- 			<a href="/about">Click here to Read More about the Triangle Pottery</a> -->
			</div>
		</div>	
	</div>	
	<div class="" id="home-third">
			<div id="" class="row"> 
		<?php if(get_field('action_blocks')): ?>
	 		<?php while(has_sub_field('action_blocks')): ?>
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