<?php
/**
 * Template Name: Newsletter
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

						<?php $args = array( 'post_type' => 'newsletter', 'order_by' => 'post_title'/* , 'posts_per_page' => 10 */ );
						$loop = new WP_Query( $args );
						echo '<ul>';
						while ( $loop->have_posts() ) : $loop->the_post();
							?><li class="newsletter-list"><?php the_title();?><?php
								 if(get_field('newsletter_pdfs')): ?>
									<ul>
									<?php while(has_sub_field('newsletter_pdfs')): ?>
										<li><a href="<?php the_sub_field('newsletter_document'); ?>" target="_blank"><?php the_sub_field('newsletter_title'); ?></a></li>
									<?php endwhile; ?>
									</ul></li>
								<?php endif;						
							endwhile; 
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