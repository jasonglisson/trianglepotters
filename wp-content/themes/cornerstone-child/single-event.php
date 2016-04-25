<?php
/**
 * Template Name: Event
 *
 */

get_header(); ?>

<div class="row">
	<div id="primary" class="site-content large-12 columns">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>

					<div class="entry-content">
						<div class="event-info">
						   <?php $date = DateTime::createFromFormat('Ymd', get_field('event_date'));?>
							<strong>Date:</strong> <?php echo $date->format('m/d/Y');?></br>
							<strong>Location:</strong> <?php echo get_field('location');	?></br>
							<strong>Time:</strong> <?php echo get_field('time');	?></br></br>				
						</div>
						<?php the_content(); ?>
					</div>

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'cornerstone' ), '<span class="edit-link">', '</span>' ); ?>
					</footer>

				</article>

				<?php comments_template( '', true ); ?>

			<?php endwhile; ?>

		</div>
	</div>
</div>
<div class="row">
	<div id="event-gallery" class="large-12 columns">
		<?php
		$images = get_field('event_gallery');
		if( $images ): 
		 ?>
    <div id="event-gallery">
        <ul class="event-gallery">
            <?php foreach( $images as $image ): ?>
                <li>
    <a href="<?php echo $image['sizes']['large']?>" data-lightbox="event" class="event-image large-2" style="background-image:url(<?php echo $image['sizes']['thumbnail'];?>);"><img class="event-gallery-img" src="<?php echo $image['sizes']['thumbnail'];?>"></a>                    
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>		 
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